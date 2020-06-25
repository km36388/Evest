<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
   	<div class="container-fluid" style="background-color:  #e3f2fd;">
         <!-- MENU DIV STARTS-->
         <div class="row">
         	<div class="col-md-12">
            	<?php
					include "menu.php"
				?>
            </div>
         </div>
    	<!-- MENU DIV ENDS -->
    	
        <!-- features DIV STARTS-->
         <div class="row">
         	<div class="col-md-6">
                <div class="card">
                  <div class="card-header shadow p-3 mb-5 bg-light rounded" style="background-color:  #318cd8;">
                    <h3 align="center">Host Event</h3>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Let me in</a>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                  <div class="card-header shadow p-3 mb-5 bg-light rounded" style="background-color:  #318cd8;">
                    <h3 align="center">Find Event</h3>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Events</a>
                  </div>
                </div>
            </div>
         </div>
    	<!-- features DIV ENDS -->
        
        <!-- Embed video DIV STARTS-->
         <div class="row">
         	<div class="col-md-12"><br />
           <h4 class="card-title mx-auto" align="center"> Visiting for the first see this amazing tutorial to get started.</h4>
			<br />
            	<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item embed-responsive-4by3" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
            </div>
         </div>
    
    	 <!-- Embed Video DIV ENDS-->
         
         <!-- FOOTER DIV STARTS-->
         <div class="row">
         	<div class="col-md-12">
            	<?php
					include "footer.php"
				?>
            </div>
         </div>
    
    	 <!-- FOOTER DIV ENDS-->

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>