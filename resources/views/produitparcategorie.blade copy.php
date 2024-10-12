<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil | Der KAIZER'S SERVICES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        </h5>
                    </div>
                
          </div>
          <div class="mx-3 row mt-5">
            <div class="col-3 d-none d-md-block bg-success ">
              <h3 class="text-white">CATEGORIES</h3>
              {{-- <div style=" width: 100%; height: 5px; background-color: rgb(3, 186, 3);"></div> --}}
            </div>
            <div class="col-lg-6 col-md-12 px-4">
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Chercher un produits par son nom..." aria-label="Username" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                  </div>
            </div>
            <div class="col-lg-3 col-md-12"><h6 class=" bg-success text-white pt-2 pb-2 rounded ps-2">Ma carte: 0 items(s) - 0FCFA</h6></div>
        </div>
        </div>

   
   <div style="background-color: rgb(246, 246, 244)" class="row px-5 ">
    <div class="col-lg-3  col-sm-12  ms-3" >
        <ul class="list-group" style="width: 103% !important">
          @foreach($categories as $categorie)
            <li class="list-group-item">{{ $categorie->nom }}</li>
          @endforeach
          </ul>

          {{-- <div class="pt-5 ">
            <h3 class="bg-dark text-white ps-3" style="width: 103% !important">PRODUCT TYPE</h3>
            <div class="">
                <div class="row">
                    <button class="col mx-2 my-1">Home technics</button>
                    <button class="col mx-2 my-1">Irons</button>
                </div>
                <div class="row">
                    <button class="col mx-2 my-1">Kettles</button>
                    <button class="col mx-2 my-1">Kitchen supplies</button>
                </div>
                <div class="row">
                    <button class="col-6 mx-2 my-1">Vacuum cleaners</button>
                </div>
            </div>
          </div> --}}

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
    </div>
    <div class="col ms-2 me-4 pt-4">
    </div>
    <footer class="pt-3 px-5" style="background-color: rgb(199, 198, 196);  position: fixed, left: 0; bottom: 0; width: 100%">
     <div class="row">
       <div class="col">
         <h3 class="ps-4">Information</h3>
         <ul style="list-style-type: none">
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active"> <strong>Accueil</strong></a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Chercher</a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Blog</a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  A propos de nous</a></li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Documentation</a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Contactez nous</a> </li>
         </ul>
         
       </div>
       <div class="col">
         <h3 class="ps-4">Catégories</h3>
         <ul style="list-style-type: none">
           @foreach($categories as $categorie)
             {{-- <li class="list-group-item">{{ $categorie->nom }}</li> --}}
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active"> {{ $categorie->nom }}</a> </li>
           @endforeach
         </ul>
       </div>
       <div class="col">
         <h3 class="ps-4">My account</h3>
         <ul style="list-style-type: none">
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active"> Mon compte</a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Mon adresse</a> </li>
           <li> <i class="text-success fa-solid fa-caret-right" style="font-size: 18px;"></i><a href="" style="text-decoration: none; font-size: 18px;" class="text-secondary active">  Ma carte</a> </li>
         </ul>
       </div>
       <div class="col">
         <h3 class="ps-4">Contacts</h3>
         <p class="pt-2 text-secondary">Company Kaizer, 2024, Obili, Yaoundé, Cameroun</p>
         <h3 class="pt-2 ">Appellez nous maintenant :</h3>
         <p class="text-success h3">+237 682 560 268</p>
       </div>
       <div class="col">
         <h3 class="justify-content-start">Newsletter</h3>
         <div class="input-group flex-nowrap">
           <input type="text" class="form-control" placeholder="ton@email.com" aria-label="" aria-describedby="addon-wrapping">
           <span class="input-group-text text-white bg-dark " id="addon-wrapping" style="font-size: 20px">></span>
         </div>
         <p class="pt-3">Suivez nous sur   <i class="fab fa-twitter icon pe-2 h3 text-secondary"></i>  <i class="fab fa-facebook h3 pe-2 text-secondary" ></i>  <i class="fab fa-whatsapp h3 text-secondary"></i></p>
       </div>
     </div>
    </footer>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </body>
 </html>