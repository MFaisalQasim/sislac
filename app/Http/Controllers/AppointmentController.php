<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\NewParameter;
use App\Patient;
use App\DoctorAvailableDay;
use App\DoctorAvailableSlot;
use App\DoctorAvailableTime;
use App\Notification;
use App\ReceptionListDoctor;
use App\User;
use Illuminate\Support\Facades\Mail;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class AppointmentController extends Controller
{
    protected $appointment;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('sentinel.auth');
        $this->appointment = new Appointment();
        $this->middleware(function ($request, $next) {
            if (session()->has('page_limit')) {
                $this->limit = session()->get('page_limit');
            } else {
                $this->limit = Config::get('app.page_limit');
            }
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.create')) {
            return redirect('appointment/create');
        } else {
            return view('error.403');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.create')) {
            $userId = $user->id;
            $role = $user->roles[0]->slug;
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patients = $patient_role->users()->with('roles')->get();
            $doctor_role = Sentinel::findRoleBySlug('doctor');
            $doctors = $doctor_role->users()->with('roles')->get();
            if ($role == 'doctor') {
                $appointments = Appointment::with('patient', 'timeSlot')->where('appointment_with', $userId)->where('appointment_date', Carbon::today())->get();
            } elseif ($role == 'patient') {
                $appointments = Appointment::with('doctor', 'timeSlot')->where('appointment_for', $userId)->where('appointment_date', Carbon::today())->get();
            } else {
                $receptionists_doctor_id = ReceptionListDoctor::where('reception_id', $userId)->pluck('doctor_id');
                $appointments = Appointment::with('doctor', 'patient', 'timeSlot')
                    ->where(function ($re) use ($userId, $receptionists_doctor_id) {
                        $re->whereIN('appointment_with', $receptionists_doctor_id);
                        $re->orWhereIN('booked_by', $receptionists_doctor_id);
                        $re->orWhere('booked_by', $userId);
                    })->where('appointment_date', Carbon::today())
                    ->get();
            }
            return view('appointment.appointment', compact('user', 'role', 'patients', 'doctors', 'appointments'));
        } else {
            return view('error.403');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
    }
    /**
     * List of appointments based on specified date
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JSON response
     */
  
    public function appointment_status(Request $request, $id)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.status')) {
            $role = $user->roles[0]->slug;
            $userId = $user->id;
            $appointment = Appointment::find($id);
            if ($appointment) {
                $appointment->status = $request->status;
                $appointment->save();
            } else {
                return response()->json([
                    'isSuccess' => false,
                    'Message' => "Appointment not found",
                    'data' => '',
                ],409);
            }
        } else {
            return response()->json([
                'isSuccess' => false,
                'Message' => "You have no permission to change appointment ",
                'data' => '',
            ],409);
        }
    }
	
	public function updateStatus(Request $request){
		$status = $request->status=='Completed' ? 1 : 0;
	$update1=Appointment::where('id',$request->id)->update(['status'=>$status]);

	}

    public function appointment_create()
    {

        $user = Sentinel::getUser();
            $userId = $user->id;
            $doctor_available_day = '';
            $doctor_available_time = '';
            $role = $user->roles[0]->slug;
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patients = $patient_role->users()->with('roles')->get();
            $doctor_role = Sentinel::findRoleBySlug('doctor');
            $doctors = $doctor_role->users()->with('roles')->where('is_deleted', 0)->get();
            //dd($doctors);
            $examlist=DB::table('exams')->get();
            
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patientsids = $patient_role->users()->with(['roles'])->where('is_deleted', 0)->pluck('id');
            $patientslist = User::with('patient')->whereIN('id',$patientsids)->get();
            //dd($doctors);
            return view('appointment.appointment_create', compact('user', 'role', 'patients', 'patientslist','doctors', 'doctor_available_day', 'doctor_available_time', 'examlist'));

    }

    public function appointment_store(Request $request)	
    {
        $user = Sentinel::getUser();
        $role = $user->roles[0]->slug;
        $userId = $user->id;
 
        $request->validate([
            'patient_name' => 'required',
            'exam' => 'required',
            'crm' => 'required',
        ]);
        
        $date = $request->appointment_date;
        //$newDate = Carbon::createFromFormat('m/d/Y', date('Y-m-d'))->format('Y-m-d');
        $appointment = new Appointment();
        $appointment->patient_id = $request->patient_id;
        $appointment->user_id = $request->user_id;
        $appointment->patient_name = $request->patientname;
        $appointment->password = $request->row_password;
        $appointment->gender = $request->gender;
        
        $appointment->zip_code = $request->zip_code;
        $appointment->address = $request->address;
        $appointment->birthdate = $request->birthdate;
        $appointment->age = $request->age;
        //$appointment->rg = $request->rg;
        $appointment->cpf = $request->cpf;
        $appointment->city = $request->city;
        $appointment->phone = $request->phone;
        $appointment->responsible = $request->responsible;
        $appointment->email = $request->email;

        $appointment->appointment_with = $request->crm;
        $appointment->doctor = $request->doctor;
        $appointment->code = $request->code;
        $appointment->insurance = $request->insurance;
        $appointment->ins_company = $request->company;

        $appointment->appointment_date = $request->delivery_date;
        $appointment->available_time = $request->hour;

        $appointment->fast = $request->fast;
        $appointment->dum = $request->dum;
        $appointment->diagnosis = $request->diagnosis;
        $appointment->medicines = $request->medicines;
        $appointment->comments = $request->comments;
        $appointment->sub_total = $request->sub_total;
        $appointment->disc = $request->discount;
        $appointment->total = $request->total;
        $appointment->entrance = $request->entrance;
        $appointment->booked_by    = $user->id;
        $appointment->save();
        
        if($appointment->id){
			//echo $appointment->id;die;
            $input = $request->input('exam');
            $array=array();
            foreach($input as $row){
                if(isset($row['name']) || $row['name']=='null'){
                    if(isset($row['id']) || $row['id']=='null'){
                         $array[]=array(
                            'appointments_id'=>$appointment->id,
                            'exam_id'=>$row['id'],
                            'name'=>$row['name'],
                            'description'=>$row['name'],
                            'price'=>$row['price'],
                        );
                    }
                    
                }
               
            } 

            if(!empty($array)){
                DB::table('appointment_exams')->insert($array);
            }
            
        }
        
       
        //dd($input);

        return redirect('appointment/create')->with('success', 'Appointment created successfully');
  
     
    }
    
    public function appointment_edit($id)
    {

        $user = Sentinel::getUser();
            $userId = $user->id;
            $doctor_available_day = '';
            $doctor_available_time = '';
            $role = $user->roles[0]->slug;
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patients = $patient_role->users()->with('roles')->get();
            $doctor_role = Sentinel::findRoleBySlug('doctor');
            $doctors = $doctor_role->users()->with('roles')->where('is_deleted', 0)->get();
            //dd($doctors);
            $examlist=DB::table('exams')->get();
            
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patientsids = $patient_role->users()->with(['roles'])->where('is_deleted', 0)->pluck('id');
            $patientslist = User::with('patient')->whereIN('id',$patientsids)->get();
            $appointment = Appointment::with('appointdoctor', 'patient','patientinfo','exams')->where(['status' => 0])->find($id);
            //dd($appointment->toArray());
            return view('appointment.appointment_edit', compact('user', 'role', 'patients', 'patientslist','doctors', 'doctor_available_day', 'doctor_available_time', 'examlist','appointment'));

    }
    public function appointment_update(Request $request, $id){
            
            $user = Sentinel::getUser();
            $role = $user->roles[0]->slug;
            $userId = $user->id;
        
            $appointment = Appointment::find($id);
            $appointment->appointment_with = $request->crm;
            $appointment->doctor = $request->doctor;
            $appointment->code = $request->code;
            $appointment->insurance = $request->insurance;
            $appointment->ins_company = $request->company;
    
            $appointment->appointment_date = $request->delivery_date;
            $appointment->available_time = $request->hour;
    
            $appointment->fast = $request->fast;
            $appointment->dum = $request->dum;
            $appointment->diagnosis = $request->diagnosis;
            $appointment->medicines = $request->medicines;
            $appointment->comments = $request->comments;
            $appointment->sub_total = $request->sub_total;
            $appointment->disc = $request->discount;
            $appointment->total = $request->total;
            $appointment->entrance = $request->entrance;
            $appointment->booked_by    = $user->id;
            $appointment->save();
        
            $input = $request->input('exam');
            $array=array();
            
            foreach($input as $row){
                if(isset($row['name']) || $row['name']=='null'){
                    if(isset($row['id']) || $row['id']=='null'){
                         $array[]=array(
                            'appointments_id'=>$id,
                            'exam_id'=>$row['id'],
                            'name'=>$row['name'],
                            'description'=>$row['name'],
                            'price'=>$row['price'],
                        );
                    }
                    
                }
               
            }
            DB::table('appointment_exams')->where('appointments_id', $id)->delete();
            if(!empty($array)){
                DB::table('appointment_exams')->insert($array);
            }
            return redirect('novo-atendimento/edit/'.$id)->with('success', 'Appointment updated successfully');
            
    }
    public function appointment_remove($id){
        
        $appointment=Appointment::find($id);
        $appointment->delete();
        return redirect('pending-appointment');
    }
    
    public function appointment_view($id)
    {

        $user = Sentinel::getUser();
            $userId = $user->id;
            $doctor_available_day = '';
            $doctor_available_time = '';
            $role = $user->roles[0]->slug;
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patients = $patient_role->users()->with('roles')->get();
            $doctor_role = Sentinel::findRoleBySlug('doctor');
            $doctors = $doctor_role->users()->with('roles')->where('is_deleted', 0)->get();
            //dd($doctors);
            $examlist=DB::table('exams')->get();
            
            $patient_role = Sentinel::findRoleBySlug('patient');
            $patientsids = $patient_role->users()->with(['roles'])->where('is_deleted', 0)->pluck('id');
            $patientslist = User::with('patient')->whereIN('id',$patientsids)->get();
            $pending_appointment = Appointment::with('doctor', 'patient','patientinfo','exams')->where(['status' => 0])->find($id);
            dd($pending_appointment);
            return view('appointment.appointment_edit', compact('user', 'role', 'patients', 'patientslist','doctors', 'doctor_available_day', 'doctor_available_time', 'examlist'));

    }
    
    public function all_appointment (Request $request, User $patient)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $search = $request['search_name'] ? : "";
            $search_id = $request['search_id'] ? : "";
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            if ($search != '' OR $search_id != '') {
                $pending_appointment = Appointment::with('doctor', 'patient','patientinfo','exams')
                    ->where('id', $search_id)
                    ->orWhere('patient_name', $search)
                    ->orderBy('id', 'DESC')->paginate($this->limit);
                }else{
                $pending_appointment = Appointment::with('doctor', 'patient','patientinfo','exams')->orderBy('id', 'DESC')->paginate($this->limit);
            }
            //dd($pending_appointment);
            return view('appointment.all-appointment', compact('user', 'role', 'pending_appointment','search','search_id'));
        } else {
            return view('error.403');
        }
    }
    
    public function pending_appointment(Request $request, User $patient)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $search = $request['search_name'] ? : "";
            $search_id = $request['search_id'] ? : "";
            
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            if ($search != '' OR $search_id != '') {
                $pending_appointment = Appointment::with('doctor', 'patient','patientinfo','exams')
                ->where(['status' => 0])
                ->where('id', $search_id)
                ->orWhere('patient_name', $search)
                ->orderBy('id', 'DESC')->paginate($this->limit);
            }else{
                $pending_appointment = Appointment::with('doctor', 'patient','patientinfo','exams')->where(['status' => 0])->orderBy('id', 'DESC')->paginate($this->limit);
            }
            
            //dd($pending_appointment);
            return view('appointment.pending-appointment', compact('user', 'role', 'pending_appointment','search','search_id'));
        } else {
            return view('error.403');
        }
    }

    public function upcoming_appointment(User $patient)
    {
        $user = Sentinel::getUser();
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            $Upcoming_appointment = Appointment::where('appointment_date', '>', $today)->orWhere(function ($re) use ($today, $time) {
                $re->whereDate('appointment_date', $today);
            })->paginate($this->limit);
            return view('appointment.upcoming-appointment', compact('user', 'role', 'Upcoming_appointment'));
        } else {
            return view('error.403');
        }
    }

    public function complete_appointment(Request $request,User $patient)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $search = $request['search_name'] ? : "";
            $search_id = $request['search_id'] ? : "";
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            if ($search != '' OR $search_id != '') {
                $Complete_appointment = Appointment::with('doctor', 'patient')
                ->where(['status' => 1])
                ->where('id', $search_id)
                ->orWhere('patient_name', $search)
                ->orderBy('id', 'DESC')->paginate($this->limit);
            }else{
                $Complete_appointment = Appointment::with('doctor', 'patient')->where(['status' => 1])->orderBy('id', 'DESC')->paginate($this->limit);
            }
            
            return view('appointment.complete-appointment', compact('user', 'role', 'Complete_appointment','search','search_id'));
        } else {
            return view('error.403');
        }
    }

    public function cancel_appointment(User $patient)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            $admin_role = Sentinel::findRoleBySlug('admin');
            $verify_mail = $user->email;
            $app_name =  config('app.name');
            $Cancel_appointment = Appointment::with('doctor', 'patient')->where('status', 2)->orderBy('id', 'DESC')->paginate($this->limit);
            return view('appointment.cancel-appointment', compact('user', 'role', 'Cancel_appointment'));
        } else {
            return view('error.403');
        }
    }

    public function today_appointment(User $patient)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
        
            $Today_appointment = Appointment::with('doctor', 'patient')->whereDate('appointment_date', Carbon::today())->orderBy('id', 'DESC')->paginate($this->limit);
          // dd($Today_appointment);
            return view('appointment.today-appointment', compact('user', 'role', 'Today_appointment'));
        } else {
            return view('error.403');
        }
    }
    
    public function getpatientlist(Request $request){
        $patient_role = Sentinel::findRoleBySlug('patient');
        $patientsids = $patient_role->users()->with(['roles'])->where('is_deleted', 0)->pluck('id');
        $Patients = User::with('patient')->whereIN('id',$patientsids)->get();
        //return  $Patients;
        foreach($Patients as $patient){
            if($patient->patient==null){
                $txt=$patient->first_name.' '.$patient->last_name.' | null | null';
            }else{
                $txt=$patient->first_name.' '.$patient->last_name.' | '.$patient->patient->patient_dob.' | '.$patient->patient->patient_CPF;
            }
            
            $response[] = array(
                "id"=>$patient->id,
                "text"=>$txt
           );
       }
       return $response;
       
        $user = Sentinel::getUser();
        $role = $user->roles[0]->slug;
        $patient_role = Sentinel::findRoleBySlug('patient');
        $patients = $patient_role->users()->with(['roles'])->where('is_deleted', 0)->get();
        //return  $patients;
        foreach($patients as $patient){
             $response[] = array(
                 "id"=>$patient->id,
                 "text"=>$patient->first_name.' '.$patient->last_name
            );
        }
        return $response;
    }
    public function getpatient($id){
        $user=User::with('patient')->find($id);
        return  $user;
    }

    public function appointmentdata(){  
         $user = Sentinel::getUser();  
          if ($user->hasAccess('appointment.list')) {
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;    
          $appointments= Appointment::all();
    }
        return view('appointment.add-appointment', compact('appointments','user','role'));
       
    }
    public function appointmentdata1(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment1', compact('appointments','user','role'));
      
   }
   public function appointmentdata2(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment2', compact('appointments','user','role'));
      
   }
   public function appointmentdata3(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment3', compact('appointments','user','role'));
      
   }
   public function appointmentdata4(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment4', compact('appointments','user','role'));
      
   }
   public function appointmentdata5(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment5', compact('appointments','user','role'));
      
   }
   public function appointmentdata6(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment6', compact('appointments','user','role'));
      
   }
   public function appointmentdata7(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment7', compact('appointments','user','role'));
      
   }
   public function appointmentdata8(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment8', compact('appointments','user','role'));
      
   }
   public function appointmentdata9(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment9', compact('appointments','user','role'));
      
   }
   public function appointmentdata10(){  
        $user = Sentinel::getUser();  
         if ($user->hasAccess('appointment.list')) {
           $user_id = Sentinel::getUser()->id;
           $role = $user->roles[0]->slug;    
         $appointments= Appointment::all();
   }
       return view('appointment.add-appointment10', compact('appointments','user','role'));
      
   }


    public function showAppointmentDetail(Request $request){		
        $appointments= Appointment::where('id',$request->id)->get();  
        $exam = DB::table('appointment_exams')->where('appointments_id',$request->id)->get()->toArray();
      $new_parameter=DB::table('results')->where(['appointment_id'=>$request->id])->get()->toArray();

     


        if(count($appointments)>0){
            return response()->json([
                'isSuccess' => TRUE,
                'data' =>$appointments,
                'Exam'=>$exam,
                'result'=>$new_parameter,
            ],200);

        }

        else{
         return response()->json([
                'isSuccess' => False,
                'data' =>'No Appointment',
            ],200);
        }


    }

    public function getExamParameter(Request $request){
        $examInfo = Exam::find($request->id);
           if(count($appointments)>0){
            return response()->json([
                'isSuccess' => TRUE,
                'Parameter'=>$exam
            ],200);

        }

        else{
         return response()->json([
                'isSuccess' => False,
                'data' =>'No Parameter',
            ],200);
        }
    }
	
	public function InsertResultParameters(Request $request){

		$parameters = $request->all();		
        if($request->appointment_id==10083){
             $array=array(
                            'result'=>$parameters['data'],
                            'exams_id'=>$request->exam_id,
                            'appointment_id'=>$request->appointment_id,
                            'new_parameter_id'=>0,                    
                        );
                  $data = DB::table('results')->where(['appointment_id'=>$request->appointment_id,'exams_id'=>$request->exam_id])->count();
                 if($data>0){ 
                    $update = DB::table('results')->where(['appointment_id'=>$request->appointment_id,'exams_id'=>$request->exam_id])->update($array);
                    $done = $update ? true : false;
                 }
              else{
                  $insert = DB::table('results')->insert($array);
              $done = $insert==1 ? true : false;
              }
                        
            
        }

        else{
          $status = $parameters['Status']=='Completed' ? 1 : 0;
             foreach($parameters['data'] as $parameter){
           $result = $parameter['result'];
           $exam_id = $parameter['exams_id'];   
           $appointment_Id = $parameter['appointment_id'];
           $parameter_id = $parameter['new_parameter_id'];         
           $data = DB::table('results')->where(['appointment_id'=>$appointment_Id, 'new_parameter_id'=>$parameter_id, 'exams_id'=>$exam_id])->count();
           
        if($data>0){ 
        $update = DB::table('results')->where(['appointment_id'=>$appointment_Id, 'new_parameter_id'=>$parameter_id, 'exams_id'=>$exam_id])->update(['result'=>$result]);
        $done = $update ? true : false;
              }else{
                $array=array(
                            'result'=>$result ? $result : '',
                            'exams_id'=>$exam_id,
                            'appointment_id'=>$appointment_Id,
                            'new_parameter_id'=>$parameter_id,                    
                        );
                        
              $insert = DB::table('results')->insert($array);
              $done = $insert==1 ? true : false;
          }
           // if($update){
                //  return  response()->json([
                //'isSuccess' => true,
               // 'data' =>'Result Saved Successfully!',
           // ],200);
          // }
               
    }

        }
		
	  if($done){
		  return  response()->json([
             'isSuccess' => true,
              'data' =>'Result Saved Successfully!',
          ],200);
		 }
	           	
}
	
	public function patientexam($id){
	    
	    $user = Sentinel::getUser();
        if ($user->hasAccess('appointment.list')) {
            $user_id = Sentinel::getUser()->id;
            $role = $user->roles[0]->slug;
            $today = Carbon::today()->format('Y/m/d');
            $time = date('H:i:s');
            $appointment = Appointment::with('doctor', 'patient','patientinfo','exams')->find($id);
            //dd($appointment);
           return view('appointment.appointment-exam', compact('user', 'role', 'appointment'));
        } else {
            return view('error.403');
        }
	     //$appointment = Appointment::with('doctor', 'patient','patientinfo','exams')->find($id);
	     //dd($appointment);

	}

}
