@extends('layout')
@section('content')

    <h1> list of exams </h1>
    <ul>
        @foreach ($examens as $examen)
        <li>
          <h2><a href="{{ route('examen.show',['examen'=> $examens->id])}}"> {{$examen ->nom_ex}} </a></h2>
            <p>{{$examen ->bareme}} </p>
            <p>{{$examen ->nbre_question}} </p>
            <p>{{$examen ->description}} </p>
            <em> {{$examen ->created_at}}</em>
        </li>

   
    
            
        @endforeach
    </ul>
@endsection