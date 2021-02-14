@extends('layout')
@section('content')

    <h1> list of reponses</h1>
    <ul>
        @foreach ($reponses as $reponse)
        <li>
            <h2><a href="{{ route('reponse.show',['reponse'=> $reponses->id])}}"> {{$reponse ->contenu}} </a></h2>
            {{$reponse ->correct}} 
           
            <em> {{$reponse->created_at}}</em>
        </li>

   
    
            
        @endforeach
    </ul>
@endsection