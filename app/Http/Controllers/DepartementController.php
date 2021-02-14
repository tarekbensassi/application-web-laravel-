<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $departement=Departement::get();
        
        //dd($departement); 

        return view('admin.departement',compact('departement'));

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.departement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    

    public function store(Request $request)
    {
        
        $input = $request->input();

        $departement = new Departement;
        $departement->nom = $request->input('nom');
        $departement->save();
     
    // $todoStatus =Departement::create($input);
        if ($departement) {
            $request->session()->flash('success', 'Todo successfully added');
        } else {
            $request->session()->flash('error', 'Oops something went wrong, Todo not saved');
        }
       
        $departement= Departement::all();
        
        //dd($departement); 

        return view('admin.departement', ['departement' => $departement]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return
        view('departements.show',['departements'=>departement::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(departement $departement)
    {
        return view('Departements.update', [
            'Departement' =>$departement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = [
            'nom' => $request->nom,
        ];
       $Departement = Departement::where('id', $id)->update($data);
     
      return redirect()->route('departement.index')->with('status', 'Departement Modifié !');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post =Departement::where('id',$id)->first();
        $post->delete();
         $todoDelStatus = $post->delete();
        if ($todoDelStatus) {
               return redirect()->route('Departement.create');
        
        } else {
              return redirect()->route('Departement.create');
        
                }
        
    }
    
}
