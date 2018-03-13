<!DOCTYPE html>
<html>
<head>
	<title>Slate</title>
	

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<style>


body {
	background: url(images/bg-slate.png) top left repeat-x #ffffff;
	color: #959595;
	font-family: 'Source Sans Pro', helvetica, arial, sans-serif;
    }


    </style>
<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(19.0455922,72.8894972),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
   <style type="text/css">
   li{ 
    display: inline;

   }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type = "text/javascript">
        $(function () {
            
             $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
    </script>
</head>
<body>
       <div id="main_page">
       	
           <img src="images/logo.png" id="logo">

           <div id="add_social">
	           <center><ul style="padding:15px;">
	           <li style="display:inline"><img src="images/social-icon-facebook.png"></li>
	           <li style="display:inline"><img src="images/social-icon-googleplus.png"></li>
	           <li style="display:inline"><img src="images/social-icon-foursquare.png"></li>
	           <li style="display:inline"><img src="images/social-icon-tripadvisor.png"></li>
	           <li style="display:inline"><img src="images/social-icon-twitter.png"></li>
	           <li style="display:inline"><img src="images/social-icon-yelp.png"></li>
	           </ul>

	           <img src="images/icon-map-black.png"> 55 MAIN AVE. NORWALK, CT 06850
	           <br><br>
	           <img src="images/icon-phone-black.png">(555) 678 7021	
	           </center>
           </div>

           <div class="menu" id="menu">
              <ul style="padding:10px;color:#E62E00;"><h2>
              	 <li style="display:inline;margin:20px;"><a href="index.php">Home</a></li>
              	 <li style="display:inline;margin:20px;"><a href="about.html">About Us</a></li>
              	 <li style="display:inline;margin:20px;"><a href="menu.html">Menus</a></li>
              	 <li style="display:inline;margin:20px;"><a href="gallery.html">Gallery</a></li>
              	 <li style="display:inline;margin:20px;"><a href="staff.html"> Staff</a></li>
              	 <li style="display:inline;margin:20px;"><a href="contact.php">Contact</a></li>
                 </h2>
              </ul>           	
           </div>
            
            <div id="pics_box">
              <script language="JavaScript">
              var i = 0;
              var path = new Array();
               
              // LIST OF IMAGES
              path[0] = "images/martini.jpg";
              path[1] = "images/2.jpg";
              path[2] = "images/3.jpg";

              function swapImage()
              {
                 document.slide.src = path[i];
                 if(i < path.length - 1) i++; else i = 0;
                 setTimeout("swapImage()",3000);
              }
              window.onload=swapImage;
              </script>
              <img  name="slide"  src="images/martini.jpg" style="width:100%;" id="bigimage" />

            </div>
              <hr style="position:absolute;top:750px;">	
              <div class="floating-box">
                  <br><font face="verdana" color="black" size="7">
                   WELCOME!</font><br><br><font face="verdana" color="grey" size="3">We are glad you stopped by.Have a look around.You may end up loving our dishes.
                   </font><br><br><button style="width:200;height:35;background-color:RED" onclick="location.href = 'menu.html';"><font face="verdana" color="white" size="2<b">BROWSE OUR MENU</font></button>
               </div>
              

             <div id="end_wala">
           	
                  <div id="tt">
                       <font face="verdana" color="black" SIZE=5>Hours</font><bR><HR style="width:80%;margin-left:0px;"><BR><font face="verdana" color="grey" SIZE=3>
							Monday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Tuesday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Wednesday &nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Thursday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Friday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Saturday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9:00 AM - 10:00 PM<BR><BR>
							Sunday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp11:00 AM - 9:00 PM
							</font>
                  </div>

                  
                 
                                  <div id="map-canvas" ></div>
                  
                  <div id="reg">
                      <font face="verdana" color="black" SIZE=5>Make a Reservation</font><hr>
                  	<table>
                  		<form action="index.php" method="POST">
                  			<tr>
                  				<td>NAME *</td>
                  				<td>EMAIL ADDRESS *</td>
                  			</tr>
                  			<br><br>
                  			<tr>
                  				<td><input required type="text" name="name" style="width:80%" ></td>
                                <td><input required type="email" name="email" style="width:80%" ></td>
                  			</tr>
                             <tr>
                  				<td>PHONE NUMBER *</td>
                  				<td>PARTY SIZE *</td>
                  			</tr>
                  			
                  			<tr>
                  				<td><input type="number" required maxlength="10" name="number" style="width:80%" ></td>
                                <td><input type="number" required name="psize" maxlength="3" style="width:80%" ></td>
                  			</tr>
                            <tr>
                  				<td>DATE *</td>
                  				<td>TIME *</td>
                  			</tr>
                  			
                  			<tr>
                  				<td><input type="text" name="date" required style="width:80%" ></td>
                                <td><input type="text" maxlength="5" required name="time" style="width:80%" ></td>
                  			</tr>
                        <tr>
                          <td><input type="submit" name="submit" value="Reserve" style="font-family:verdana;color:white;width:100;height:40;background-color:RED"></td>
                        </tr>
                  		</form>
                  	</table>
                    <?php 
                      require "db_connection.php";
                      if(isset($_POST['submit'])) {
                        
                      
                       $name=$_POST["name"];
                       $date=$_POST["date"];
                       $time=$_POST["time"];
                       $psize=$_POST["psize"];
                       $phone=$_POST["number"];
                       $email=$_POST["email"];
                       $query="INSERT INTO `reserve`(`name`, `email`, `phone`, `psize`, `date`, `time`) VALUES ('$name','$email','$phone','$psize','$date','$time');";
                        mysql_query($query);
                        mysql_close();
                        }
                    ?>
                  </div>
            </div>
    </div>

    <div id="bottomwala">
    
      <img src="images/bg-footer.png" style="height:100%;width:100%;">
     
      <div id="sitemap">
    <ul>
      <li  style="padding:20px;"><a href="index.php">Home</a></li>
      <li  style="padding:20px;"><a href="about.html">About Us</a></li>
      <li  style="padding:20px;"><a href="menu.html">Menu</a></li>
      <li style="padding:20px;"><a href="gallery.html">Gallery</a></li>
      <li  style="padding:20px;"><a href="staff.html">Staff</a></li>
      <li  style="padding:20px;"><a href="contact.php">Contact</a></li>
    </ul>
    </div>
    <a id="scrollToTop">&#x25B2;</a>
    </div>
    
<img src="images/tree.png" style="position: absolute;top:1410px;left:590px;height:185px;width:140px;">

                

</body>
</html>