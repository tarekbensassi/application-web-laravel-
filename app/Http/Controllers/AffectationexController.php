<?php

namespace App\Http\Controllers;

use App\Affectationex;
use App\Condidat;
use App\Examen;
use Illuminate\Http\Request;

use CreateReponseCandidat;

use App\Departement;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AffectationexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $candidat = Condidat::all();
       $examen   = Examen::all();
       $affecte  = Affectationex::all();
       
      return view('admin.affectation', ['affecte' => $affecte , 'candidat' => $candidat , 'examen' => $examen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

      $affecte = new Affectationex ;

       $affecte->idcandidat = '1' ;
       $affecte->idexamen = '2' ;
       $affecte->etat = '0' ;
      
      
       $affecte->save();
        
       return redirect()->route('Affectationex.index')->with('status', 'affectation ajouté!');   
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Affectationex  $affectationex
     * @return \Illuminate\Http\Response
     */
    public function show(Affectationex $affectationex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Affectationex  $affectationex
     * @return \Illuminate\Http\Response
     */
    public function edit(Affectationex $affectationex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Affectationex  $affectationex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affectationex $affectationex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Affectationex  $affectationex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affectationex $affectationex)
    {
        //
    }
}
