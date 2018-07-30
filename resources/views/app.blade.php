<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ ('MyFoods') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <!-- <style>
      /*body {
        padding-top: 54px;
      }*/
      @media (min-width: 992px) {
        /*body {
          padding-top: 56px;
        }*/
      }

    </style> -->

  </head>

  <body>
    <div id="app">
    <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('MyFoods') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="text-align: right;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>                            
                        @else
                            <li class="nav-item dropdown">

                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Home') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/stored_food">{{ __('Register Foods') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('View All Orders') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/verify">{{ __('Verify Orders') }}</a>
                                </li>

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <!-- <span class="caret"></span> -->
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
      
       $(function() {
        $(".local_food_name").on("click", function(){
          $("#price").val(this.getAttribute("price"));
          $("#foody").val(this.getAttribute("food_name"));
          
            
          });
      });
       
      $(".local_food_name").on("click", function(){
        $( this ).fadeTo( "slow" , 0.5, function() {
        });
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
