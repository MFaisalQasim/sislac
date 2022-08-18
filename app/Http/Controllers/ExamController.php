<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Exam;
use App\NewParameter;
use Illuminate\Support\Facades\DB;
class ExamController extends Controller {

    public function index() {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();

            //$exam = Exam::all();
            $exam = Exam::paginate(10);
            return view('exam.examlist', compact('user', 'role', 'exam'));
        } else {
            return view('error.403');
        }
    }
	

    public function create() {
        $user = Sentinel::getUser();
		$id = Exam::orderBy('id', 'desc')->first();
		$testOfDeletedOnlyJobs = Exam::onlyTrashed()->get();
		//print_r($testOfDeletedOnlyJobs);die;
		$last_id = $id;
          $category= Category::all();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();
            $parameter = NewParameter::join('exams AS exam','exam.id','=','new_parameter.exam_id')->get();				
			  
            return view('exam.registerexam', compact('user', 'role','category','parameter','last_id'));
        } else {
            return view('error.403');
        }
    }

    public function store(Request $request) {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $validatedData = $request->validate(
                    [                        
                        'name' => '',
                        'abbreviation' => '',
                        'category' => '',
                        'deadline' => '',
                        'destiny' => '',
                        'label_group' => '',
                        'quantity_label' => '',
                        'exam_kit',
                        'exam_support',
                        'exam_price',
                        'exam_editor',
                    ],
            );
            try {
                $exam = new Exam();
                $exam->name = $request->name;
                $exam->abbreviation = $request->abbreviation;               
                $exam->category = $request->category;
                $exam->deadline = $request->deadline;                
                $exam->destiny = $request->destiny;
                $exam->label_group = $request->label_group;
                $exam->quantity_label = $request->quantity_label;
                $exam->exam_kit = $request->exam_kit;
                $exam->exam_support = $request->exam_support;
                $exam->exam_price = $request->exam_price;
                $exam->exam_editor = $request->exam_editor;
                $exam->save();

                return redirect('exam')->with('success', 'Exam created successfully!');
            } catch (Exception $e) {
                return redirect('exam')->with('error', 'Something went wrong!!! ' . $e->getMessage());
            }
        } else {
            return view('error.403');
        }
    }

    public function edit($id) {		
        $user = Sentinel::getUser();
		$category= Category::all();
        if ($user->hasAccess('doctor.update')) {			
            $role = $user->roles[0]->slug;
            $examInfo = Exam::where('id', '=', $id)->first();
            if ($examInfo) {
                 $parameter = NewParameter::select('new_parameter.*')->join('exams AS exam','exam.id','=','new_parameter.exam_id')->where('exam.id',$id)->get();
                return view('exam.editexam', compact('user', 'role', 'examInfo','id','parameter','category'));
            } else {
                return redirect('/')->with('error', 'Details not found');
            }
        } else {
            return view('error.403');
        }
    }

    public function update(Request $request, $id) {
        $user = Sentinel::getUser();
        $role = $user->roles[0]->slug;
        $examInfo = Exam::find($id);
        if ($examInfo) {
            $examInfo->update($request->all());
            return redirect('exam')->with('success', 'Exam Details updated successfully!');
        } else {
            return redirect('/')->with('error', 'Details not found');
        }
    }

    public function delete($id) {
        $user = Sentinel::getUser();
        $role = $user->roles[0]->slug;
        $examInfo = Exam::find($id);
        if ($examInfo) {
            $examInfo->delete();
            return redirect('exam')->with('success', 'Exam Details deleted successfully!');
        } else {
            return redirect('/')->with('error', 'Details not found');
        }
    }

    public function store_parameter(Request $request) {
        if ($request->ajax()) {
			$where = $request->only('parameter','type','formula','size','decimal_places');
            try {
				$name = $request->parameter;
				$parameter = NewParameter::where($where)->count();
				//print_r($parameter);die;
				if($parameter>0){
					    return response()->json([
                        'success' =>1,
                        'data'=>'Parameter Already Exist!'
              ]);
				}
			
                if ($request->id) {
                    $parameter = NewParameter::find($request->id);
                    $parameter->update($request->all());
                } else {
                    $parameter = NewParameter::create($request->all());
                }
                  return response()->json([
                        'success' => 'Parameter created successfully!',
                        'data'=>$parameter
              ]);
                //return redirect('exam')->with('success', 'Parameter created successfully!');
            } catch (Exception $e) {
                return redirect('exam')->with('error', 'Something went wrong!!! ' . $e->getMessage());
            }
        }
    }

    public function getParameterDetails($id) {
        $parameter = NewParameter::where('id', $id)->get();
        if ($parameter) {
            return response()->json([
                        'isSuccess' => true,
                        'Message' => "Parameter Detail Get Successfully",
                        'data' => $parameter
            ]);
        }
        return response()->json([
                    'isSuccess' => false,
                    'Message' => "Parameter Detail not found",
        ]);
    }

    public function deleteParameter($id) {
        try {
            NewParameter::find($id)->delete($id);
            return response()->json([
                        'success' => 'Parameter deleted successfully!'
            ]);
        } catch (Exception $ex) {
            return response()->json([
                        'error' => 'Something went wrong!!! ' . $e->getMessage()
            ]);
        }
    }
	
	public function gealltexam(Request $request)
    {
       $exam=DB::table('exams')->get();
       return response()->json(['data'=>$exam]);
    } 

    public function getexam(Request $request)
    {
       $exam=DB::table('new_parameter')->where('exam_id', '=', $request->id)->get();
       /*if($request->appoint_id==10083){
        $new_parameter=DB::table('results')->where(['exams_id'=> $request->id,'appointment_id'=>$request->appoint_id])->get();
         if(count($new_parameter1)>0){
             $data_exam = json_decode($new_parameter1[0]->result,true);
            foreach($data_exam as $key=>$val){
                foreach($val as $j=>$val1){
                    $new_parameter[$j] = $val1;

                }
            }
        }
      


       }
       else{
        $new_parameter=DB::table('results')->where(['exams_id'=> $request->id,'appointment_id'=>$request->appoint_id])->get();
       } */
	   $new_parameter=DB::table('results')->where(['exams_id'=> $request->id,'appointment_id'=>$request->appoint_id])->get();
	   $exams=DB::table('exams')->where('id', '=', $request->id)->get();
       $cytologies=DB::table('cytologies')->get()->toArray();
       $cytology_subitems=DB::table('cytology_subitems')->get()->toArray();
        // $cytology_subitems = DB::table('cytology_subitems')->get()->toArray();
        // ->join('cytology_subitems', 'cytologies.id', '=', 'cytology_subitems.cytology_Id')
        // ->select('cytologies.id as increament_id','cytologies.name','cytology_subitems.cytology_subitem','cytology_subitems.cytology_Id')->groupBy('cytologies.id')
        // ->get()->toArray();
       return response()->json(['data'=>$exam,'exams'=>$exams,'new_param'=>isset($new_parameter)?$new_parameter: [],'cytolies'=>$cytologies,'cytology_subitems'=>$cytology_subitems]);
    }

}
