<!doctype html>
<html lang="es" style="height: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daniel Web Developer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/4e957e572c.js"></script>
    <script src="https://kit.fontawesome.com/48aa4aa0c4.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+ES+Deco:wght@100..400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=ABeeZee&family=Comfortaa&family=Dongle&family=Montserrat:wght@500;600&family=Rubik:wght@300&display=swap');
    .text-border{
    text-shadow: 2px 0 #172c3d, -2px 0 #172c3d, 0 2px #172c3d, 0 -2px #172c3d,
    1px 1px #172c3d, -1px -1px #172c3d, 1px -1px #172c3d, -1px 1px #172c3d;
    }

.font-roboto{
    font-family: 'ABeeZee', sans-serif;
}

.font-Playwrite> {
  font-family: "Playwrite ES Deco", cursive;
  font-optical-sizing: auto;
  font-weight:10px;
  font-style: normal;
}

.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #011629;
  border-radius: 0.5rem;
  border:solid 2px #011629;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 0.5rem;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.custom-img {
    background-image: url("{{ asset('images/back_new.jpeg') }}");"
    width: 100% !important;
    height: 100% !important;
}

    .typewriter{
        color: #fff;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .12em; /* Adjust as needed */
  animation:
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
}

.typewriter_des{
        color: #fff;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .12em; /* Adjust as needed */
  animation:
    typing 3.5s steps(20, end),
    blink-caret 5s infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}

@keyframes float {
	0% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
	50% {
		box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
		transform: translatey(-20px);
	}
	100% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
}

  .floating {
    animation: float 6s ease-in-out infinite;
    box-sizing: border-box;
  }

  @keyframes giro {
  0% {transform: rotate(12deg);}
  50% {transform: rotate(0deg);}
  100% {transform: rotate(12deg);}
}

.girar{
    animation-name: giro;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}

.covera {
  /*efecto parallax*/
  width: 100%;
  height: 100%;
  padding-bottom: 0px;
  position: absolute;
  left: 0;
  right: 0;
  min-height: 500px;
  background-repeat: no-repeat;
}

.covera.parallaxa {
  background-attachment: fixed;
  background-image: url('{{ asset('images/petc_imgs/portada_petc.png') }}');
  position: relative;
  margin-top: -25px;
}

.covera P {
    border-radius: 0.375rem;
    font-family: 'ABeeZee', sans-serif;
  letter-spacing: 5px;
  padding: 10px 15px;
  font-weight: bold;
  /*fuente en negritas*/
  text-transform: uppercase;
  /*mayusculas*/
  font-size: 2em;
  /*tamaño de la fuente*/
  position: absolute;
  /**/
  width: auto;
  /*ancho automatico*/
  bottom: 0;
  /**/
  left: 1px0;
  /*alienado a la izq*/
  z-index: 10;
  /*para que aparezca arriba de la imagen*/
  text-align: center;
  /**/
  color:#172c3dcc;
  /*para opaquisidad*/
  background-color: #67788acc;
  /*color oscuro con 0.8 de transparencia*/
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: block;
  /*para que aparezca en una linea o renglon*/
  width: 100%;
  /*para que abarque toda la imagen*/
  right: 0px;
  text-align: right;
}

