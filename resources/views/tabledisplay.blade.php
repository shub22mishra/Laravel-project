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
table{

}
.shiv{
        color:red;
}




        </style>
    </head>
    <body>
        <div>
    <ul>
                    <li><a class="active" href="#home">HOME</a></li>
                    <li><a href="#contact">Bill</a></li>
                    <li><a href="/">Logout</a></li>
                </ul>
            </div>
            <h1><center><b><font style="color:white;">CUSTOMER'S COMPLAINT TABLE</font></b></center></h1>
            <table border="2px solid white" width="80%">
            <tr>
                    <td class="shiv">Name</td>
                    <td class="shiv">Mobile</td>
                    <td class="shiv">Email</td>
                    <td class="shiv">Address</td>
                    <td class="shiv">query</td>

                </tr>
            @foreach($complaint as $user1)          
            <tr>
                <td style="border-color: white;border:3 px solid white;"><font style="color:white;">{{ $user1->name }}</td></font>
                <td class="shiv"><font style="color:white;">{{$user1->mobile}}</td></font>
                <td class="shiv"><font style="color:white;">{{$user1->email}}</td></font>
                <td class="shiv"><font style="color:white;">{{$user1->address}}</td></font>
                <td class="shiv"><font style="color:white;">{{$user1->query}}</td></font>
            </tr>
            @endforeach
        </table>
           </body>
            </html>
