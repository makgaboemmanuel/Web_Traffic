<form action="#" method="post" >   

<?php 

	/*	testing variables 	*/
	$uservar = "pepe moleane";
	$passvar = "htcmonolo";
	
	/*	validate the passwords and usernames here 	*/
	if(	isset( $_POST['butAdLog']))
	{
		if( ($_POST['txtUName'] == $uservar ) && ($_POST['txtUPass'] == $passvar )  )
		{		
			echo "<meta http-equiv='refresh' content='0;url=gallery.html' >";			
		}
	}
	
		/*	database variables 	*/
	
	$dbhost = "";
	$dbusername = "";
	$dbpasswd = "";
	$dbname = "";
 
	$dbconn = mysqli_connect($dbhost ,$dbusername ,$dbpasswd,  $dbname );
	if( mysqli_connect_error() )
	{
		echo "</br> There Was A Connection Error";
	}

	else 
	{
			/*	validate the passwords and usernames here 	*/
		if(	!empty($_POST['txtUName'] ) and !empty($_POST['txtUPass'] ) )
		{
			$adusernvar = $_POST['txtUName'] ; //"romanpeal" ;
			$adpassvar = $_POST['txtUPass'] ;//; "2525write"
				
			$mque ="select adusername, adpassword from admins where adusername = '$adusernvar' and adpassword = '$adpassvar' ";
 			
			$myquery = mysqli_query($dbconn, $mque); 	 
 		 
			$countrows = mysqli_num_rows( $myquery ); 	 
 	 	  	
			if( $countrows  > 0  ) 
			{
				echo "<meta http-equiv='refresh' content='0;url=adminchoose.php' >";
			} 
	
			else
			{
				echo "<br> <strong> Your Username / Password Are Wrong<strong>";
			} 		
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Administrator Control </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/admincont/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/bookpage/axQuery.js"></script>
    <script src="resources/scripts/bookpage/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/bookpage/annotation.js"></script>
    <script src="resources/scripts/bookpage/axQuery.std.js"></script>
    <script src="resources/scripts/bookpage/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/bookpage/events.js"></script>
    <script src="resources/scripts/bookpage/recording.js"></script>
    <script src="resources/scripts/bookpage/action.js"></script>
    <script src="resources/scripts/bookpage/expr.js"></script>
    <script src="resources/scripts/bookpage/geometry.js"></script>
    <script src="resources/scripts/bookpage/flyout.js"></script>
    <script src="resources/scripts/bookpage/ie.js"></script>
    <script src="resources/scripts/bookpage/model.js"></script>
    <script src="resources/scripts/bookpage/repeater.js"></script>
    <script src="resources/scripts/bookpage/sto.js"></script>
    <script src="resources/scripts/bookpage/utils.temp.js"></script>
    <script src="resources/scripts/bookpage/variables.js"></script>
    <script src="resources/scripts/bookpage/drag.js"></script>
    <script src="resources/scripts/bookpage/move.js"></script>
    <script src="resources/scripts/bookpage/visibility.js"></script>
    <script src="resources/scripts/bookpage/style.js"></script>
    <script src="resources/scripts/bookpage/adaptive.js"></script>
    <script src="resources/scripts/bookpage/tree.js"></script>
    <script src="resources/scripts/bookpage/init.temp.js"></script>
    <script src="files/admincont/data.js"></script>
    <script src="resources/scripts/bookpage/legacy.js"></script>
    <script src="resources/scripts/bookpage/viewer.js"></script>
    <script src="resources/scripts/bookpage/math.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

        
      <div id="u280" class="ax_default box_2">
        <div id="u280_div" class=""></div>
        <!--    () -->
        <div id="u281" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u282" class="ax_default btnregister">
        <div id="u282_div" class=""></div>
        <!--    () -->
        <button id="u282_div" name="butAdLog" class="text" style="visibility: visible;">
          <p><span>Admin Log-In</span></p>
        </button>
      </div>

        
      <div id="u284" class="ax_default heading_3">
        <div id="u284_div" class=""></div>
        <!--    () -->
        <div id="u285" class="text" style="visibility: visible;">
          <p><span>Welcome To The System Admin</span></p><p><span>&nbsp;Please Log-In Here:</span></p>
        </div>
      </div>

        
      <div id="u286" class="ax_default heading_2">
        <div id="u286_div" class=""></div>
        <!--    () -->
        <div id="u287" class="text" style="visibility: visible;">
          <p><span>Username:</span></p>
        </div>
      </div>

        
      <div id="u288" class="ax_default heading_2">
        <div id="u288_div" class=""></div>
        <!--    () -->
        <div id="u289" class="text" style="visibility: visible;">
          <p><span>Password:</span></p>
        </div>
      </div>

        
      <div id="u290" class="ax_default box_3">
        <div id="u290_div" class=""></div>
        <!--    () -->
        <div id="u291" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- scroll_content (Rectangle) -->
      <div id="u292" class="ax_default paragraph" data-label="scroll_content">
        <div id="u292_div" class=""></div>
        <!--    () -->
        <div id="u293" class="text" style="visibility: visible;">
          <p><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> Please click the </span>
		  <span style="font-family:'Arial Bold Italic', 'Arial';font-style:italic;text-decoration:underline;"> 
		  <a href="help.html"> HELP </a> </span><span style="font-family:'Arial Bold', 'Arial';font-style:normal;"> link above if you encounter any problems </span></p>
        </div>
      </div>

      <!--    (Image) -->
      <div id="u294" class="ax_default image">
        <img id="u294_img" class="img " src="images/index/u4.jpg"/>
        <!--    () -->
        <div id="u295" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u296" class="ax_default label">
        <div id="u296_div" class=""></div>
        <!--    () -->
        <div id="u297" class="text" style="visibility: visible;">
          <p><span>Follow Us Social Media:</span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u298" class="ax_default icon">
        <img id="u298_img" class="img " src="images/index/u15.png"/>
        <!--    () -->
        <div id="u299" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u300" class="ax_default icon">
        <img id="u300_img" class="img " src="images/index/u17.png"/>
        <!--    () -->
        <div id="u301" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u302" class="ax_default icon">
        <img id="u302_img" class="img " src="images/index/u19.png"/>
        <!--    () -->
        <div id="u303" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u304" class="ax_default icon">
        <img id="u304_img" class="img " src="images/index/u21.png"/>
        <!--    () -->
        <div id="u305" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u306" class="ax_default flow_shape">
        <div id="u306_div" class=""></div>
        <!--    () -->
        <div id="u307" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u308" class="ax_default flow_shape">
        <div id="u308_div" class=""></div>
        <!--    () -->
        <div id="u309" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u310" class="ax_default btnregister">
        <div id="u310_div" class=""></div>
        <!--    () -->
        <button id="u310_div" onClick="location.href='ulogin.php'" type="button" style="visibility: visible;">
          <p><span>User Log-In</span></p>
        </button>
      </div>

      <!--    (Image) -->
      <div id="u312" class="ax_default image">
        <img id="u312_img" class="img " src="images/index/u4.jpg"/>
        <!--    () -->
        <div id="u313" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u314" class="ax_default btnregister">
        <div id="u314_div" class=""></div>
        <!--    () -->
        <button id="u314_div" onClick="location.href='uregister.php'" type="button" style="visibility: visible;">
          <p><span>User Register</span></p>
        </button>
      </div>

        
      <div id="u316" class="ax_default btnregister">
        <div id="u316_div" class=""></div>
        <!--    () -->
        <button id="u316_div" onClick="location.href='admincont.php'" type="button" style="visibility: visible;">
          <p><span>Admin Control</span></p>
        </button>
      </div>

      <!--    (Droplist) -->
      <div id="u318" class="ax_default droplist">
        <select id="u318_input">
          <option selected value="User Log-In">User Log-In</option>
          <option value="User Register">User Register</option>
          <option value="Gallery">Gallery</option>
          <option value="Admin Control">Admin Control</option>
          <option value="Help">Help</option>
        </select>
      </div>

        
      <div id="u319" class="ax_default label">
        <div id="u319_div" class=""></div>
        <!--    () -->
        <div id="u320" class="text" style="visibility: visible;">
          <p><span>Choose Item Menu List </span></p>
        </div>
      </div>

        
      <div id="u321" class="ax_default label">
        <div id="u321_div" class=""></div>
        <!--    () -->
        <div id="u322" class="text" style="visibility: visible;">
          <p><span>Follow Us Social Media:</span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u323" class="ax_default icon">
        <img id="u323_img" class="img " src="images/index/u15.png"/>
        <!--    () -->
        <div id="u324" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u325" class="ax_default icon">
        <img id="u325_img" class="img " src="images/index/u17.png"/>
        <!--    () -->
        <div id="u326" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u327" class="ax_default icon">
        <img id="u327_img" class="img " src="images/index/u19.png"/>
        <!--    () -->
        <div id="u328" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!--    (Shape) -->
      <div id="u329" class="ax_default icon">
        <img id="u329_img" class="img " src="images/index/u21.png"/>
        <!--    () -->
        <div id="u330" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

        
      <div id="u331" class="ax_default btnregister">
        <div id="u331_div" class=""></div>
        <!--    () -->
        <button id="u331_div" onClick="location.href='about_us.html'" type="button" style="visibility: visible;">
          <p><span>About Us</span></p>
        </button>
      </div>

        
      <div id="u333" class="ax_default btnregister">
        <div id="u333_div" class=""></div>
        <!--    () -->
        <button id="u333_div" onClick="location.href='help.html'" type="button" style="visibility: visible;">
          <p><span>Help</span></p>
        </button>
      </div>

        
      <div id="u335" class="ax_default btnregister">
        <div id="u335_div" class=""></div>
        <!--    () -->
        <button id="u335_div" onClick="location.href='gallery.html'" type="button" style="visibility: visible;">
          <p><span>Gallery</span></p>
        </button>
      </div>

      <!--    (Text Field) -->
      <div id="u337" class="ax_default text_field">
        <input id="u337_input" required aria-required='true' type="text" name="txtUName" value="People Of The Sun"/>
      </div>

      <!--    (Text Field) -->
      <div id="u338" class="ax_default text_field">
        <input id="u338_input" required aria-required='true' type="password"name="txtUPass" value="All Eyes"/>
      </div>
    </div>
	
	<!-- Unnamed (Rectangle) -->
      <div id="u399" class="ax_default link_button">
        <img id="u399_img" class="img " src="images/ulogin/u109.png"/>
        <!-- Unnamed () -->
        <div id="u400" class="text">
          <p><span><a  style = 'text-decoration: none;' href="index.html" name="alink" >Click To Homepage</a></span></p>
        </div>
      </div>
	  
  </body>
</html>

</form>