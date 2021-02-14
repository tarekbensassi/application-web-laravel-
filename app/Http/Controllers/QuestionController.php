<?php

namespace App\Http\Controllers;

use App\Question ;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       return view ('questions.index', ['questions'=> Question :: all()
       ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ajouter_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $q_num = $request->input('question_n'); 
       
        $input = $request->input();
     
        $todoStatus =Question::create($input);
        if ($todoStatus) {
            $request->session()->flash('success', 'Todo successfully added');
        } else {
            $request->session()->flash('error', 'Oops something went wrong, Todo not saved');
        }

        $examen = $request->input('id_examen');;

            $nbq = $request->input('total_question');
            $i =  $q_num + 1 ;

        if($q_num == $nbq) {

            return view('admin.layouts.master');

        }else{

            return view('admin.ajouter_question', ['examen' => $examen , 'nbq' => $nbq,  'i' => $i ]);
        }

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        
        return view ('questions.show', ['questions'=> Question :: find($question)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.update', [
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        $question->update([
            'id' => $request->input('id'),
            'enonce' => $request->input('enonce'),
            'bareme' => $request->input('bareme'),
            'numero' => $request->input('numero'),
            'type' => $request->input('type')
        ]);
        return redirect()->route('quetions.show', [$question]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('qestions.index');}
}
