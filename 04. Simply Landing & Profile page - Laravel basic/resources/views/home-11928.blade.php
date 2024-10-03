<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-11928</title>
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
              <li id="active-border" class="nav-item border-bottom border-3 border-light mx-2">
                <a class="nav-link active fs-4" aria-current="page" href="{{url('home-11928')}}">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link fs-4" href="{{url('profile-dina')}}">Profile</a>
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
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/interior1.jpg')}}" class="d-block w-100" alt="Interior 1">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/interior2.jpg')}}" class="d-block w-100" alt="Interior 2">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/interior3.jpg')}}" class="d-block w-100" alt="Interior 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <footer>
        <div id="footer-border" class="card border-light my-5 mx-auto" style="width: 30rem;">
          <div class="btn-group" >
            <a href="https://www.instagram.com/" target="_blank" class="btn btn-dark"><img id="instaIcon" src="https://img.icons8.com/material-outlined/30/FFFFFF/instagram-new--v1.png" class="my-2 mx-5" alt="Instagram"></a>
            <a href="https://www.linkedin.com/" target="_blank" class="btn btn-dark"><img id="linkIcon" width="30" height="30" class="my-2 mx-5" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/linkedin.png" alt="linkedin"/></a>
            <a href="https://github.com/" target="_blank" class="btn btn-dark"><img id="gitIcon" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/github.png" class="my-2 mx-5" alt="Github"></a>
          </div>
        </div>
      </footer>

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

        document.querySelector("#footer-border").classList.remove("border-light");
        document.querySelector("#footer-border").classList.add("border-dark");
        
        document.querySelectorAll(".btn-dark").forEach(button => {
          button.classList.remove("btn-dark");
          button.classList.add("btn-light");
        });

        const instaIcon = document.getElementById("instaIcon");
        const linkIcon = document.getElementById("linkIcon");
        const gitIcon = document.getElementById("gitIcon");
        instaIcon.src = "https://img.icons8.com/material-outlined/30/instagram-new--v1.png";
        linkIcon.src = "https://img.icons8.com/ios-glyphs/30/linkedin.png";
        gitIcon.src = "https://img.icons8.com/ios-glyphs/30/github.png";

        
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
        
        document.querySelector("#footer-border").classList.remove("border-dark");
        document.querySelector("#footer-border").classList.add("border-light");
        
        document.querySelectorAll(".btn-light").forEach(button => {
          button.classList.remove("btn-light");
          button.classList.add("btn-dark");
        });

        const instaIcon = document.getElementById("instaIcon");
        const linkIcon = document.getElementById("linkIcon");
        const gitIcon = document.getElementById("gitIcon");
        instaIcon.src = "https://img.icons8.com/material-outlined/30/FFFFFF/instagram-new--v1.png";
        linkIcon.src = "https://img.icons8.com/ios-glyphs/30/FFFFFF/linkedin.png";
        gitIcon.src = "https://img.icons8.com/ios-glyphs/30/FFFFFF/github.png";
        
      });

      

    </script>
</body>
</html>