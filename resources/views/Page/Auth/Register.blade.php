@extends('app')
@section('content')

<div class="container">

    <div class=" justify-content-center">
        <div class="card">

            <div class="card-body shadow">
                <div class="d-flex justify-content-center">
                    <form action="{{route('register.post')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name" class="form-control" name="" id="">

                        </div>
                        {{-- <div class=" form-group my-2">
                            <input type="text" placeholder="Contact No" class="form-control" name="" id="">

                        </div> --}}
                        <div class=" form-group my-2">
                            <input type="text" name="email" placeholder="email" class="form-control" name="" id="">

                        </div>
                        <div class=" form-group my-2">
                            <input type="password" name="password" placeholder="password" class="form-control" name="" id="">

                        </div>
                        <div class=" form-group my-2">
                            <input type="password" name="confirm_password" placeholder="Confirm password" class="form-control" name="" id="">

                        </div>
                        <div class=" form-group my-2">
                            <button class="btn btn-primary">Register</button>

                        </div>



                    </form>
                </div>



            </div>


        </div>


    </div>


</div>



@endsection
