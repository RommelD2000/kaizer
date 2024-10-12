


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil | Der KAIZER'S SERVICES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="{{asset('jquery-3.7.1.min.js')}}"></script>
</head>
<body class="">
    <div class="px-5 ">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Catalogue</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">A propos de nous</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Documentation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Nous contacter</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        <hr class="mx-4">
            <div class="row mx-2">  
                <div class="col-lg-7 col-sm-12 ">
                    <h1 style="font-size:50px ">Der KAIZER'S SERVICES</h1>
                    <P class="m-1">VENTE DES OBJECTS PEUPLANTS NOTRE QUOTIDIEN</P>
                </div> 
                <div class="col-lg-5 col-sm-12 ">
                    <h5 class=" pt-5 d-flex justify-content-end text-success">Bienvenue dans notre outique en ligne!</h6>
                        <h5 class="d-flex justify-content-end">
                            <a href="login" class="navlink text-dark text-decoration-none">   <i class="text-success fa-solid fa-caret-right"></i>  Se connecter &nbsp&nbsp&nbsp</a>
                            <a href="register" class="navlink text-dark text-decoration-none">   <i class="text-success fa-solid fa-caret-right"></i>  Créer un compte &nbsp&nbsp&nbsp</a>
                            {{-- <a href="" class="navlink text-dark text-decoration-none">   <i class="text-success fa-solid fa-caret-right"></i>  Check out</a> --}}
                     {{--   </h5>
                    </div>
                
          </div>
          <div class="mx-3 row mt-5">
            <div class="col-3 d-none d-md-block bg-success ">
              <h3 class="text-white">CATEGORIES</h3>
              {{-- <div style=" width: 100%; height: 5px; background-color: rgb(3, 186, 3);"></div> --}}
           {{--}} </div>
            <div class="col-lg-6 col-md-12 px-4">
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Chercher un produits par son nom..." aria-label="Username" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                  </div>
            </div>
            <div class="col-lg-3 col-md-12"><a href="{{route('shopping.cart')}}" style="text-decoration: none"><h6 class=" bg-success text-white pt-2 pb-2 rounded ps-2">Mon panier: {{count((array) session('cart'))}} items(s) - 0FCFA</h6></a></div>
        </div>
        </div>

   
   <div style="background-color: rgb(246, 246, 244)" class="row px-5 ">
    <div class="col-lg-3  col-sm-12  ms-3" >
        <ul class="list-group" style="width: 103% !important">
          @foreach($categories as $categorie)
            <li class="list-group-item">{{ $categorie->nom }}</li>
          @endforeach
          </ul>

          <div class="pt-5 ">
            <h3 class="bg-dark text-white ps-3" style="width: 103% !important">MEILLEURES VENTES</h3>
            <div class="ms-2">
                <div class="row mb-3">
                    <div class="col-5 border" >
                        <img src="{{asset('front_end/images/IMG1.webp')}}" alt="" >
                    </div>
                    <div class="col ms-1">
                        <h1 class=" text-success" style="font-size: 18px">Canon VIXIA HF10 Flash Memory High Definition C...</h1>
                        <h5>$78.00</h5>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-5 border" >
                        <img src="{{asset('front_end/images/IMG2.webp')}}" alt="" >
                    </div>
                    <div class="col ms-1">
                        <h1 class=" text-success" style="font-size: 18px">Cuisinart CMW-200 1-1-5-Cubic-Foot Convection M...</h1>
                        <h5>$420.00</h5>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-5 border" >
                        <img src="{{asset('front_end/images/IMG3.htm')}}" alt="" >
                    </div>
                    <div class="col ms-1">
                        <h1 class=" text-success" style="font-size: 18px">Cuisinart CMW-200 1-1-5-Cubic-Foot Convection M...</h1>
                        <h5>$170.00</h5>
                    </div>
                </div>
            </div>
          </div>
    </div> --}}

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Der Kaizer - Accueil</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('front_end/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('front_end/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('front_end/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="{{asset('jquery-3.7.1.min.js')}}"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Der Kaizer <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
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
                <a class="nav-link " href="{{route('shopping.cart')}}" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ma carte</span>
                </a>
               
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="{{route('liste_commandes', ['userId' => Auth::user()->id])}}" >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mes commandes</span>
                </a>
                
            </li>

           
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item bg-gradient-danger">
                <a class="nav-link  text-dark" href="{{route('logout')}}}" >
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Se déconnecter</span>
                </a>
                
            </li>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline pt-5">
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link ">
                                <span class="pt-1 ">Bienvenu dans ton espace, {{Auth::user()->name}}! &nbsp&nbsp&nbsp</span>
                                <i class="fa fa-user h3" aria-hidden="true"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                           
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
    <div class="col ms-2 me-4 pt-4">
      @if (session('success'))
      <div id="alert" class="alert alert-success">
        {{session('success')}}
      </div>
  @endif 
      <div style="background-color: rgb(206, 204, 204)">
        <div class="border ps-3 bg-dark rounded text-white h5 py-2">Accueil / Mon panier</div>
        <div class=" ps-3 py-2 h4" >Mon panier</div>
        <div style=" width: 100%; height: 5px; background-color: rgb(167, 167, 165);"></div>
      </div>

      <form action="{{route('passer_commande')}}" method="POST">
        @csrf
        <div class="pt-3">
          <table class="table table-bordered bg-white" id="cart">
            <thead>
              <tr>
                <th>Produit</th>
                <th>Prix(Fcfa)</th>
                <th>Quantité</th>
                <th class="col-1">Total</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                  <th>Total à payer</th>
                  <td colspan="4" class="text-center"><span id="grandTotal">0</span> Fcfa</td>
                  <input type="hidden" name="total_a_payer" value="<span id='grandTotal'></span>">
              </tr>
            </tfoot>
            <tbody id="productTable">
              @if(session('cart'))
                  @foreach (session('cart') as $id => $détails)
                  {{-- @dd($id) --}}
                      <tr rowId="{{$id}}">
                        <td data-th="Produit">
                          <div class="row">
                            <div class="col-sm-3 hidden-xs">
                               <img src="{{$détails['image']}}" alt="" srcset="" height="80" width="70" data-bs-toggle="modal" data-bs-target="#imageModal{{$id}}"> 
  
                               <div class="modal fade" id="imageModal{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
  
                                    <div class="modal-body">
                                        <img src="{{$détails['image']}}" alt="" srcset="" height="100%" width="100%">
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
  
                            </div>
                            <div class="col-sm-9">
                              <h4 class="nomargin">{{ $détails['name']}}</h4>
                              {{-- @php
                                  $contaer = 0;
                                  // $contaer++;
                              @endphp --}}
                              <input type="hidden" name="nom_produits[{{$id}}][nom_produit]" value="{{ $détails['name']}}">
                            </div>
                          </div>
                        </td>
                        <td data-th="Price" id="montant{{$id}}" class="amount">{{ $détails['price']}}</td>
                        <td data-th="quantite" class="text-center col-1 "><input type="number" name="nom_produits[{{$id}}][quantite]" class="form-control quantity" id="nombreInput{{$id}}" value="1"></td>
                        <td data-th="Subtotal" class="text-center payemontant total" id="resultat{{$id}}">0</td>
                        <td class="actions mx-auto">
                          <a href="" class="btn btn-outline-danger btn-sm delete-product ">
                            <i class="fa-solid fa-trash"></i> 
                          </a>
                        </td>
                      </tr>
  
  
  
                      
                      
                  @endforeach
              @endsession
            </tbody>
          </table>
          <div class="d-flex justify-content-end">
            {{-- <button type="submit" class="btn btn-success">Commander</button> --}}
            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalCommande">Commander</a>
            <div class="modal fade" id="ModalCommande" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Pour commander, entrez :</p>
                        <label for="" class="pt-2">Votre nom</label>
                        <input type="text" name="nom_client" placeholder="Votre Nom" required class="form-control @error('nom_client') is-invalid @enderror">
                        @error('nom_client')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label for="" class="pt-3">Votre numero de téléphone</label>
                        <input type="tel" name="telephone_client" placeholder="Votre Numéro de Téléphone" required class="form-control @error('telephone_client') is-invalid @enderror">
                        @error('telephone_client')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-center pt-4">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                    <div class="modal-footer pt-5">
                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
      </form>
    </div>
                </div>
   
   </div>
   <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Der Kaizer's Services 2024</span>
        </div>
    </div>
</footer>

   {{-- scrippt temps popup --}}
   <script>
    document.addEventListener('DOMContentLoaded',
      function(){
        const alert = document.getElementById('alert');
        if(alert){
          setTimeout(()=>{
            alert.style.display = 'none';
          }, 3000);
        }
      }
    );
   </script>

   {{-- script supprimer --}}
   <script type="text/javascript">
      $(".delete-product").click(function (e){
        e.preventDefault();
        var ele = $(this);
         if(confirm("Do you really want to delete?")){
          $.ajax({
            url: '{{route('delete.cart.produit')}}',
            method: "DELETE",
            data: {
              _token: '{{ csrf_token() }}',
              id: ele.parents("tr").attr("rowId")
            },
            success: function (response){
              window.location.reload();
            }
          });
         }
      });
   </script>

{{-- update les totaux --}}
<script>
  const quantityInputs = document.querySelectorAll('.quantity');

  quantityInputs.forEach(input => {
      input.addEventListener('input', updateTotals);
  });

  function updateTotals() {
      let grandTotal = 0;

      document.querySelectorAll('#productTable tr').forEach(row => {
          const amount = parseFloat(row.querySelector('.amount').textContent);
          const quantity = parseInt(row.querySelector('.quantity').value);
          const totalCell = row.querySelector('.total');

          const total = amount * quantity;
          totalCell.textContent = total.toFixed(2);
          grandTotal += total;
      });

      document.getElementById('grandTotal').textContent = grandTotal.toFixed(2);
  }
</script>
   
   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

{{-- ------------------------------------------------ --}}
 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('front_end/vendor/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('front_end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('front_end/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{ asset('front_end/js/sb-admin-2.min.js') }}"></script>

 <!-- Page level plugins -->
 <script src="{{ asset('front_end/vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('front_end/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

 <!-- Page level custom scripts -->
 <script src="{{ asset('front_end/js/demo/datatables-demo.js') }}"></script>
    </body>
</html>