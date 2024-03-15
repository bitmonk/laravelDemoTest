@extends('app')
@section('content')

<form action="{{route('crud.store')}}" method="post">
    <div class="d-flex justify-content-center gap-4 my-5 ">
        @csrf
        <div>

            <input type="text" name="task" class="form-control " name="" id="">

        </div>
        <div>

            <button class="btn btn-primary">Add Task</button>
        </div>
    </div>
</form>

@endsection
