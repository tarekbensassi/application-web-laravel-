@extends('layout')
@section('content')

    
  
        
           <p> {{$question ->enonce}} </p>
            <p>{{$question ->bareme}} </p>
            <p>{{$question ->type}} </p>
            <p>{{$question ->numero}} </p>
           
            <em> {{$question->created_at}}</em>
    

   
    
            
         
@endsection