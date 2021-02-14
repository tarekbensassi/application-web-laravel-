@extends('layout')
@section('content')

    
  
        
           <p> {{$examen ->nom_ex}} </p>
            <p>{{$examen ->bareme}} </p>
            <p>{{$examen ->nbre_question}} </p>
            <p>{{$examen ->description}} </p>
           
            <em> {{$examen->created_at}}</em>
    

   
    
            
         
@endsection