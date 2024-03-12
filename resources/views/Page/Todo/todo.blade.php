@extends('app')

@section('content')
    <div class="container my-5">
        <form action="{{route('todo.post')}}" method="post">
            <div class="d-flex gap-2 justify-content-center">
                @csrf
                <div>
                    <input type="text" placeholder="Add Task" name="blabla" class="form-control"  id="">
                    @error('blabla')

                    <span class="text-danger">{{$message}}</span>
                        <span>Hello world</span>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
@endsection
