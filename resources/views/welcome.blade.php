@extends ('layout')

@section ('content')

<!-- Header -->
<header id="header">
				<div class="logo"><a href="#">Covoit <span>GRETA Vannes</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{ route('creation-trajet') }}">Nouveau Trajet</a></li>
					<li><a href="{{ route('demande-trajet') }}">Demandez Trajet</a></li>
					<li><a href="{{ route('contact') }}">Contact</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="banner.jpg">
				<div class="inner">
					<header>
						<h1>Rendez-vous service !!!</h1>
					</header>
				</div>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Proposez votre trajet !!!</h2>
							
						</header>
						<div class="content">
							<p>Depuis tous le bassin Vannetais ainsi que dans les différents recoins du Morbihan, proposez des courses au départ de votre ville (Lorient, Auray, Muzillac, Elven, Séné, Plescop .....) .</p>
						</div>
						
					</article>
				</div>
				
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="covoitcar.png">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Demandez votre trajet !!!</h2>
							
						</header>
						<div class="content">
							<p>Recherchez depuis votre ville de départ, un trajet allant vers le Greta de Vannes.</p>
						</div>
						
					</article>
				</div>
				
			</section>

		
		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contactez Nous</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Nom</label>
							<input name="name" id="name" type="text" placeholder="Nom">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Envoyez" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
					<p>&copy; Greta Kercode 2020 tous droits réservés</p>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            
            @endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Covoit GRETA de Vannes !!!
                </div>
                <div class="links">
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('creation-trajet') }}">Nouveau Trajet</a>
                    <a href="{{ route('demande-trajet') }}">Demande Trajet</a>
                </div>
            </div>
        </div>
    </body>
</html>
