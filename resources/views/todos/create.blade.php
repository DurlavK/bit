@extends('todos.layout')

@section('content')
  <div>
    <h1>Todo list</h1>
    <x-alert />
    <form action="{{route('todo.store')}}" method="post">
      @csrf
      <input type="text" name="title" placeholder="Title"/><br/>
      <textarea name="description" placeholder="Description"></textarea><br/>
      <input type="submit" name="" value="Create" />
      @livewire('step')
    </form>
    <a href="{{route('todo.index')}}">
      <button>Back</button>
    </a>
  </div>
@endsection
  
