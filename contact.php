<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
	<title>Contact Us</title>

		<style type="text/css">
  

  body {
	background: url(images/bg-slate.png) top left repeat-x #ffffff;
	color: #959595;
	font-family: 'Source Sans Pro', helvetica, arial, sans-serif;
    }


	</style>
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
              	 <li style="display:inline;margin:20px;"><a href="staff.html">Staff</a></li>
              	 <li style="display:inline;margin:20px;"><a href="contact.php">Contact</a></li>
                 </h2>
              </ul>           	
           </div>
                     

                     <div id="contact_box">
                        <h1>Contact</h1>
                        <b>Phone:</b>  (555) 123-4567 
                        <br><b>Fax:</b>  (555) 123-4567
                        <br><br>For free hugs or bugs :P <br>Send us an email using the form below:<br><br>
                        <form method="POST" action="contact.php">
                        	<h2><table>
                        	      <tr><td><b>Your Name* :</b></td></tr>
                        	 	    <tr><td><input required style="width:300px;" type="text" name="name"></td></tr>
                                <tr><td><b>Email* :</b></td></tr>
                        	 	    <tr><td><input required style="width:300px;" type="email" name="email"></td></tr>
                        	 	    <tr><td><b>Phone Number :</b></td></tr>
                        	 	    <tr><td><input style="width:300px;" type="number" name="phno"></td></tr>
                                <tr><td><b>Message* :</b></td></tr>
                                <tr><td><textarea required style="width:500px;height:300px;" name="message"></textarea> </td></tr>  
                                <tr><td><button style="width:200px;height:55px;background-color:RED" type="submit" name="submit"><font face="verdana" color="white" size="5<b">Send</font></button></td></tr>



                        	 </table></h2>
                            <?php
                            require "db_connection.php";
                      if(isset($_POST['submit'])) {
                        
                      
                       $name=$_POST["name"];
                       $message=$_POST["message"];
                       $phone=$_POST["phno"];
                       $email=$_POST["email"];
                       $query="INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
                        mysql_query($query);
                        echo mysql_error();
                        mysql_close();
                        }


                          ?>


                        </form>
                    </div>



     </div>

     <div id="bottomwala" style="top:1300px;">
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
    
<img src="images/tree.png" style="position: absolute;top:1210px;left:590px;height:185px;width:140px;">

</body>
</html>