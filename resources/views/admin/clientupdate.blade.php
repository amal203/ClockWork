@extends('layout.topbar')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="adress" content="">
    <meta name="author" content="">

    <name>clientupdate</name>

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
                                <h1 class="h4 text-gray-900 mb-4">Update client!</h1>
                            </div>
                            <form class="user" action="/clientindex/{{ $client->id }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <label for="name">Name:</label>
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                             value="{{ $client->name }}">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="num_phone">Client:</label>
                                        <input type="tel" class="form-control form-control-user" id="num_phone" name="num_phone"
                                             value="{{ $client->num_phone }}">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="adress">Adress:</label>
                                 <input type="text" class="form-control form-control-user" id="adress" name="adress"
                                  value="{{ $client->adress }}">
                                 
                                </div>
                                <div class="form-group row">
                                <label for="email">Mail Adress:</label>
                                 <input type="text" class="form-control form-control-user" id="mail" name="mail"
                                  value="{{ $client->mail }}">
                                </div>
                             
                                      <a  href="/clientindex/{{ $client->id }}/projectindex" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Projects</span>
                                        
                                      </a>
                                      <hr>
                               
                                


                           
                                <div>    
                                <button class="btn btn-success btn-icon-split" onclick="return confirm('are you sure?')">
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

