@extends('app')
@section('content')

<div class="container my-5">

    {{-- <div class="d-flex justify-content-center gap-4 ">
        <div>

            <input type="text" name="task" class="form-control " name="" id="">

        </div>
        <div>

            <button class="btn btn-primary">Add Task</button>
        </div>
    </div> --}}


    <div class=" container my-5">

        <div class="">
        <a href="{{route('crud.create')}}"> <button class="btn btn-primary">Add Task</button></a>
        </div>
        <table class="table my-5">
            <thead>
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Task List</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($resourceTodo as $item )
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->task}}</td>
                    <td>
                        @if ($item->status == 0)
                        <span ><a href="{{route('setstatus')}}" class="badge bg-danger">Not Complete</a></span>

                        @else
                        <span><a href="" class="badge bg-primary">Complete</a></span>

                        @endif


                    </td>
                    <td class="d-flex gap-2">

                       <a href="{{route('crud.edit',$item->id)}}"><button class=" btn btn-success">EDIT</button></a>
                        <form action="{{route('crud.destroy',$item->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                           <button class="btn btn-danger ">DELETE</button>

                        </form>

                    </td>
                  </tr>

                @endforeach



            </tbody>
          </table>





    </div>

</div>


@endsection
