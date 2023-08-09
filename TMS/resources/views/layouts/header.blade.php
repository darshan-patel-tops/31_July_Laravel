<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row justify align-items">
                <div class="col">
                    @foreach($logos as $logo)
                    <img src="/storage/{{$logo->logo}}" height="50px" width="50px">
                    @endforeach
                </div>
                <div class="col">
                    <div class="header_text">
                        <ul>
                            
                            @foreach ($navbars as $navbar)
                            @if (count($navbar->subnavbar) > 0)

                            
                            <li class="dropdown"><a href="{{$navbar->navbar}}">{{$navbar->navbar}}<i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-nav">
                                    @foreach($navbar->subnavbar as $sub)
                                    <li><a href="{{$sub->subnavbar}}">{{$sub->subnavbar}}</a></li>
                                    
                                    {{-- <li><a href="#">Walling &amp; Fencing</a></li>
                                    <li><a href="#">jee </a></li>
                                    <li><a href="#">neet</a></li> --}}
                                    
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            
                            <li><a href="{{$navbar->navbar}}">{{$navbar->navbar}}</a></li>
                            @endif
                            @endforeach
                            @guest
                            
                            {{-- <li><a href="{{ route('login')}}">Login</a></li> --}}
                            <li><a href="login">Login</a></li>
                            <li><a href="registration">Register</a></li>
                            {{-- <li><a href="{{ route('registration')}}">Register</a></li> --}}
                            
                            @else
    
                            <li><a href="logout">Logout</a></li>
    
                            @endguest
                            {{-- <li><a href="Materials">Materials</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="about">About Us</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="number">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                            <li><a href="#">+91 8905512020</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </header>