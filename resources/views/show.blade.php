<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
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
.dil{
    color:yellow;
}
.dil1{
    color:red;
}
</style>
</head>
<body>

<ul>
                    <!-- <li><a class="" href="/">HOME</a></li> -->
                    <!-- <li><a class="active">Customers</a></li> -->
                    <!-- <li><a href="#about">About</a></li> -->
                    <li><a style="margin-left:1300px;" href="/">Logout</a></li>
    </ul>





<h1 align="center">CUSTOMER DETAILS</h1>


<table style="margin-top:10px;" border = "1" width="100%">
<tr>

<td class="dil">NAME</td>
<td class="dil">Email</td>
<td class="dil">Address</td>
<td class="dil">City</td>
<td class="dil">State</td>
<td class="dil">Zip</td>
<td class="dil">Name on the Card</td>
<td class="dil">Credit Card</td>
<td class="dil">Expiry Month</td>
<td class="dil">Expiry Year</td>
<td class="dil">CVV</td>
</tr>

@foreach ($laravel_test as $user1)
<tr>

<td class="dil1">{{ $user1->Name }}</td>
<td class="dil1">{{ $user1->Email }}</td>
<td class="dil1">{{ $user1->Address }}</td>
<td class="dil1">{{ $user1->City }}</td>
<td class="dil1">{{ $user1->State }}</td>
<td class="dil1">{{ $user1->Zip }}</td>
<td class="dil1">{{ $user1->NameOnCard }}</td>
<td class="dil1">{{ $user1->CreditCard }}</td>
<td class="dil1">{{ $user1->ExpMonth }}</td>
<td class="dil1">{{ $user1->Expyear }}</td>
<td class="dil1">{{ $user1->Cvv }}</td>
</tr>
@endforeach
</table>
</body>
</html>