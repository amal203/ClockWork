@extends('layout.topbar')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>clientshow</title>

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
    <h1 class="h3 mb-0 text-gray-800">{{ $client->name }}</h1>
</div> -->



        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Client</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $client->name }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
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
                <h6 class="m-0 font-weight-bold text-primary">Phone number</h6>
                </div>
              

                
                
                <div class="card-body">
                  
                    

                        {{ $client->num_phone }}  
                      
                                                   
                </div>

          
              
              

            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Adress</h6>
                </div>
                <div class="card-body">
                {{ $client->adress }}

                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Projects related to this client</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                    @foreach($cgetProject as $project)
                                    <table>
                                    <tr>
                                        <td>{{ $project->title }}</td> 
                                        <td>&ensp;</td>                                         
                                        <td> {{$project->description}}</td>
                                        <td>&ensp;</td>   
                                        <td>Deadline{{ $project->deadline_t }}</td>
                                    </tr>
                                    @endforeach
                                    </table>    

                    </div>
                    </div>
                    </div>

        </div>
    
        <div class="col-lg-6">
        <div class="card mb-4">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Mail</h6>
                </div>
                <div class="card-body">
                {{ $client->mail }}
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Created_at</h6>
                </div>
                <div class="card-body">
                {{ $client->created_at }}

                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Updated_at</h6>
                </div>
                <div class="card-body">
                {{ $client->updated_at }}

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
<!-- <div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $project->title }}</h5>
        <p class="card-text">Description : {{ $project->description }}</p>
        <p class="card-text">Client : {{ $project->client }}</p>
        <p class="card-text">Deadline : {{ $project->deadline }}</p>
        <p class="card-text">Created_at : {{ $project->created_at }}</p>
        <p class="card-text">Updated_at : {{ $project->updated_at }}</p>
       
  </div>
      
    </hr>
  
  </div>
</div -->

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="{{asset('endor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->




@endsection

