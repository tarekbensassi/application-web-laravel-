<?php

namespace App\Http\Controllers;

use App\Condidat;
use CreateReponseCandidat;
use Illuminate\Http\Request;
use App\Departement;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $candidat = Condidat::get();
        $departement = Departement::get();
        return view('admin.condidat', compact('candidat','departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidat = Condidat::all();
        $departement = Departement::all();

        return view('admin.ajouter_candidat', ['candidat' => $candidat , 'departement' => $departement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $ajouter_condidat = new Condidat ;

       $ajouter_condidat->nom = $request->nom ;
       $ajouter_condidat->prenom = $request->prenom ;
       $ajouter_condidat->email = $request->email ;
       $ajouter_condidat->tel = $request->tel ;
       $ajouter_condidat->cin = $request->cin ;
       $ajouter_condidat->id_departement = $request->departement ;
       $ajouter_condidat->mdp = str::random(8) ;
      
       $ajouter_condidat->save();

       //send Email
        $to = $request->email;
       Mail::raw('Text to e-mail', function ($message) {
        $message->to('rim@gmail.fr');
         });
       
       return redirect()->route('candidat.index')->with('status', 'Condidat ajouté!');
   }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view('candidats.show', ['candidats' => Condidat::find($id)]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Condidat $candidat)
    {
        return view('candidats.update', [
        'candidat' => $candidat
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'cin' => $request->cin,
        ];
        $Condidat = Condidat::where('id', $id)->update($data);
        return redirect()->route('condidat.index')->with('status', 'Condidat Modifié !');
       
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $post =Condidat::where('id',$id)->first();
        $post->delete();
         $todoDelStatus = $post->delete();
    }
}
