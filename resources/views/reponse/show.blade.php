@extends('layout')
@section('content')

    
  
        
           <p> {{$reponse ->contenu}} </p>
            <p>{{$reponse ->correct}} </p>
          
           
            <em> {{$reponse->created_at}}</em>
    

   
    
            
         
@endsection