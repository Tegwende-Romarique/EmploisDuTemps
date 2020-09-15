
@extends('layouts.include')
@extends('layouts.liste')
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body  id="imageaccueil">

  	<div class="mySearchbar" style="display:none" id="mySearchbar">
		<div class="container">
			<form action="/action_page.php">
			  <input type="text" placeholder="Search.." name="search" class="form-control custome-input">
			  <button type="submit" class="btn btn-filter"><i class="fa fa-search"></i></button>
			</form>
			 <button onclick="w3_close()" class="myclosebtn"><i class="fa fa-times"></i></button>
		</div>
	</div>
   <nav class="navbar navbar-expand-md secound-head top-nav">
	<div class="container">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
		    </ul>
		  <a class="navbar-brand" href="#"><strong>UFR/SDS</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>
			<ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fa fa-heart-o"></i></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#" onclick="w3_open()"><i class="fa fa-search"></i></a>
		      </li>
			  <li class="nav-item ">
		        <a class="nav-link" href="login.html">Connexion</a>
		      </li>
		    </ul>
		  </div>	
	</div>
</nav>
<div class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 m-auto col-sm-8 col-12">
				<div class="log-box couleur">
					<div class="row">
						<div class="col-xl-5 col-sm-5 col-12 pad-right-0">
							<div class="logo-back">
							</div>
						</div>
						<div class="col-xl-7 col-sm-7 col-12 pad-left-0">
							<div class="log-content">
                                <h1>LOGIN </h1>
								<div class="log-body">

                                <form method="POST" action="{{ route('login') }}">
                        @csrf                       
								<div class="form-group myr-top">
								<label for="email" class="">{{ __('Adresse email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Entrer votre Adresse email">
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
								<div class="form-group myr-top">
								<label for="password" class="col-md-4 col-form-label">{{ __('Mot de passe') }}</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="entrer votre mot de passe">
                               
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group myr-top">
								    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">{{ __('Se souvenir de moi') }}</label>
                                    </div>
                                </div>
                                <div class="form-group myr-top">
                                <div class="log-btn text-center">
                                <button type="submit" class="btn-btn boutton">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

				    </div>
                </div>
			 </div>
		 </div>
	  </div>
   </div>
  </div>
</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>Company</h6>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>OUR SERVICES</h6>
					<!--  -->
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>OUR FEATURES</h6>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="footer-section">
					<h6>NEWSLETTER</h6>
			</div>
		</div>
	</div>
	<div class="copy-write">
		<p>Copy right @ ExpressTech Software Solution all right reserve</p>
	</div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/wow.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script>
		// Sticky Header
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".top-nav").addClass("light-header");
		} else {
			$(".top-nav").removeClass("light-header");
		}
	});

	// Year for copy content
	$(function(){
	var theYear = new Date().getFullYear();
	$('#year').html(theYear);
	});
	</script>
	<script>
		function w3_open() {
			document.getElementById("mySearchbar").style.width = "100%";
			document.getElementById("mySearchbar").style.height = "50px";
			document.getElementById("mySearchbar").style.display = "block";
		}
		function w3_close() {
			document.getElementById("mySearchbar").style.display = "none";
		}
	</script>