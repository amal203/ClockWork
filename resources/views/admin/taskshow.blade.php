@extends('layout.topbar')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>projectshow</title>

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
    <h1 class="h3 mb-0 text-gray-800">{{ $task->title }}</h1>
</div> -->

<div class="row">
        <!-- Earnings (Monthly) Card Example -->
        

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Task details
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Pending Requests Card Example -->
        

    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Number</h6>
                </div>
                <div class="card-body">
                {{ $task->number }}
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                </div>
                <div class="card-body">
                {{ $task->description_t }}

                </div>
            </div>


             <!-- Collapsable Card Example -->
             <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Project</h6>
                </div>
                <div class="card-body">
                                    @foreach($getproject as $project)
                                    <table>
                                    <tr>
                                        <td>{{$project->title}}:</td>
                                        <td>&ensp;</td>                                            
                                        <td>Client: {{$project->client}}</td>
                                        <td>&ensp;</td>   
                                        <td>Deadline{{$project->deadline}}</td>
                                    </tr>
                                    @endforeach

                                    </table>    

                    
                </div>
            </div>

        </div>

        <div class="col-lg-6">
        <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Deadline</h6>
                </div>
                <div class="card-body">
                {{ $task->deadline_t }}
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Created_at</h6>
                </div>
                <div class="card-body">
                {{ $task->created_at }}

                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Updated_at</h6>
                </div>
                <div class="card-body">
                {{ $task->updated_at }}

                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employee</h6>
                </div>
                <div class="card-body">
                  
                    
                    @foreach($getUser as $user) 

                        {{ $user->name }}  
                      
                                                   
                    @endforeach                  
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

