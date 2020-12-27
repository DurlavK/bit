@extends('todos.layout')

@section('content')
  <div>
    <h1>{{$todo->title}}</h1>
    <h2>{{$todo->description}}</h2>
    @if($todo->steps->count()>0)
      <h2>Steps for this todo-</h2>
      @foreach($todo->steps as $step)
      <p>{{$step->name}}</p>
      @endforeach
    @endif

    <a href="{{route('todo.index')}}">
      <button>Back</button>
    </a>
  </div>
@endsection