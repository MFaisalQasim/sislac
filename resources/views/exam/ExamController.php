<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Exam;
use App\NewParameter;

class ExamController extends Controller {

    public function index() {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();

            $exam = Exam::all();
            return view('exam.examlist', compact('user', 'role', 'exam'));
        } else {
            return view('error.403');
        }
    }

    public function create() {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $role = $user->roles[0]->slug;
            $user = Sentinel::getUser();
            $parameter = NewParameter::all();
            return view('exam.registerexam', compact('user', 'role', 'parameter'));
        } else {
            return view('error.403');
        }
    }

    public function store(Request $request) {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.list')) {
            $validatedData = $request->validate(
                    [
                        'abbreviation' => '',
                        'name' => '',
                        'category' => '',
                        'team' => '',
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
                $exam->abbreviation = $request->abbreviation;
                $exam->name = $request->name;
                $exam->category = $request->category;
                $exam->team = $request->team;
                $exam->destiny = $request->destiny;
                $exam->label_group = $request->label_group;
                $exam->quantity_label = $request->quantity_label;
                $exam->exam_kit = $request->exam_kit;
                $exam->exam_support = $request->exam_support;
                $exam->exam_price = $request->exam_price;
                $exam->exam_editor = $request->exam_editor;
                $exam->save();

                return redirect('exam')->with('success', 'Exame criado com sucesso!');
            } catch (Exception $e) {
                return redirect('exam')->with('error', 'Algo deu errado!!! ' . $e->getMessage());
            }
        } else {
            return view('error.403');
        }
    }

    public function edit($id) {
        $user = Sentinel::getUser();
        if ($user->hasAccess('doctor.update')) {
            $role = $user->roles[0]->slug;
            $examInfo = Exam::where('id', '=', $id)->first();
            if ($examInfo) {
                $parameter = NewParameter::all();
                return view('exam.editexam', compact('user', 'role', 'examInfo', 'parameter'));
            } else {
                return redirect('/')->with('error', 'Detalhes não encontrados');
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
            return redirect('exam')->with('success', 'Detalhes do exame atualizados com sucesso!');
        } else {
            return redirect('/')->with('error', 'Detalhes não encontrados');
        }
    }

    public function delete($id) {
        $user = Sentinel::getUser();
        $role = $user->roles[0]->slug;
        $examInfo = Exam::find($id);
        if ($examInfo) {
            $examInfo->delete();
            return redirect('exam')->with('success', 'Detalhes do exame excluídos com sucesso!');
        } else {
            return redirect('/')->with('error', 'Detalhes não encontrados');
        }
    }

    public function store_parameter(Request $request) {
        if ($request->ajax()) {
            try {
                if ($request->id) {
                    $parameter = NewParameter::find($request->id);
                    $parameter->update($request->all());
                } else {
                    NewParameter::create($request->all());
                }
                return redirect('exam')->with('success', 'Parâmetro criado com sucesso!');
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
                        'Message' => "Detalhe do parâmetro obtido com sucesso",
                        'data' => $parameter
            ]);
        }
        return response()->json([
                    'isSuccess' => false,
                    'Message' => "Detalhe do parâmetro não encontrado",
        ]);
    }

    public function deleteParameter($id) {
        try {
            NewParameter::find($id)->delete($id);
            return response()->json([
                        'success' => 'Parâmetro excluído com sucesso!'
            ]);
        } catch (Exception $ex) {
            return response()->json([
                        'error' => 'Something went wrong!!! ' . $e->getMessage()
            ]);
        }
    }

}
