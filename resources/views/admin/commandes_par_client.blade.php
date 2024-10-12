{{-- <h2>Commandes de {{ $user->name }}</h2>

@foreach ($user->commandes as $commande)
    <h3>Commande ID: {{ $commande->id }}</h3>
    <p>Coût total: {{ $commande->cout_total }}</p>
    
    <h4>Produits:</h4>
    <ul>
        @foreach ($commande->produits as $produit)
            <li>{{ $produit->nom }} - Prix: {{ $produit->prix }}</li>
        @endforeach
    </ul>
@endforeach --}}




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Der Kaizer - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('front_end/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom styles for this template-->
    <link href="{{ asset('front_end/css/sb-admin-2.min.css') }}" rel="stylesheet">

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
                <a class="nav-link" href="{{ route('dashboard') }}">
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
                        <a class="collapse-item" href="{{ route('categories') }}">Catégories</a>
                        <a class="collapse-item" href="{{ route('produits') }}">Produits</a>
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
                        <a class="collapse-item" href="{{ route('clients') }}">Clients</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('liste_commandes_combines') }}">
                    <i class="fa-solid fa-user"></i>
                    <span>Commandes</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item bg-gradient-danger">
                <a class="nav-link  text-dark" href="{{ route('logout') }}">
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
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <i class="fa fa-user h3" aria-hidden="true"></i>

                            </a>

                        </li>

                    </ul>

                </nav>
                <div class="container-fluid pb-5">
<div class="text-center py-5"><h2>Commandes de {{ $user->name }}</h2></div>
                    <div class="accordion mt-3" id="accordionExample">

                        @foreach ($user->commandes as $commande)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button col" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{ $commande->id }}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span class="col-6 ">Commande du {{ $commande->created_at }}</span>
                                        <span class="col text-center">Coût total: {{ $commande->cout_total }}
                                            Fcfa</span>

                                        @if ($commande->statut == 'En attente')
                                            <span class="col text-danger text-end pe-5">{{ $commande->statut }}</span>
                                        @else
                                            <span
                                                class="col text-success text-end pe-5">{{ $commande->statut }}</span>
                                        @endif
                                    </button>
                                </h2>
                                {{-- //show removed down there --}}
                                <div id="collapseOne{{ $commande->id }}" class="accordion-collapse collapse "
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="pt-3">


                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        {{-- <th scope="col">#</th> --}}
                                                        <th scope="col">Produit</th>
                                                        <th scope="col">Prix unitaire</th>
                                                        <th scope="col">Quantité</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($commande->produits as $produit)
                                                        <tr>
                                                            {{-- <th scope="row">3</th>  --}}
                                                            <td class="col-6">
                                                                <span class="pe-5"><img
                                                                        src="{{ asset($produit->image) }}"
                                                                        alt="pop" height="70"
                                                                        width="100"></span>
                                                                <span class="">{{ $produit->nom }}</span>
                                                            </td>
                                                            <td>{{ $produit->prix }}</td>
                                                            <td>{{ $produit->pivot->quantite }}</td>


                                                            <td>{{ $produit->prix * $produit->pivot->quantite }}</td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Der Kaizer's Services 2024</span>
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Prêt à se déconnecter?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selectionnez "Se déconnecter" si vous souhaitez fermer la session en cours
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('front_end/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('front_end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('front_end/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('front_end/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('front_end/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('front_end/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('front_end/js/demo/chart-pie-demo.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

</body>

</html>
