<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<link href="{{asset('css/all.css')}}" rel="stylesheet">
<link href="{{asset('ressources/css/app.css')}}" rel="stylesheet">
<title>NISDIS GOOSE</title>
</head>


<body>

<header class="header">

<h1 class="nomdusite">NISDIL GOOSE 
    @auth
    <a href="catalogue" style="text-decoration:none"><img src="https://png.pngtree.com/png-vector/20190830/ourlarge/pngtree-mountain-for-travel-adventure-logo-design-inspiration-png-image_1716383.jpg" height="45" width="45"></a> </h1>
@endauth

@guest
    <a href="/" style="text-decoration:none"><img src="https://png.pngtree.com/png-vector/20190830/ourlarge/pngtree-mountain-for-travel-adventure-logo-design-inspiration-png-image_1716383.jpg" height="45" width="45"></a> </h1>
@endguest


@auth
<div class="layoutdroit">
<div class="lignebonjour"> Bonjour <a class="lienprofil" href="http://127.0.0.1:8000/profil"> {{Auth::user()->name}} </a> ! </div>
</n>

<form method="POST" action="http://127.0.0.1:8000/logout">
                    <input type="hidden" name="_token" value="TkinvI2BkZPdHBNqTHlCSdJ2O0yeEsYQvVKFIasb">
                    <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                        this.closest('form').submit();">
    Log Out
</a>
                </form>
    
    @endauth
    
    @guest
    
    @endguest
    
    
    </header>
    
    
    
    
    @yield('contenu')
    
    
    
    <footer class="footer">  
    
    <div class="contact">
    <p>Nous contacter :</p>
    </div>
    
    <div class="reseaux">
    <a href="https://twitter.com" style="text-decoration:none"><img src="https://www.seekpng.com/png/detail/84-842766_logo-twitter-png-noir-twitter-icon-vector-circle.png" height="35" width="35"></a> 
    <a href="https://www.facebook.com" style="text-decoration:none"><img src="https://www.cpas.grez-doiceau.be/epn/images/logo-facebook.png/@@images/e089d70f-51fe-4bc3-9fb4-50af5d51ef69.png" height="35" width="35"></a> 
    </div>
    
    
    </footer>
    
    
    


    </body>
    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette2",Theme:"classic",Mode:"banner bottom",ButtonText:"Accept",Location:"https://www.cookiesandyou.com",Time:"1",})</script>
    </html>
