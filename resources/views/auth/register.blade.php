<html>
	<head>
		<link rel="stylesheet" href="{{asset('front_end/style/auth.css')}}">
	</head>
	<body>
		 <div class="container">

        

        <div class="login-content">

            <form action="register" method="POST">
                    @csrf
                <div class="title-container">
                    <h1>Register</h1>
                    <h2>Hello, Friends!</h2>
                    <p>Créez votre compte pour pouvoir passer vos commande.</p>
                </div>


                <div class="login-inner-content">


                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <input type="text" name="name" class="input @error('name') is-invalid @enderror" placeholder="Nom">
                        </div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
		    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="div">
                            <input type="email" name="email" class="input @error('email') is-invalid @enderror"  placeholder="Adresse mail">
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <input id="pswrd" type="password" name="password" class="input @error('password') is-invalid @enderror" placeholder="Mot de passe">
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
		    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <input id="pswrd" type="password" name="password_confirmation" class="input @error('password_confirmation') is-invalid @enderror"  placeholder="Confirmation du mot de passe">
                        </div>
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
		

                  <!--  <a href="#">Forgot password / Username</a> -->

                </div>

                <input type="submit" class="btn" value="Register">

                <h5>Déjà membre ? <a href="{{route('login')}}">Se connecter à mon compte</a></h5>

            </form>
            
        </div>
<div class="img">
            <img src="{{asset('front_end/images/login.jpg')}}" alt="BG">
        </div>
    </div>




<script>
	src="{{asset('front_end/script/music-list.js')}}"
</script>
	</body>
<html>