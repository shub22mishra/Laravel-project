<html>
<head>
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
            .links>a {
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

li>a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration:none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}




        </style>
    </head>
    


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Admin Page</title></head>
<body style="background-color: black;">
    <ul>
                    <li><a class="active" href="#home" style="text-decoration: none;">HOME</a></li>
                    <li><a href="admin" style="text-decoration:none;">ADMIN</a></li>
                    <li><a href="insert" style="text-decoration:none;">BILL</a></li>
                    <li><a href="/users" style="text-decoration:none;">CUSTOMER COMPLAINT</a></li>
                    <li><a href="/" style="text-decoration:none;">LOGIN</a></li>
                </ul>


	<br><br>
		<div class="col-lg-6 m-auto" style="border:2px solid green ">
			<br><br>
			<form method="POST" action="/loginme" autocomplete="off">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div>
					<h2><b><center><font style="color:white;">WELCOME ADMIN</font></center></b></h2>
				</div>
				<div class="form-group">
					<br>
					<label for="name"><font style="color:white;"><b>NAME:</b></font></label>
					<input type="text" name="username" id="username" class="form-group" placeholder="Enter Your Name..."  style="width:100%">
				</div>
				<div class="form-group">
					<label for="password"><font style="color:white;"><b>PASSWORD:</b></font></label>
					<input type="password" name="password" id="password" placeholder="Enter your password...." style="width:100%">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success" style="width:50% ;margin-left:160px; padding:10px;">SUBMIT</button>
				</div>
		
	</div>
</form>
					





	</body>

</html>