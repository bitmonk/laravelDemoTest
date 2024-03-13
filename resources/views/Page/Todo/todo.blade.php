@extends('app')

@section('content')
    <div class="container my-5">
        <form action="{{route('todo.post')}}" method="post">
            <div class="d-flex gap-2 justify-content-center">
                @csrf
                <div>
                    <input type="text" placeholder="Add Task" name="falano" id="" class="form-control"  id="" required>
                    @error('falano')
                    <span class="text-danger">{{$message}}</span>

                    @enderror

                </div>
                <div >
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>


    </div>
    <div class=" container my-5">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Task List</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($todo as $item )
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->task}}</td>
                    <td>
                        @if ($item->status == 0)
                        <span ><a href="" class="badge bg-danger">Not Complete</a></span>

                        @else
                        <span><a href="" class="badge bg-primary">Complete</a></span>

                        @endif


                    </td>
                    <td>

                        <a href="{{route('todo.edit',$item->id)}}" ><Button class="badge bg-success">EDIT</Button></a>
                        <a href="{{route('delete',$item->id)}}" ><Button class="badge bg-danger">DELETE</Button></a>

                    </td>
                  </tr>

                @endforeach



            </tbody>
          </table>





    </div>
@endsection
