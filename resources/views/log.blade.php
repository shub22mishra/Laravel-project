<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
    body{
    font-family: 'Lato', sans-serif;
	position: relative;
	background: #3DA6D4;
	margin: 0px;
}
.main-section{
	width: 460px;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.content-section{
	background: #FFF;
	border-radius: 2px;
	box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.1);
}
.head-section{
	background: #F3F3F3;
	text-align: center;
	padding: 15px 0px;
	border-bottom: 1px solid #CECECE;
}
.head-section h3{
	margin: 0px;
	color: #565656;
}
.body-section{
	padding:15px 30px 30px 30px;
	overflow: hidden;
}
.body-section .form-input{
	width: 100%;
	padding: 15px 0px;
}
.body-section .form-input input[type='text']{
	width: calc(100% - 30px);
	border: 1px solid #D3D3D3;
	border-radius: 1px;
	padding:10px 10px;
	box-shadow: 0px 0px 0px 5px rgb(239,244,247);
}
.body-section .form-input input[type='checkbox']{
	float: left;
}
.body-section label{
	color: #565656;
	padding: 1px 5px;
	float: left;
}
.body-section .btn-submit{
	float: right;
	background: #DEEDF4;
	border:1px solid #B5CBCD;
	color: #56778E;
	font-weight: bold;
	padding:7px 20px;
	border-radius: 15px;
}
.footer-section{
	color: #F1F1F1;
	text-align: center;
	padding-top: 15px;
	font-size: 12px;
}
.footer-section a{
	color: #fff;
	font-weight: bold;
	text-decoration: none;
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
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#news">Admin</a></li>
                    <li><a href="/insert">Billing</a></li>
                    <li><a href="/users">Customers</a></li>
                    <li><a href="/complaint1">FILE A COMPLAINT</a></li>
                    <!-- <li><a href="#about">About</a></li> -->
                    <li><a class="active" style="margin-left:800px;" href="/login">Login</a></li>
                    <li><a style="">
    </ul>

	<div class="main-section">
		<div class="content-section">
			<div class="head-section">
				<h3>Login</h3>
			</div>
			<div class="body-section">
				<form action="/create11">
					<div class="form-input">
						<input type="text" name="name" placeholder="Name" required="required">
					</div>
					<div class="form-input">
						<input type="text" name="email" placeholder="Email" required="required">
					</div>
                    <div class="form-input">
						<input type="text" name="username" placeholder="username" required="required">
					</div>
                    <div class="form-input">
						<input type="text" name="password" placeholder="password" required="required">
					</div>
                    <div class="form-input">
						<input type="text" name="mobile" placeholder="mobile" required="required">
					</div>
					<div class="form-input">
						<input type="checkbox" name=""> <label>Remember me on this computer</label>
					</div>
                    <input type="submit" class="btn-submit" value="submit" name="submit">
				</form>
			</div>
		</div>
		<div class="footer-section">
			<a href="">Forgot your password?</a> <span>Click here to reset it.</span>
		</div>
	</div>
</body>
</html>