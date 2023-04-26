<?php 
$your_email ='info@evolutiondatacentres.com';// <<=== update to your email address
$fname="Evolution Website";	

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$enquiry = $_POST['enquiry'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email)||empty($enquiry))
	{
		$errors .= "\n Please complete all required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="Website enquiry";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "  
		<html><head>
		<style>
		.text {
		font-family: Arial, Verdana, Helvetica, sans-serif;
		font-size: 12px;
		}
		</style>

</head>

		<body>
		<table width='586' border='0' cellspacing='0' cellpadding='2' class=text>
          <tr> 
            <td><p>You have an enquiry from your website</p>
                    <p>
					<strong>Name :</strong> ".$_POST["name"]."<br>
					<strong>Email :</strong> ".$_POST["email"]."<br>
					<strong>Nature of enquiry:</strong> ".$_POST["enquiry"]."<br>
					<br>					
					</p>
			</td>
          </tr>
        </table></body></html>";
		
			
		$headers =  "MIME-Version: 1.0\n" .
					"Content-Type:text/html;\n" .
					"From: $fname \n";
		
		mail($to, $subject, $body, $headers);
		
		header('Location: thanks.php');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
$spa = $_POST["spam"];

if (!empty($spa) && !($spa == "4" || strtolower($spa) == "four")) {
    echo "You failed the bot test!";
    exit ();
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Body Fresh Fitness | Contact</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="format-detection" content="telephone=no" />

<!---------------------------------------SCRIPT INCLUDES -------------------------------->
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/layouts-feb21.css" rel="stylesheet" type="text/css">

<!---------------------------------------SCRIPT INCLUDES END---------------------------->
<style type="text/css">
body {background:none transparent;
}
.err{color:#c50629; font-size: 13px; line-height: 13px; margin: 0px;}
.hideSpamForm{display:none}
@media only screen and (max-width: 660px) {	
}
</style>
</head>


<body>
<h4>Contact us</h4>
<div id="contactWrapper">
  <?php
if(!empty($errors)){
echo "<span class='err'>".nl2br($errors)."</span>";
}
?>

<div id='contact_form_errorloc' class='err'></div>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="contact_form" id="contact_form">  
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="enquiryform">
          <tr>
            <td height="25" align="left" valign="top" style="color: #FFF; font-size: 13px;">Please complete all fields</td>
          </tr>
          
           <tr>
             <td width="150" height="30" align="left" valign="top" class="lightBlue2">
<input name="name" type="text" class="formfield" placeholder='Name'/>
</td>
           </tr>

         <tr>
            <td width="150" height="30" align="left" valign="top" class="lightBlue2"><input name="email" type="text" class="formfield"  placeholder='Email'/></td>
          </tr>

         <tr>
            <td width="150" height="30" align="left" valign="top" class="lightBlue2"><textarea name="enquiry" rows="5" class="
            formfield" placeholder='Nature of enquiry'></textarea></td>
          </tr>
          
        <tr>
            <td valign="bottom">
<div class="hideSpamForm">
    <label for="spam">What is two plus two?</label>
    <input name="spam" type="text" size="4" id="spam">
</div>
 </td></tr></table>   
    <input name='submit' type="submit" value="SUBMIT" class="subBut"/> 
</form>


</div>


</body>
</html>