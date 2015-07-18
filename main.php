<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Peace Corps Hub</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="ammap/ammap.css" type="text/css">
        <script src="ammap/ammap.js" type="text/javascript"></script>
        <!-- map file should be included after ammap.js -->
		<script src="ammap/maps/js/worldLow.js" type="text/javascript"></script>
  </head>
  <body>
  
  <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PC Hub</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Account</a></li>
            <li><a href="#contact">Forum</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

<div class="row">
  <div class="col-md-4 col-md-4">
  <div class="thumbnail" height="10px">
      <align="right"><img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/face.jpeg" alt="..."></align>
      <div class="caption" style="background-color:white">
        <h3>Awesome Superhero</h3>
        <p>I am a junior at University of Awesomeness. I draw, I code, I design, I dance, I hike. I simply love my life!</p>
        <!--<p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>-->
        <!--MAPPPPP-->
       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Places I served
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Places I've served at</h4>
      </div>
      <div class="modal-body">
        <script>
			var map;

			// svg path for target icon
			var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

			AmCharts.ready(function() {
			    map = new AmCharts.AmMap();


			    map.imagesSettings = {
			        rollOverColor: "#CC0000",
			        rollOverScale: 3,
			        selectedScale: 3,
			        selectedColor: "#CC0000"
			    };

                      map.areasSettings = {
                        outlineThickness:0.1
                      };

			    var dataProvider = {
			        mapVar: AmCharts.maps.worldLow,
			        images: [
  						{svgPath:targetSVG, zoomLevel:5, scale:0.5, title:"Vienna", latitude:48.2092, longitude:16.3728},
                        {svgPath:targetSVG, zoomLevel:5, scale:0.5, title:"London", latitude:51.5002, longitude:-0.1262},
                        {svgPath:targetSVG, zoomLevel:5, scale:0.5, title:"Tunis", latitude:36.8117, longitude:10.1761}
			        ]
			    };
			    map.dataProvider = dataProvider;

			    map.objectList = new AmCharts.ObjectList("listdiv");
			    map.showImagesInList = true;

			    map.write("mapdiv");

			});

        </script>

    <div>
        <div id="listdiv" style="width:150px; overflow:auto; height:300px; float:left; background-color:#EEEEEE;"></div>
        <div id="mapdiv" style="margin-right:150px; background-color:#EEEEEE; height: 300px; width: 400px"></div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>




      </div>








    </div>


    <ul class="list-group">
      <li class="list-group-item">
      <span class="badge">14</span>
      Notification Center
      </li>
    </ul>
    
              <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon glyphicon-inbox" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
</button>

    </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <div class="col-md-4 col-md-4">
  <div class="thumbnail">
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/PCSA.jpg " alt="...">
      <h3>Malaria</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
  </div>
  <div class="col-md-4 col-md-4">
  <div class="thumbnail">
  
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/PCSA.jpg" alt="...">
      <h3>Mobile App Control Center</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
  </div>
</div>
<div class="row">

  <div class="col-md-4 col-md-offset-4">
  <div class="thumbnail">
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/PCSA.jpg" alt="...">
      <h3>Peacetrack</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
  </div>
  <div class="col-md-4 col-md-4"><div class="thumbnail">
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/PCSA.jpg" alt="...">
      <h3>PCSA</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
    </div>
</div>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
  <div class="thumbnail">
      <!-- <img src="imgs/mobile.jpg" alt="..."> -->
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/PCSA.jpg" alt="...">
      <h3>Photo Language Translation</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
  </div>
  <div class="col-md-4 col-md-4"><div class="thumbnail">
      <img src="https://raw.githubusercontent.com/bree-nery/pchub/develop/imgs/crowd.jpg" alt="...">
      <h3>Ushahidi Crowd Map</h3> 
      <div class="caption">
        
        <p>text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here 
        text goes here text goes here text goes here text goes here </p>
        </div>
   </br>
     <p><a href="#" class="btn btn-primary" role="button">Read more</a> </p>
    </div>
    </div>
</div>

  

  
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>