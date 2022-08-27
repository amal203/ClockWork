@extends('layout.topbar')
@section('head')
<!-- <style>
/* body {
background-image: url("https://cdn.pixabay.com/photo/2018/03/11/09/09/time-3216244_960_720.jpg");
}
</style> */ -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mail" content="">
    <meta name="author" content="">

    <name>clientadd</name>

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
                                <h1 class="h4 text-gray-900 mb-4">Create a Client!</h1>
                            </div>
                            <form  method="POST" action="/clientindex" >
                                @csrf
                        
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" id="num_phone"  name="num_phone"
                                            placeholder="Phone number">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="adress"  name="adress"
                                  placeholder="Adress">
                                </div>

                                
                                <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="mail"  name="mail"
                                  placeholder="Mail Adress">
                                 
                                </div>
                                


                                     
                                    <!-- <a  href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Don't forget to update your client to add projects </span>
                                        
                                      </a>
                                      <hr> -->
                               
                                


                                
                                    
                                <div>

                                <button class="btn btn-success btn-icon-split" type="submit">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Submit</span>
                                
                                </button>
                               
                                <a href="/clientindex" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Cancel</span>
                                </a>
                                

                                </div>

                                
                        
    
                            </form>
                            
                            <hr>
                            
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