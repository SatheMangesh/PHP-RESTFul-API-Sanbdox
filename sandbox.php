<!DOCTYPE html>

<!-- Latest compiled and minified CSS -->
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
<style>
body {
  margin: 0;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar .side_div {
display: block;
color: black;
padding: 16px;
height: auto;
background-color: #f8f9fa;
border: 1px solid white;
}
 
 .side_div:hover{
  background-color: grey;
 } 

div.content,.contentForm{
  margin-left: 21%;
  padding-top: 1%;
  padding-right: 1%;
  height: auto;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar .side_div {float: left;}
  div.content, .contentForm{margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar .side_div {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<script>

	$(document).ready(function(){
		
    $('.sidebar').html('We are loading Api\'s list...');
		
		$.ajax({
				url:'sidebar.php',
				/* dataType: 'json', */
				method: 'post',
				/* contentType : '', */
				data : 'load=loadSidebarHref',
				processData : true,
				success : function(leftsidebar){
					$('.sidebar').html(leftsidebar);	
          /* localStorage.clear();
          const user = { name: 'Mangesh', job: 'CEO' };
          localStorage.setItem('user', JSON.stringify(user));
          var user_details = JSON.parse(localStorage.getItem('user'));
          alert('My name is '+user_details.name+' and I am a '+user_details.job); */
				},
				error : function(){
					alert('failyre');
			    }
			 });
	});

 
      $(document).on('click','[loadapiform]' ,function(data){
          var loadApiForm = $(this).attr('loadapiform');

          $.ajax({
        url:'sidebar.php',
        /* dataType: 'json', */
        method: 'post',
        /* contentType : '', */
        data : 'load=loadApiCustomForm&loadForm='+loadApiForm,
        processData : true,
        success : function(data){
          $('.content').remove();
          $('.contentForm').html(data); 
        },
        error : function(){
          alert('faile');
          }
       });


      });

</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MyLogo API Sandbox</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	
      <li class="nav-item active">
        <a class="nav-link" href="sandbox.php">API <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="sandbox.php">Add API <span class="sr-only"></span></a>
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
<div class="sidebar">
</div>

<div class="content">
  <h2>Api testing </h2>
  <p>Please select your API from the listed API's in left sidebar. Make sure that you have valid access!</p>
  <strong>Don't have access to sandbox! <a href="#">Click here</a> </strong>

</div>
<div class="contentForm" >
 
   
 

</div>



</body>
</html>

