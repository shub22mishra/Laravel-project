<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We work...work for you.. and for you only..</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Dilip Kumar</h2>
        <p class="title">Payment gateway</p>
        <p>Customer Manager</p>
        <p>dilipkumar987654321@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:white;" href="https://www.gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Shubham Mishra</h2>
        <p class="title">Products Manager</p>
        <p>Designer Head</p>
        <p>shubhammishra221298@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:white;" href="https://www.gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Shivanshi</h2>
        <p class="title">Admin Creator</p>
        <p>Lead manager</p>
        <p>shivanshichadha5@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:white;" href="https://www.gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>


<div style="margin-left:500px;" class="column">
    <div class="card">

      <div class="container">
        <h2>Rajat Agrahari</h2>
        <p class="title">Complaint Head</p>
        <p></p>
        <p>rajatagrahari10@gmail.com</p>
        <p><button class="button"><a style="text-decoration:none;color:white;" href="https://www.gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>

</body>
</html>
