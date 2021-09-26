<?php
$title = "THE SEAVIEW HOTEL";
include 'header.inc';
?>
  <div id="content">
    <div id="navbar"> <a href="index.php">
      <div class="home"></div>
      </a> <a href="bottleshop.php">
      <div class="bottleshop"></div>
      </a> <a href="garden.php">
      <div class="garden"></div>
      </a> <a href="loft.php">
      <div class="loft"></div>
      </a> <a href="oasis.php">
      <div class="oasis"></div>
      </a> <a href="steak.php">
      <div class="steak"></div>
      </a> <a href="files/functions_NEW.pdf" target="_blank">
      <div class="functions"></div>
      </a> <a href="contact.php">
      <div class="notcontact"></div>
      </a> </div>

    <div id="info">
<form action="mailer.php" method="post" name="function_info" id="function_info" onsubmit="MM_validateForm('firstname','','R','lastname','','R','address','','R','phone','','RisNum','email','','NisEmail','booking','','R','guests','','RisNum','yourmessage','','R');return document.MM_returnValue">
<br />
    <h1>function enquiries</h1>
<br />
    <h3>fill in the following form to request more info:</h3>
    <table width="100%" border="0">
      <tr>
    <td width="50%"><label for="firstname">first name: </label></td>
    <td width="50%"> <input name="firstname" type="text" id="firstname" /></td>
  </tr>
  <tr>
    <td width="50%"><label for="lastname">last name: </label></td>
    <td width="50%"><input name="lastname" type="text" id="lastname" /></td>
  </tr>
  <tr>
    <td width="50%"><label for="address">address: </label></td>
    <td width="50%"> <input name="address" type="text" id="address" /></td>
  </tr>
  <tr>
    <td width="50%"><label for="phone">phone: </label></td>
    <td width="50%"><input name="phone" type="text" id="phone" /></td>
  </tr>
  <tr>
    <td width="50%"><label for="email">email: </label></td>
    <td width="50%"><input name="email" type="text" id="email" /></td>
  </tr>
    <tr>
    <td width="50%"><label for="booking">booking date &amp;time: </label></td>
    <td width="50%"><input name="booking" type="text" id="booking" /></td>
  </tr>
  <tr>
    <td width="50%"><label for="guests">number of guests: </label></td>
    <td width="50%"><input name="guests" type="text" id="guests" /></td>
  </tr>
  <tr>
    <td width="50%">brief description:</td>
    <td width="50%"><textarea name="yourmessage" cols="15" rows="2" id="yourmessage"></textarea></td>
  </tr>
  <tr>
<td width="50%"></td>
  <td width="50%"><input type="submit" value="Send" /><input type="reset" /></td>
  </tr>
</table>
   </form>
   <br />
<br />
   <table><tr><td> <a href="steak.php" target="_self"><img src="images/steakhouseLogo.gif" alt="SteakHouse" width="203" height="50" border="0"></a> <a href="loftbar.php"></a><a href="loft.php" target="_self"><img src="images/loftLogo.gif" alt="The Loft Bar" width="119" height="50" border="0"></a><a href="bottleshop.php" target="_self"><img src="images/Celebrations_Logo.gif" alt="Cellarbrations" width="238" height="53" border="0"></a> <a href="oasis.php" target="_self"><img src="images/OasisGLogo.gif" alt="Oasis Gaming" width="73" height="50" border="0"></a>  </td></tr></table> 
    </div>
<div id="events"><img src="images/events_bar.gif" alt="events" width="261" height="31" border="0"><br />
         <a href="#" target="_top"><img src="images/shave_mini.gif" alt="shave for a cure" width="260" height="110" border="0"></a> <a href="#" target="_top"><img src="images/SEA086---TGIF-POSTER_web.gif" alt="THANK GOD IT'S FRIDAY!!!" width="260" height="110" border="0"></a><a href="#" target="_top"><img src="images/SEA080---I-LOVE-SUNDAES_web.gif" alt="I LOVE SUNDAES" width="260" height="110" border="0"> </a>    </div>

      </div>
</div>

<?php include 'footer.inc'; ?>
