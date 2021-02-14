<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Examen;
use App\Question;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $examen = Examen::get();

        return view('admin.ajouter_examen' , compact ('examen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       // $examen = Examen::all();
       // return view('admin.ajouter_examen', ['examen' => $examen]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
       
        $input = $request->input();
        $examen =Examen::create($input);
        
        return redirect()->route('examen.index')->with('status', 'Examen Ajouté !');

       // return view('admin.ajouter_question', compact('questions','i'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('examens.show', ['examens' => Examen::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Examen $examen)
    {
       // return view('examens.update', ['examen' => $examen]);
    }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request, $id)
    {
    
        $data = [
            'nom' => $request->nom,
            'bareme' => $request->bareme,
            'nbq' => $request->nbq,
        ];
      $examen = Examen::where('id', $id)->update($data);
     
      return redirect()->route('examen.index')->with('status', 'Examen Modifié !');

    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
      */
  
   public function destroy($id)
    {   

        $examen =Examen::where('id',$id)->first();
        $examen->delete();
        return redirect()->route('examen.index')->with('status', 'Examen supprimé !');
        
    }
}