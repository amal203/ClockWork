@extends('layout.topbar')
@section('head')
<!-- <style>
body {
background-image: url("https://cdn.pixabay.com/photo/2018/03/11/09/09/time-3216244_960_720.jpg");
}
</style> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>useradd</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @endsection

@section('content')


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create a user !</h1>
                            </div>
                            <form class="user" method="POST" action="/userindex">
                                @csrf
                                <div class="form-group row">
                                    <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name *">
                                    </div> -->
                                    <div class="container">
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                            placeholder="Name *">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user"
                                            id="birthdate"  name="birthdate" placeholder="Birthdate">
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <input type="text" class="form-control form-control-user"
                                            id="adress" name="adress" placeholder="Adress">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="post" name="post" placeholder="Post*">
                                    </div>
                                    <div>
                                    
                                    <div>  
                                      <label for="gender">Gender</label> 
                                    </div>  
                                
                                    
                                    <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gender" value="male" checked>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                                </div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user"
                                            id="phone_number" name="phone_number"  placeholder="Phone number">
                                    </div>
                                     <div>
                                        <input type="photo_url" class="form-control form-control-user"
                                            id="avatar" name="avatar" placeholder="Avatar url" >
                                    </div>
                                </div>
                                <div>
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
                                        placeholder="Email Address *">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="password" name="password"  placeholder="Password *">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        id="password-confirm" name="password_confirmation" placeholder="Repeat Password *">
                                    </div>
                                </div>
                                
                                <button class="btn btn-success btn-icon-split" >
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Submit</span>
                                
                                </button>
                                <hr>
                                <a href="userindex" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Cancel</span>
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/forgot-password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->

    
@endsection


