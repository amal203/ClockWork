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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>projectadd</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Create a Project!</h1>
                            </div>
                            <form  method="POST" action="/projectindex" >
                                @csrf
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="title" name="title"
                                            placeholder="Title">
                                    </div>

                                 
                                <div class="form-group">
                                <select name="client_id" id="client_id" class="form-control">
                                <option value="" >Choose a client!</option>    
                                 @foreach($Clients as $client)
                                 <option value="{{ $client->id }}">{{ $client->name }}</option> 
                                 @endforeach  
                                 </select>
                                </div> 
                       
                                
                                    <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="client"  name="client"
                                            placeholder="Client">
                                        
                                    </div> -->

                                <br>
                                <div class="form-group">
                                <textarea class="form-control form-control-user" rows="3" id="description"  name="description"
                                  placeholder="Description"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="deadline">Deadline</label>
                                        <input type="Date" class="form-control form-control-user"
                                            id="deadline" name="deadline" placeholder="Deadline">
                                </div>
                                    
                                    
                               
                                
                                     
                                    <!-- <a  href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Don't forget to update your project to add tasks into it</span>
                                        
                                      </a> -->
                                      <!-- <hr> -->
                            
                                <div>    
                                <button class="btn btn-success btn-icon-split" >
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Submit</span>
                                
                                </button>
                               
                                <a href="/projectindex" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Cancel</span>
                                </a>
                        
                                </div>  
                        
    
                            </form>
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                            
                            
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
    <!-- <script src="{{asset('endor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->



@endsection

