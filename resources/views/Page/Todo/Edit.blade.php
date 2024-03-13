@extends('app')
@section('content')

<div class="container">
    <form action="{{route('todo.update',$editTodos->id)}}" method="post">
        @csrf
        <div class="my-5 d-flex gap-4 justify-content-center">
            <input type="text" class="form-control w-25" name="task" value="{{$editTodos->task}}" name="" id="">
            <div>
                <button class="btn btn-primary">Edit</button>
            </div>

        </div>
    </form>


</div>


@endsection