.covera P span {
    font-family: 'ABeeZee', sans-serif;
  display: block;
  font-size: 0.5em;
  font-weight: 200;
  margin-top: 6px;
}

    .animated-hr {
            border: 0;
            height: 2px;
            background: linear-gradient(to right, #f06, #67788a);
            animation: slide 2s infinite;
        }

        @keyframes slide {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

.redes{
    color:#ffff;
}

.redes:hover{
    color:#ec1c24;
}
</style>
<body>
    <div id="app">
        {{-- <nav class="w-full flex">
            <div class="flex justify-beetwen w-full">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


            <div class="grid w-full h-full">
                <div  class="h-full flex flex-col flex-1 w-full">
                    <main class="h-screen  bg-[#172c3d] shadow-2xl z-30">
                        <div class=" h-screen">
                            @yield('content')
                        </div>
                    </main>
                </div>
            </div>

    </div>
    <script>
    </script>
    <style>
  <style>
    @media (min-width: 290px) {
        .img-widt{
        width:8%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.3rem;
    line-height: 1.8rem;
    }

    .image_w_h{
    width:20rem;
    height:20rem;
}

    .div_img{
        width:20.5rem;
        height:20.7rem;
    }

    .flex_grid{
    display:grid
}

.margin-all{
     margin-top:5rem;
     justify-content: center;
     width: 100%;
}
.margin-t-image {
    margin-top:5rem;
    justify-content: center;
    width: 100%;
}
}


    @media (min-width: 350px) {
        .img-widt{
        width:10%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.3rem;
    line-height: 1.8rem;
    }

    .image_w_h{
    width:20rem;
    height:20rem;
}

    .div_img{
        width:20.5rem;
        height:20.7rem;
    }

    .flex_grid{
    display:grid
}

.margin-all{
     margin-top:5rem;
     justify-content: center;
     width: 100%;
}
.margin-t-image {
    margin-top:5rem;
    justify-content: center;
    width: 100%;
}
}


    @media (min-width: 540px) {
        .img-widt{
        width:20%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.3rem;
    line-height: 1.8rem;
    }

    .image_w_h{
    width:20rem;
    height:20rem;
}

    .div_img{
        width:20.5rem;
        height:20.7rem;
    }

    .flex_grid{
    display:grid
}

.margin-all{
     margin-top:5rem;
     justify-content: center;
     width: 100%;
}
.margin-t-image {
    margin-top:5rem;
    justify-content: center;
    width: 100%;
}

}

@media (min-width: 540px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.3rem;
    line-height: 1.8rem;
    }

    .image_w_h{
    width:20rem;
    height:20rem;
}

    .div_img{
        width:20.5rem;
        height:20.7rem;
    }

    .flex_grid{
    display:grid
}

.margin-all{
     margin-top:5rem;
     justify-content: center;
     width: 100%;
}
.margin-t-image {
    margin-top:5rem;
    justify-content: center;
    width: 100%;
}

}


@media (min-width: 640px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.3rem;
    line-height: 1.8rem;
    }

    .image_w_h{
    width:20rem;
    height:20rem;
}

    .div_img{
        width:20.5rem;
        height:20.7rem;
    }

    .flex_grid{
    display:grid
}

.margin-all{
     margin-top:0rem;
}
.margin-t-image {
    margin-top:0rem;
}

}

@media (min-width: 750px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.5rem;
        line-height: 1;
    }

    .image_w_h{
    width:21rem;
    height:21rem;
    }

    .div_img{
        width:21.5rem;
        height:21.5rem;
    }

    .flex_grid{
    display:flex;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}



    @media (min-width: 845px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:15px;
    }

    .title_1{
        font-size: 2.5rem;
        line-height: 1;
    }

    .image_w_h{
    width:22rem;
    height:22rem;
    }

    .div_img{
        width:22.5rem;
        height:22.5rem;
    }

        .flex_grid{
    display:flex;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1000px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.5rem;
    line-height: 2rem;
    }

    .image_w_h{
    width:25rem;
    height:25rem;
}

.div_img{
    width:25.5rem;
    height:25.7rem;
}

.flex_grid{
    display:flex;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1150px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3.5rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.9rem;
    line-height: 2.25rem;
    }

    .flex_grid{
    display:flex;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}



@media (min-width: 1200px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3.5rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.9rem;
    line-height: 2.25rem;
    }

    .flex_grid{
        display:flex
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1220px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3.5rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.9rem;
    line-height: 2.25rem;
    }

    .flex_grid{
    display:flex
}

.margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}





    @media (min-width: 1240px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3.5rem;
        line-height: 1;
    }

    .flex_grid{
    display:flex
}

.margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}

@media (min-width: 1245px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .title_1{
        font-size: 3.75rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 1.9rem;
    line-height: 2.25rem;
    }

    .flex_grid{
    display:flex
}

.margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1415px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}



@media (min-width: 1430px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1445px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:50px;
    }

    .flex_grid{
    display:flex
}

.margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1450px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:120px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}

@media (min-width: 1535px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:120px;
    }
    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}

@media (min-width: 1540px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:130px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}

@media (min-width: 1640px) {
    .img-widt{
        width:30%;
        width:150px;
    }

    .margin_title{
        margin-left:150px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}


@media (min-width: 1760px) {
    .img-widt{
      width:30%;
      width:150px;
    }
    .margin_title{
        margin-left:250px;
    }

    .margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}
}

@media (min-width: 1940px) {
    .img-widt{
      width:30%;
    }

    .title_1{
            font-size: 3.75rem;
        line-height: 1;
    }

    .title_2 {
    font-size: 2.25rem;
    line-height: 2.5rem;
}

.image_w_h{
    width:27.5rem;
    height:27.5rem;
    box-sizing: border-box;
}

.div_img{
    width:28rem;
    height:28rem;
}

.flex_grid{
    display:flex
}


.margin-all{
     margin-top:20rem;
}
.margin-t-image {
     margin-top:6rem;
}

}


    </style>
    </style>
</body>
</html>
