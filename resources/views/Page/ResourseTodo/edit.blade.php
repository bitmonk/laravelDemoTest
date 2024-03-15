@extends('app')
@section('content')
<div class="container">
    <form action="{{route('crud.update',$resourceTodoEdit->id)}}" method="post">
        @method('put')
        @csrf
        <div class="my-5 d-flex gap-4 justify-content-center">
            <input type="text" class="form-control w-25" name="task" value="{{$resourceTodoEdit->task}}" name="" id="">
            <div>
                <button class="btn btn-primary">Edit</button>
            </div>

        </div>
    </form>


</div>

@endsection
