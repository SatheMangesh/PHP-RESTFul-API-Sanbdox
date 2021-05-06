<!DOCTYPE html>

<!-- Latest compiled and minified CSS -->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
<style>
body {
  margin: 0;
}

div.content {
  padding: 3%;
  height: auto;
}

@media screen and (max-width: 700px) {
  div.content {margin-left: 0;}
}
@media screen and (max-width: 400px) {
}
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MyLogo API Sandbox</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item">
        <a class="nav-link" href="#">How To's?</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sandbox.php">API <span class="sr-only">(current)</span></a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="content">
  <h2>Welcome to My API Sandbox</h2>
  <p>Today’s software architecture relies on APIs as core to the application in much the same way as a database or user interface are considered core components to the architecture. That reliance on APIs means that application testers have to test the application’s reaction to a variety of API responses. But, if those APIs are still in development or are developed by a third party, how can you fully test against them? This is where an API sandbox comes in. Fundamentally, an API sandbox is an environment that testers can use to mimic the characteristics of the production environment and create simulated responses from all APIs the application relies on.</p>
  <p><strong>The API sandbox makes it possible to:</strong></p>
  <p>
    <ul class="list-disc">
      <li>reduce the cost and risk associated with calling 3rd party APIs during testing.</li>
      <li>allow for concurrent testing and development to fast-track app development cycles and reduce time-to-market.</li>
      <li>simulate error scenarios with your API, like latency in the API’s response time, error conditions or simulating a non-responsive API completely.</li>
  </ul>
</p>

</div>



</body>
</html>

