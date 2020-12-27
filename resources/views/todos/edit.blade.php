@extends('todos.layout')

@section('content')
  <div>
    <h1>Edit Todo list</h1>
    <x-alert />
    <form action="{{route('todo.update',$todo->id)}}" method="post">
      @csrf
      @method('patch')
      <input type="text" name="title" value="{{$todo->title}}"/><br/>
      <textarea name="description" placeholder="Description">{{$todo->description}}</textarea><br/>
      <input type="submit" name="" value="Update" />
      @livewire('edit-step', ['steps' => $todo->steps])
    </form>
    <a href="{{route('todo.index')}}">
      <button>Back</button>
    </a>
  </div>
@endsection
  