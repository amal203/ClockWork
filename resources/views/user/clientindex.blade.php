@extends('layout.top')
@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Phone number" content="">
    <meta name="author" content="">

    <name>clientindex</name>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @endsection
    @section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Clients</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <a href="/clientadd" class="btn add btn-success">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add new client</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Iteration</th>
                                            <th>Name</th>
                                            <th>Phone number</th>
                                            <th>Mail</th>
                                            <th>Adress</th>

                                        <!--<th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Tasks</th>-->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Iteration</th>
                                            <th>Name</th>
                                            <th>Phone number</th>
                                            <th>Mail</th>
                                            <th>Adress</th>
                                       <!-- <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Tasks</th>-->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    @foreach($Clients as $client)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->num_phone }}</td>
                                        <td>{{ $client->mail }}</td>
                                        <td>{{ $client->adress }}</td>
                                        
                                        
                                        
                                   <!-- <td>{{ $client->created_at }}</td>
                                        <td>{{ $client->updated_at }}</td>
                                        <td>#</td>-->
                                        <td>
                                            <span>
                                               <!-- <a href="{{ url('clientshow' . $client->id) }}" class="btn btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                    <span class="text">View</span>
                                                </a>-->

                                                
                                            <!--<a href="{{ url('clientupdate' . $client->id . '/edit') }}" class="btn btn-warning btn-icon-split">
                                                <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                             </a>-->

                                            
                                              


                                            <form action="/uclientindex/{{ $client->id }}" method="post">
                                            <!-- <a href="#" class="btn btn-info btn-circle">
                                                    <i class="fa fa-eye"></i>
                                                </a>    -->
                                                <a href="/uclientindex/{{ $client->id }}/show" class="btn btn-info btn-circle">
                                                    <i class="fa fa-eye"></i>
                                                </a>   

                                                
                                             </form>


                                        
                                            
                                            
                                               <!-- <button type="submit" href="#">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Delete</span>
                                                    </button>-->
                                                        
                                                    
                                               
                                            
                                        </span>
                                        </td>
                                        <td>
                                        <a  href="/uclientindex/{{ $client->id }}/projectindex" class="btn btn-info btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-flag"></i>
                                                </span>
                                                <span class="text">Projects</span>
                                                
                                              </a>      
                                        </td>        
                                           
                                    
                                    </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> -->

    <!-- Page level plugins -->
    <!-- <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->

    @endsection

