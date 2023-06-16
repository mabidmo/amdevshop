<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AMDEV Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://kit.fontawesome.com/3cb640e2c1.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <style>
      .banner-image {
        background-image: url('img/BackgroundML.jpg');
        background-size: cover;
      }
    </style>
  </head>
  <body style="background-color: rgb(45, 50, 56);" class="d-flex flex-column min-vh-100 text-white bg-dark">
    
    @include('partials/navbar')
    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <h1 class="text-white">Instan Buy Voucher Game</h1>
        <img src="img/logoBrand.png" alt="" style="width: 200px">
      </div>
    </div>

    <div class="container">
        @yield('container')
    </div>

    @include('partials/about')
    
    
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow', 'opacity');
          nav.classList.add('opacity:0.6');
        }
      });
    </script>
  </body>
</html>
