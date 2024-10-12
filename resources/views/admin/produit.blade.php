

                
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Der Kaizer - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('front_end/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom styles for this template-->
    <link href="{{asset('front_end/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{--------------------------}}
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('front_end/css/sb-admin-2.min.css') }}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ asset('front_end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{------------------------}}

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Der Kaizer <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Marchandises</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Marchandises:</h6>
                        <a class="collapse-item" href="{{route('categories')}}">Catégories</a>
                        <a class="collapse-item" href="{{route('produits')}}">Produits</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilisateurs</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilisateurs:</h6>
                        <a class="collapse-item" href="{{route('clients')}}">Clients</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('liste_commandes_combines')}}" >
                    <i class="fa-solid fa-user"></i>
                    <span>Commandes</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item bg-gradient-danger">
                <a class="nav-link  text-dark" href="{{route('logout')}}" >
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Se déconnecter</span>
                </a>
                
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

             
                        

                  
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" >
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <i class="fa fa-user h3" aria-hidden="true"></i>

                            </a>
                          
                        </li>

                    </ul>

                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#createModal">Ajouter un produit</button>
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Créer une produit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{route('produit.add')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Intitulé</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Intitulé..." name="nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Description..." name="description">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-4">
                                                <label for="exampleInputPassword1">Prix</label>
                                                <input type="number" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Prix..." name="prix">
                                            </div>
                                            <div class="form-group col">
                                                <label for="exampleFormControlFile1">Ajouter une photo</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1" name="imagecat">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Marque</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Marque..." name="marque">
                                        </div>
                                        <div class="form-group ">
                                            <label for="inputState">Catégorie</label>
                                            <select id="inputState" class="form-control" name="categorie">
                                              <option selected>Choose...</option>
                                              @foreach ($categories as $categorie)
                                                <option value={{$categorie->id}}>{{$categorie->nom}}</option>
                                              @endforeach
                                              
                                            </select>
                                          </div>
                                        
                                        
                                        
                                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Enregitrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Produits</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Prix (Fcfa)</th>
                                            <th>Marque</th>
                                            <th>Catégorie</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Prix (Fcfa)</th>
                                            <th>Marque</th>
                                            <th>Catégorie</th>
                                            <th>Image</th>
                                            <th>Actions</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($produits as $produit)
                                            <tr>
                                                <td>{{$produit->nom}}</td>
                                                <td>{{$produit->description}}</td>
                                                <td>{{$produit->prix}}</td>
                                                <td>{{$produit->marque}}</td>
                                                <td>{{$produit->categorie->nom}}</td>
                                                <td><img src="{{asset($produit->image)}}" alt="" srcset="" height="100" width="80" data-toggle="modal" data-target="#imageModal{{$produit->id}}"></td>
                                                
                                                <div class="modal fade" id="imageModal{{$produit->id}}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{asset($produit->image)}}" alt="" srcset="">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <td class="d-flex gap-2">
                                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#modifierModal{{$produit->id}}">Modifier</a>
                                                    
                                                    <div class="modal fade" id="modifierModal{{$produit->id}}" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier un produit</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form method="POST" action="{{route('produit.edit', ['id' => $produit->id])}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Intitulé</label>
                                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                                                aria-describedby="emailHelp" placeholder="catégorie..." name="nom" value="{{$produit->nom}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Description</label>
                                                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                                                placeholder="Description..." name="description" value="{{$produit->description}}">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="form-group col-4">
                                                                                <label for="exampleInputPassword1">Prix</label>
                                                                                <input type="number" class="form-control" id="exampleInputPassword1"
                                                                                    placeholder="Prix..." name="prix" value="{{$produit->prix}}">
                                                                            </div>
                                                                            <div class="form-group col">
                                                                                <label for="exampleFormControlFile1">Ajouter une photo</label>
                                                                                <input type="file" class="form-control-file"
                                                                                    id="exampleFormControlFile1" name="imagecat" value="{{$produit->image}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Marque</label>
                                                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                                                placeholder="Marque..." name="marque" value="{{$produit->marque}}">
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="inputState">Catégorie</label>
                                                                            <select id="inputState" class="form-control" name="categorie">
                                                                              <option selected>Choose...</option>
                                                                              @foreach ($categories as $categorie)
                                                                                <option value={{$categorie->id}}>{{$categorie->nom}}</option>
                                                                              @endforeach
                                                                              
                                                                            </select>
                                                                          </div>
                                                                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                
                                                                    </div>
                                                                    <div class="modal-footer ">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Annuler</button>
                                                                        <button type="submit" class="btn btn-primary">Enregitrer</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <a href="{{route('produit.delete', ['id' => $produit->id])}}" class="btn btn-danger">Supprimer</a>
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
         


  

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Der Kaizer's Services  2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            
            </div>
            <!-- End of Content Wrapper -->
            
            </div>
            <!-- End of Page Wrapper -->
            
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
            </a>
            
            
            
            <!-- Bootstrap core JavaScript-->
            <script src="{{asset('front_end/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('front_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            
            <!-- Core plugin JavaScript-->
            <script src="{{asset('front_end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
            
            <!-- Custom scripts for all pages-->
            <script src="{{asset('front_end/js/sb-admin-2.min.js')}}"></script>
            
            <!-- Page level plugins -->
            <script src="{{asset('front_end/vendor/chart.js/Chart.min.js')}}"></script>
            
            <!-- Page level custom scripts -->
            <script src="{{asset('front_end/js/demo/chart-area-demo.js')}}"></script>
            <script src="{{asset('front_end/js/demo/chart-pie-demo.js')}}"></script>
            <script src="{{ asset('front_end/vendor/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('front_end/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
            
            <script src="{{ asset('front_end/js/demo/datatables-demo.js') }}"></script>
            
            
            </body>
            
            </html>