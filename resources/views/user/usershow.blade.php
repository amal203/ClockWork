@extends('layout.topbar')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>usershow</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @endsection

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
</div> -->



        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            User details</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->name }}</div>
                            @if(Cache::has('user-is-online-' . $user->id))
    <span class="badge badge-success">Online</span>
@else
    <span class="badge badge-danger">Offline</span>
@endif
</br>
{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                        </div>
                        <div class="col-auto">
                            <img src="{{ $user->avatar}}"width="70" height="80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Post</h6>
                </div>
              

                
                
                <div class="card-body">
                  
                    

                        {{ $user->post }}  
                      
                                                   
                </div>

          
              
              

            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Adress</h6>
                </div>
                <div class="card-body">
                {{ $user->adress }}

                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                                    <table>
                                    <tr>
                                        <td>{{ $user->email }}</td> 
                                        <td>&ensp;</td>                                         
                                        <td> {{$user->phone_number }}</td>
                                        <td>&ensp;</td>   
                                        <td></td>
                                    </tr>
                                    </table>    

                    </div>
                    </div>
                    </div>

        </div>
    
        <div class="col-lg-6">
        <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Birthdate</h6>
                </div>
                <div class="card-body">
                {{ $user->birthdate }}
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Gender</h6>
                </div>
                <div class="card-body">
                {{ $user->gender }}
                </div>
            </div>


            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Created_at</h6>
                </div>
                <div class="card-body">
                {{ $user->created_at }}

                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Updated_at</h6>
                </div>
                <div class="card-body">
                {{ $user->updated_at }}

                </div>
            </div>
         </div>
          


        <div class="col-lg-6">

            <!-- Collapsable Card Example -->
            
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2020</span>
    </div>
</div>
</footer> -->


    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="{{asset('endor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->




@endsection

