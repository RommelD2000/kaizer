<html>
	<head>
		<link rel="stylesheet" href="{{asset('front_end/style/auth.css')}}">
	</head>
	<body>
		 <div class="container">

        <div class="img">
            <img src="{{asset('front_end/images/register.jpg')}}" alt="BG">
        </div>

        <div class="login-content">

		<form action="login" method="POST">
            @csrf
                <div class="title-container">
                    <h1>Login</h1>
                    <h2>Hello, Friends!</h2>
                    <p>Entrer vos informations personnelles et finalisez votre commande.</p>
                </div>


                <div class="login-inner-content">


                    <div class="input-div one">
                        <div class="i">
                            <i class="far fa-user-circle"></i>
                        </div>

                        <div class="div">
                           
                            <input type="text" class="input @error('email') is-invalid @enderror" name="email" placeholder="Email">
                        </div>
                    </div>
                    @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-eye" onclick="show()"></i>
                        </div>
                        <div class="div">
                            <input id="pswrd" type="password" name="password" class="input @error('password') is-invalid @enderror" placeholder="Password">
                        </div>
                    </div>

                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                  <!--  <a href="#">Forgot password / Username</a> -->

                </div>
                <input type="submit" class="btn" value="Login">
                <h5>Pas encore membre ? <a href="{{route('register')}}">Créer un compte</a></h5>
            </form>
        </div>
    </div>




<script>
	src="{{asset('front_end/script/music-list.js')}}"
</script>
	</body>
<html>