<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

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
            body{
                background-color:black;
            }

            ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}




        </style>
    </head>
    <body>

    <ul>
                    <li><a class="active" href="#home">HOME</a></li>
                    <li><a href="admin">Admin</a></li>
                    <li><a href="/product">Product</a></li>
                    <li><a href="/insert">Billing</a></li>
                    <li><a href="/user">Details</a></li>
                    <li><a href="/users">Customers</a></li>
                    <li><a href="/complaint1">File a Complaint</a></li>
                    <!-- <li><a href="#about">About</a></li> -->
                    <li><a style="margin-left:700px;" href="/login1">Login</a></li>
                    <li><a style="">
    </ul>






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
                <div Style="color:red;" class="title m-b-md">
                WECLOME TO OUR E-COMMERCE
                </div>
            
                <div class="links">
                    <a style="color:purple" href="/product">PRODUCTS</a>
                    <a style="color:purple" href="/order">BILL</a>
                    <a style="color:purple" href="/electric">electric</a>
                    <!-- <a style="color:purple" href="https://blog.laravel.com">BLOG</a> -->
                    <!-- <a href="https://forge.laravel.com"></a> -->
                    <a style="color:purple" href="/aboutus">ABOUT US</a>
                </div>
                <div>
            <div>
                <!-- <div style="float:left;">
                      <h3 style="padding-left:200px">  MOBILE</h3>
                      <a href="bill.blade.php"><img src=""></a>
                </div>
                <div style="float:left;">
                        <h3 style="padding-left:200px">LAPTOP</h3>
                </div>
                <div style="float:left;">
                        <h3 style="padding-left:200px">ACCESSORIES</h3>
                </div> -->
            </div>
        </div>        
        
    </div>
        </div>
        
    </body>
</html>
