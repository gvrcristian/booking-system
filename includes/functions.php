<?php
include('include/database_connection.php');

function pnews($num)
{
	global $con;
	$new = $con->prepare("SELECT `id`,`title`,`description`,`link`,`image` FROM news LIMIT $num ");
	$new->execute();
	$new->bind_result($id,$title, $description, $link, $image);
	
	while($new->fetch())
	{
		if(strlen($description) > 0)
		{
		 echo'<section id="home">';	
		 if ($id > 0){
		echo'<div id="main-slider" class="carousel slide" data-ride="carousel">';
			echo'<ol class="carousel-indicators">';
			if ($id == 1){
				echo'<li data-target="#main-slider" data-slide-to="'.$id.'" class="active"></li>';
				else
				{
				echo'<li data-target="#main-slider" data-slide-to="'.$id.'"></li>';
				}
				}
				
			echo'</ol>';

				echo'<div class="carousel-inner">';
	      }
		  
		     if ($id == 1){
				echo'<div class="item active">';
					echo'<img class="img-responsive" src="images/slider/'.$image.'" alt="slider">';						
					echo'<div class="carousel-caption">';
						echo'<h2>'.$title.'</h2>';
						echo'<h4>'.$description.'</h4>';
						echo'<a href="'.$link'">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>';
					echo'</div>';
				echo'</div>'
				else
				{
				
					echo'<div class="item active">';
					echo'<img class="img-responsive" src="images/slider/'.$image.'" alt="slider">';						
					echo'<div class="carousel-caption">';
						echo'<h2>'.$title.'</h2>';
						echo'<h4>'.$description.'</h4>';
						echo'<a href="'.$link'">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>';
					echo'</div>';
				echo'</div>'
				}
				}
					
			echo'</div>';
		echo'</div>';    	
    echo'</section>';
		

		}
	}
}
	function social()
{
	global $con;
	$new = $con->prepare("SELECT `id`,`fb`,`google`,`twiter`,`youtube` FROM social ");
	$new->execute();
	$new->bind_result($id,$fb,$google,,$twiter,$youtube);
	while($new->fetch())
	{

	    if(strlen($twiter) > 0){
		  echo'<a href="'.$twiter.'"><i class="fa fa-twitter"></i></a>';
	     }
		 	    if(strlen($fb) > 0){
		  echo'<a href="'.$fb.'"><i class="fa fa-facebook"></i></a>';
	     }
      		 	    if(strlen($google) > 0){
			echo'<a href="'.$google.'"><i class="fa fa-google-plus"></i></a>';
	     }
		       		 	    if(strlen($youtube) > 0){
			echo'<a href="'.$youtube.'"><i class="fa fa-youtube"></i></a>';
	     }
    }
}
	function sponsor()
{
	global $con;
	$new = $con->prepare("SELECT `id`,`name`,`link`,`img` FROM sponsor ");
	$new->execute();
	$new->bind_result($id,$name,$link,$img);
	while($new->fetch())
	{
	 echo'<section id="sponsor">';
		echo'<div id="sponsor-carousel" class="carousel slide" data-interval="false">';
			echo'<div class="container">';
				echo'<div class="row">';
					echo '<div class=""col-sm-10"">';
						echo '<h2>Sponsors</h2>	';		
						echo '<a class="sponsor-control-left" href=""#sponsor-carousel"" data-slide="prev"><i class="fa fa-angle-left"></i></a>';	
						echo '<a class="sponsor-control-right" href=""#sponsor-carousel"" data-slide="next"><i class="fa fa-angle-right"></i></a>';
						echo '<div class="carousel-inner">';
	    if((int)$id%2==0){
		    echo'<div class="item active">';
			echo'<ul>';
		   	echo'<li><a href="'.$link.'"><img class="img-responsive" src="images/sponsor/'.$img.'" alt="'.$name.'"></a></li>';
		    echo'</ul>';
			echo'</div>';
		
		}

		    if((int)$id%2!=0){
			  echo'<div class="item">';
			  echo'<ul>';
			  echo'<li><a href="'.$link.'"><img class="img-responsive" src="images/sponsor/'.$img.'" alt="'.$name.'"></a></li>';
		      echo'</ul>';
			  echo'</div>';
		}
      	echo '</div>';
					echo '</div>';
				echo '</div>';				
			echo '</div>';	
			echo '<div class="light">';	
				echo '<img class="img-responsive" src="images/light.png" alt="">';	
				echo '</div>';
		echo '</div>';
	echo '</section>';		
	}

	function sponsor()
{
	global $con;
	$new = $con->prepare("SELECT `id`,`name`,`location`,`img`,`yt` FROM lastevent ");
	$new->execute();
	$new->bind_result($id,$name,$location,$img,$yt);
	while($new->fetch())
	{
	  echo'<section id="event">';
		echo'<div class="container">';
			echo'<div class="row">';
				echo'<div class=""col-sm-12 col-md-9"">';
					echo'<div id="event-carousel" class="carousel slide" data-interval="false">';
						echo'<h2 class="heading">Performers</h2>';
						echo'<a class="even-control-left" href=""#event-carousel" data-slide="prev""><i class="fa fa-angle-left"></i></a>';
						echo'<a class="even-control-right" href=""#event-carousel"" data-slide="next"><i class="fa fa-angle-right"></i></a>';
						echo'<div class="carousel-inner">';
						
						
	    if ( strlen($name) > 0 and strlen($location) > 0 and strlen($img) > 0){
		   
		     if((int)$id%2==0){
			  echo'<div class="item active">';
			  echo'<div class="row">';
				echo'div class=""col-sm-4"">';
				echo '<div class="single-event">';
				echo'<a href="'.$yt.'"><img class="img-responsive" src="images/event/'.$img.'" alt="event-image"></a>';
					echo'<h4>'.$name.'</h4>';
						echo'<h5>'.$location.'</h5>';
							echo'</div>';
								echo'</div>';
				echo'</div>';
				echo'</div>';
		}
				     if((int)$id%2!=0){
			  echo'<div class="item">';
			  echo'<div class="row">';
				echo'div class=""col-sm-4"">';
				echo '<div class="single-event">';
				echo'<a href="'.$yt.'"><img class="img-responsive" src="images/event/'.$img.'" alt="event-image"></a>';
					echo'<h4>'.$name.'</h4>';
						echo'<h5>'.$location.'</h5>';
							echo'</div>';
								echo'</div>';
				echo'</div>';
				echo'</div>';
		}
		}
			echo'</div>';
					echo'</div>';
				echo'</div>';
				echo'<div class="guitar">';
					echo'<img class="img-responsive" src="images/guitar.png" alt="guitar">';
				echo'</div>';
			echo'</div>	';		
		echo'</div>';	
	echo'</section>';	
		
} 

?>