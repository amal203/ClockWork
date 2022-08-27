@extends('layout.topbar')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>taskupdate</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Update task!</h1>
                            </div>
                            <form class="user" action="/projectindex/{{$project_id}}/ptaskindex/{{ $task->id }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="number" name="number"
                                        value="{{ $task->number }}">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                <label for="description">Description:</label>
                                 <textarea class="form-control form-control-user" id="description_t" name="description_t"
                                 >{{ $task->description_t }}</textarea>
                                 
                                </div>
                               
                                
                                <div class="form-group">

                                      <select name="user_id" id="user_id" class="form-control">
                                      @foreach($getUser as $c)
                                      <option value="{{$c->id}}">Employee: {{$c->name}}</option>
                                      @endforeach 
                                      <option value="">No One</option>    
                                       @foreach($Users as $user)
                                       <option value="{{ $user->id }}">{{ $user->name }}</option> 
                                       @endforeach  
                                       </select>
                                       </div>
                                        
                                
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="deadline_t">Deadline:</label>
                                        <input type="date" class="form-control form-control-user"
                                            id="deadline_t"  name="deadline_t" value="{{ $task->deadline_t }}">
                                    </div>
                                </div>
                                <button class="btn btn-success btn-icon-split" onclick="return confirm('are you sure?')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Submit</span>
                                </button>
                                <hr>
                                <a href="/projectindex/{{$project_id}}/ptaskindex" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Cancel</span>
                                </a>
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
    <!-- <script src="{{asset('endor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->



@endsection

