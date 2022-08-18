<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Cytology;
use App\CytologySubitem;

class CytologyController extends Controller
{
    public function index(Request $request)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();



            $searchName = $request['search_name'] ?: "";
            $searchAbb = $request['search_abbreviation'] ?: "";

            if ($searchName != '' or $searchAbb != '') {
                $cytology = Cytology::where('name', $searchName)->orWhere('abbreviation', $searchAbb)->get();
            } else {
                $cytology = Cytology::all();
                $CytologySubitem = CytologySubitem::all();
            }

            return view('exam.cytology', compact('user', 'role', 'cytology', 'CytologySubitem'));
        } else {
            return view('error.403');
        }
    }
    public function create()
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();

            return view('exam.createcytology', compact('user', 'role'));
        } else {
            return view('error.403');
        }
    }
    public function destroySubItem($id)
    {
        $user = Sentinel::getUser();
        
          CytologySubitem::find($id)->delete();

            return redirect()->route('cytology')
                ->with('success', 'subcytology deleted successfully');
                
        // if ($user->hasAccess('doctor.list')) {
          
        // } else {
        //     return view('error.403');
        // }
    }

    public function subItem($id)
    {


        $cytology_id = CytologySubitem::where('cytology_Id', '=', $id)->get();

        return response($cytology_id, 200)
            ->header('Content-Type', 'text/plain');
    }

    public function addSubItem(Request $request, $id)
    {
        $user = Sentinel::getUser();



        if ($user->hasAccess('doctor.list')) {

            $validatedData = $request->validate(
                [
                    'cytology_subitem' => '',
                    'code' => ''
                ],
            );
            
             
            // try {
            //          $CytologySubitem = new CytologySubitem();
            //           $CytologySubitem->cytology_subitem = $request->cytology_subitem;
            //           $CytologySubitem->code = $request->code;
            //           $CytologySubitem->cytology_Id = $id;
            //           $CytologySubitem->save();    
            // } catch (Exception $e) {
            //     return redirect('cytology')->with('error', 'Something went wrong!!! ' . $e->getMessage());
            // }
            
           //  && CytologySubitem::where('cytology_Id', '=', $id)->exists()
            
            
                if ( CytologySubitem::where('code', '=', $request->code)->exists() && CytologySubitem::where('cytology_Id', '=', $id)->exists() ) {
                                          return view('error.403');

                } else {
                      $CytologySubitem = new CytologySubitem();
                      $CytologySubitem->cytology_subitem = $request->cytology_subitem;
                      $CytologySubitem->code = $request->code;
                      $CytologySubitem->cytology_Id = $id;
                      $CytologySubitem->save();    
                    
                }
    
        }
    }
    public function store(Request $request)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $validatedData = $request->validate(
                [

                    'cytology_name' => '',
                ],
            );
            try {
                $cytology = new Cytology();
                $cytology->name = $request->cytology_name;

                $cytology->save();

                return redirect('cytology')->with('success', 'Cytology created successfully!');
            } catch (Exception $e) {
                return redirect('cytology')->with('error', 'Something went wrong!!! ' . $e->getMessage());
            }
        } else {
            return view('error.403');
        }
    }

    public function edit($id)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();

            $cytology = Cytology::find($id);

            return view('exam.editcytology', compact('user', 'role', 'cytology'));
        } else {
            return view('error.403');
        }
    }
    public function update(Request $request, $id)
    {

        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $validatedData = $request->validate(
                [

                    'cytology_name' => '',
                ],
            );
            try {
                $cytology = Cytology::find($id);
                $cytology->name = $request->cytology_name;

                $cytology->save();

                return redirect('cytology')->with('success', 'Cytology Updated successfully!');
            } catch (Exception $e) {
                return redirect('cytology')->with('error', 'Something went wrong!!! ' . $e->getMessage());
            }
        } else {
            return view('error.403');
        }
    }
    public function destroy($id)
    {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            Cytology::find($id)->delete();

            return redirect()->route('cytology')
                ->with('success', 'cytology deleted successfully');
        } else {
            return view('error.403');
        }
    }
}
