@extends('todos.layout')

@section('content')
  <p>
    All the todos
  <a href="{{route('todo.create')}}">
    <span class="fas fa-plus-circle"></span>
  </a>
  </p>
  <x-alert />
  <ul>
    @forelse ($todos as $todo)
      <li>
        @if ($todo->completed)
        <p style="text-decoration: line-through">{{$todo->title}}</p>
        @else
        <a href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
        @endif
        <a href="{{route('todo.edit',$todo->id)}}">
          <span class="fas fa-pen"></span>
        </a>
          
        <span class="fas fa-times" 
        onclick="event.preventDefault(); 
        if(confirm('are you sure?')){
        document.getElementById('form-delete-{{$todo->id}}').submit()}"></span>
        <form style="display:none" 
        method="post"
        id="{{'form-delete-'.$todo->id}}"
        action="{{route('todo.destroy',$todo->id)}}">
        @csrf
        @method('delete')
        </form>
        @include('todos.completeButton')
      </li>
    @empty
    <p>No task added.</p>
    @endforelse
  </ul>   
@endsection

