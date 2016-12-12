<?php
		$conn=new PDO('mysql:host=localhost;dbname=appsinbuea','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$result=$conn->query('SELECT appName,appLink,websiteLink,creatorName,shortDescription,longDescription,imgDirectory FROM appstable');
			
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<title>Apps In Buea</title>
  </head>
   <body>
      <!-- Bootstrap core JavaScript-->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/respond.js"></script>
	
		<!--navigation bar -->
		<header class="container-fluid row">
			<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button
				</div>
				<div class="collapse navbar-collapse " id="collapse">
					<ul class="nav navbar-nav ">
						<li><a class="navbar-brand " href="index.php">AppsInBuea</a></li>
						<li class="active"><a  href="index.php">Apps</a></li>
						<li><a href="event.php">Events</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				
					<form class="navbar-form navbar-right " role="search">
						<div class="form-group">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAppPopUp" data-whatever="@mdo" >
								<span class="glyphicon glyphicon-plus"></span> Add App
							</button>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
					</div>
				</div>
			</nav>
		</header>
		<!-- end of nav bar -->
					
		
   		<!-- Inserting the Jumbotron(second header) -->
		<div class="container header2">
			<div class="jumbotron">
				<h1>Apps In Buea</h1>
				<p>Welcome to the various application service in Buea</p>
				<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
			</div>
		</div>
		<!--end of Jumbotron(second header)-->
		
		<!-- inserting apps -->
		
		<div class="container container-fluid">
			<!-- Row one -->
		    <div class="row">
		      <div class="col-sm-6 col-md-4">
		        <div class="thumbnail">
				<img src="img/Koala.jpg" width="300px" height="200px" alt="Generic placeholder thumbnail" class="img-rounded" data-toggle="modal" data-target="#descriptionPopUp" data-whatever="@mdo"   class=" img-responsive"/>
		          <div class="caption">
		            <h3>Thumbnail label</h3>
		            <blockquote><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></blockquote>
		            <p><a href="components.1#" class="btn btn-primary" role="button">More</a> <a href="components.1#" class="btn btn-default" role="button">Share!</a></p>
		          </div>
		        </div>
		      </div>
		      <div class="col-sm-6 col-md-4">
		        <div class="thumbnail">
		          <img src="img/Penguins.jpg" width="300px" height="200px" alt="Generic placeholder thumbnail" class="img-rounded"   data-toggle="modal" data-target="#descriptionPopUp" data-whatever="@mdo" class=" img-responsive"/>
		          <div class="caption">
		            <h3>Thumbnail label</h3>
		            <blockquote><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></blockquote>
		            <p><a href="components.1#" class="btn btn-primary" role="button">More</a> <a href="components.1#" class="btn btn-default" role="button">Share!</a></p>
		          </div>
		        </div>
		      </div>
		      <div class="col-sm-6 col-md-4">
		        <div class="thumbnail">
		          <img src="img/Koala.jpg" width="300px" height="200px" alt="Generic placeholder thumbnail" class="img-rounded"   data-toggle="modal" data-target="#descriptionPopUp" data-whatever="@mdo" class=" img-responsive" >
		          <div class="caption">
		            <h3>Thumbnail label</h3>
		            <blockquote><p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p></blockquote>
		            <p><a href="components.1#" class="btn btn-primary" role="button">More</a> <a href="components.1#" class="btn btn-default" role="button">Share!</a></p>
		          </div>
		        </div>
		      </div>
		    </div><!-- end of row one-->
		
		<!-- Row two -->
			
		    <div class="row">
			  <?php  /*you can also use  while($col=$result->fetch()){     */ while($col=$result->fetch()):?>  
		      <div class="col-sm-6 col-md-4">
		        <div class="thumbnail">
		         <img src=" <?php echo $col['imgDirectory'];?>" width="300px" height="200px" alt="Generic placeholder thumbnail" class="img-rounded"   data-toggle="modal" data-target="#descriptionPopUp" data-whatever="@mdo" class=" img-responsive"/>
		          <div class="caption">
		            <h3><?php echo $col['appName'];?></h3>
		            <blockquote><p><?php echo $col['shortDescription'];?></p></blockquote>
		            <p><a href="components.1#" class="btn btn-primary" role="button">Button</a> <a href="components.1#" class="btn btn-default" role="button">Button</a></p>
		          </div>
		        </div>
		      </div>
			  <!-- end of row two--> <?php  /*    }    */  endwhile; ?>
		    </div>
			
		
	</div>
		<!-- footer (pagination)-->
		<footer>
			<div class="container container-fluid ">
				<ul class="pagination ">
					<li><a href="#">Previous</a></li>
					<li  class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li ><a href="#">Next</a></li>
				</ul>
			</div>
	
		</footer><!-- footer -->
		<!-- popup model for addAppPopUp- -->
		<div class="modal fade" id="addAppPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"><b>Enter Information Relavant to the Application</b></h4>
			  </div>
			  <div class="modal-body">
				<form action="actions/addAppAction.php" method="POST" >
				  <div class="form-group">
					<label for="recipient-name" class="control-label"></label>
					<input type="text" class="form-control" id="recipient-name"  placeholder="App name"  name="appName">
				  </div>
				   <div class="form-group">
					<label for="recipient-name" class="control-label"></label>
					<input type="text" class="form-control" id="recipient-name" placeholder="Link to download "  name="appLink">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label"></label>
					<input type="text" class="form-control" id="recipient-name" placeholder=" Link to website"  name="websiteLink">
				  </div>
				  <div class="form-group">
					<label for="recipient-name" class="control-label"></label>
					<input type="text" class="form-control" id="recipient-name" placeholder="name of creator"  name="creatorName">
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label"></label>
					<textarea class="form-control" id="message-text" placeholder="short description of application"  name="shortDescription"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label"></label>
					<textarea class="form-control" id="message-text"  placeholder="full description of application"   name="longDescription"></textarea>
				  </div>
				   <div class="form-group">
					<label for="recipient-name" ></label>
					<input type="file" id="recipient-name" name="logo">
					<p class="help-block">Required dimension (4X4)</p>
				  </div>
		
				   <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
				  </div>
				</form>
			  </div>
			</div>
		  </div>
		</div>
			<!-- popup model for  app description- -->
		<div class="modal fade" id="descriptionPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"><b>Information about the application</b></h4>
			  </div>
			  <div class="modal-body">
		
		<div class="container container-fluid">
			<!-- Row one -->
		    <div class="row">
		      <div class="col-sm-6 col-md-4">
				<img src="img/Penguins.jpg"  width="600px" height="300px" alt="image not available"  class=" img-rounded img-responsive" />
		          <div class="caption">
		            <h3><?php echo "appName" ?></h3>
		            <blockquote>
					Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
					</blockquote>
		          </div>
				  <small><p class="">you can download this App throught:<?php echo "www.downloadLink.com" ?></p></small>
				  <small><p class="">you can go to the creators website throught:<?php echo "www.websiteLink.com" ?></p></small>
		       
		      </div>
		    </div><!-- end of row one-->
		    </div>
				
			  </div>
			   <div class="modal-footer">
						<p><i>created by:<?php echo "name of creator" ?></i></p>
				  </div>
			</div>
		  </div>
		</div>
  </body>
</html>