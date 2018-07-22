<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
    <style>
      .cardy {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 60%;
          border-radius: 5px;
      }

      .cardy:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      img {
          border-radius: 5px 5px 0 0;
      }

      .conta {
          padding: 2px 16px;
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">MyFoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

          @yield('content')

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('all_jquery/jquery-3.3.1.js') }}"></script>
    <script>

      $( document ).ready( function(){
        $("#loca_food_specifications").hide();
        $("#lunch_time").hide();
        $("#supper_time").hide();
        $(".place-order").hide();
      });
      
      $("#local_food_menu").on("click", function(){
          $("#loca_food_specifications").show();          
        
      });

      $("#local_food_meal_time").on("click", function(){
        var meal_time = document.getElementById('meal_time').value;
        if (meal_time === "lunch") {
          $("#lunch_time").show();
          $(".place-order").show();
        }
        if (meal_time === "supper") {
          $("#supper_time").show();
          $(".place-order").show();
        }
      });
    </script>
  </body>

</html>
