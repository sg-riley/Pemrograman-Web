<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile-Dina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
  
    <style>
      body {
        font-family: 'Gowun Batang';
      }
    </style>

</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-light-subtle sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand fs-3" href="#">Atmarior</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link fs-4" aria-current="page" href="{{url('home-11928')}}">Home</a>
              </li>
              <li id="active-border" class="nav-item border-bottom border-3 border-light mx-2">
                <a class="nav-link active fs-4" href="{{url('profile-dina')}}">Profile</a>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img id="theme-icon" src="/images/moon.png" alt="Dark mode" width="22" height="22">
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div id="dark-mode" class="dropdown-item d-inline-flex">
                      <img id="moon-icon" src="{{asset('images/moon.png')}}" class="m-2" alt="Dark mode" width="20" height="20">
                      <a class="dropdown-item m-1" href="#" >Dark Mode</a>
                    </div>
                  </li>
                  <li>
                    <div id="light-mode" class="dropdown-item d-inline-flex">
                      <img id="sun-icon" src="{{asset('images/sunWhite.png')}}" class="m-2" alt="light mode" width="20" height="20">
                      <a class="dropdown-item m-1" href="#" >Light Mode</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 class="text-light text-center m-4">My Profile</h1>
      <main class="d-flex flex-wrap justify-content-around">
        <div class="card bg-dark text-white border-secondary p-2 m-3" style="width: 18rem;">
            <img src="{{asset('images/gojo.jpg')}}" class="card-img-top rounded-circle p-4" alt="satoru">
            <div class="card-body">
              <h5 class="card-title text-center">{{$nama1}} - {{$npm1}}</h5>
              <p class="card-text">{{$quotes1}}</p>
              <a href="{{url('home-11928')}}" class="btn btn-outline-success">Back to Homepage </a>
            </div>
          </div>
        <div class="card bg-dark text-white border-secondary p-2 m-3" style="width: 18rem;">
            <img src="{{asset('images/pasPhoto.jpg')}}" class="card-img-top rounded-circle p-4" alt="dina">
            <div class="card-body">
              <h5 class="card-title text-center">{{$nama2}} - {{$npm2}}</h5>
              <p class="card-text">{{$quotes2}}</p>
              <a href="{{url('home-11928')}}" class="btn btn-outline-success">Back to Homepage</a>
            </div>
          </div>
        <div class="card bg-dark text-white border-secondary p-2 m-3" style="width: 18rem;">
            <img src="{{asset('images/dog.jpg')}}" class="card-img-top rounded-circle p-4" alt="dogi">
            <div class="card-body">
              <h5 class="card-title text-center">{{$nama3}} - {{$npm3}}</h5>
              <p class="card-text">{{$quotes3}}</p>
              <a href="{{url('home-11928')}}" class="btn btn-outline-success">Back to Homepage</a>
            </div>
          </div>
      </main>
      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById("light-mode").addEventListener("click", function() {
          document.querySelector(".navbar").setAttribute("data-bs-theme", "light");
          document.body.classList.remove("bg-dark");
          document.body.classList.add("bg-light");
  
          const darkIcon = document.getElementById("moon-icon");
          const lightIcon = document.getElementById("sun-icon");
          const themeIcon = document.getElementById("theme-icon");
          darkIcon.src = "images/moonBlack.png";
          lightIcon.src = "images/sun.png";
          themeIcon.src = "images/moonBlack.png";
  
          document.querySelector("#active-border").classList.remove("border-light");
          document.querySelector("#active-border").classList.add("border-dark");
          
        });
  
  
        document.getElementById("dark-mode").addEventListener("click", function() {
          document.querySelector(".navbar").setAttribute("data-bs-theme", "dark");
          document.body.classList.remove("bg-light");
          document.body.classList.add("bg-dark");
  
          const darkIcon = document.getElementById("moon-icon");
          const lightIcon = document.getElementById("sun-icon");
          const themeIcon = document.getElementById("theme-icon");
          darkIcon.src = "images/moon.png";
          lightIcon.src = "images/sunWhite.png";
          themeIcon.src = "images/moon.png";
  
          document.querySelector("#active-border").classList.remove("border-dark");
          document.querySelector("#active-border").classList.add("border-light");
          
        });
  
      </script>
</body>
</html>