@extends('layout')
@section('content')

    <h1> list of questions </h1>
    <ul>
        @foreach ($questions as $question)
        <li>
            <a href="{{ route('question.show',['question'=> $questions->id])}}"> {{$question->enonce}} </a>
            <p>{{$question ->bareme}} </p>
            <p>{{$question ->type}} </p>
            <p>{{$question ->numero}} </p>
            <em> {{$question ->created_at}}</em>
        </li>

   
    
            
        @endforeach
    </ul>
@endsection