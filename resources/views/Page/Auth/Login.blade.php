@extends('app')
@section('content')

<div class="container">

    <div class=" justify-content-center">
        <div class="card">

            <div class="card-body shadow">
                <div class="d-flex justify-content-center">
                    <form action="{{route('login.post')}}" method="post">
                        @csrf


                        {{-- <div class=" form-group my-2">
                            <input type="text" placeholder="Contact No" class="form-control" name="" id="">

                        </div> --}}
                        <div class=" form-group my-2">
                            <input type="text" name="email" value="{{old('email')}}" placeholder="email" class="form-control" name="" id="">
                            @error('email')
                            <small class="text-danger">{{$message}}</small>

                            @enderror

                        </div>
                        <div class=" form-group my-2">
                            <input type="password" name="password" value="{{old('password')}}" placeholder="password" class="form-control" name="" id="">
                            @error('password')
                            <small class="text-danger">{{$message}}</small>

                            @enderror

                        </div>

                        <div class=" form-group my-2">
                            <button class="btn btn-primary">Login</button>

                        </div>



                    </form>
                </div>



            </div>


        </div>


    </div>


</div>



@endsection
