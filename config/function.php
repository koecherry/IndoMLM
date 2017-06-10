<?php

function error( $error )
{
echo "<body background=\"exptextb.jpg\">\n";
echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
echo "<div align=\"center\">\n";
echo "<center>\n";
echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#FF0000\" width=\"533\" id=\"AutoNumber1\">\n";
echo " <tr>\n";
echo " <td bgcolor=\"#FFFFFF\">\n";
echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
echo " <font face=\"Arial\" size=\"5\">Error !!!</font></b></p>\n";
echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\"><b>\n";
echo " <font color=\"#FF0000\">$error</font></b></p>\n";
echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
echo " <p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
echo " <a href=\"javascript:history.back()\">back</a></td>\n";
echo " </tr>\n";
echo "</table>\n";
echo "</center>\n";
echo "</div>\n";

//echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">&nbsp;</p>\n";
//echo "<p align=\"center\"><font face=\"Arial\" color=\"#FF0000\"size=\"4\">Error : $error</font></center>\n";
//echo "<p align=\"center\"><a href=\"javascript:history.back()\"><b>Back</b></a></p>\n";
//mysqli_close();
exit;
}

function verifyUser()
{
//global $ADMIN_EMAIL;
//session_start();
//global $username, $password;
if($_SESSION[username] && $_SESSION[password])
{

$result=mysqli_query("SELECT username, passwd FROM member WHERE username='$_SESSION[$username]' AND BINARY passwd='$_SESSION[$password]'") or error("Login failed, please contact <a href=\"mailto:$ADMIN_EMAIL\">adminstrator</a>");
if(mysqli_num_rows($result) == 1)
return true;
}
return false;
}

function verifyAdmin()
{
//session_start();
global $ADMIN_NAME, $ADMIN_PASS;
if($_SESSION['admin_Name'] && $_SESSION['admin_Passwd'])
{
//dbConnect();
//$result=mysqli_query("SELECT user_admin, passwd_admin FROM admin WHERE user_admin='$_SESSION[admin_Name]' AND BINARY passwd_admin='$_SESSION[admin_Passwd]'") or error("Ops .... Login failed !!!!!!");
//if(mysqli_num_rows($result) == 1)
//return true;

if($_SESSION['admin_Name'] == $ADMIN_NAME && $_SESSION['admin_Passwd'] == $ADMIN_PASS)
return true;
}
return false;
}


function sentMail( $from, $to, $subject, $body )
{
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=ios-8859-1\r\n";
$headers .= "From: {$from}\r\n";
$result = @mail( $to, $subject, $body, $headers );
if( $result ) return true;
else return false;
}

function displayHeader( $title = "" )
{
global $ADVT_NAME, $PAGE_BG_COLOR, $PAGE_BG_IMAGE;
echo "\n<html>\n";
echo "<head>\n";
echo "<title>$title</title>\n";
echo "<link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">\n";
echo "</head>\n\n";
echo "<body bgcolor=\"$PAGE_BG_COLOR\" background=\"$PAGE_BG_IMAGE\">\n\n";
echo "<center><h2>$ADVT_NAME</h2></center>\n";
}

function displayFooter()
{
echo "<p align=\"center\"><a href=\"http://www.digidzine.com\" target=\"_blank\"><img src=\"./powered_klik.jpg\" border=\"0\" alt=\"Powered by digiDzine.com\"></a></p>\n";
echo "<p align=\"center\"><small>Copyright (c)  <a href=\"http://www.digidzine.com\">digidzine.com</a></small></p>\n\n";
echo "</body>\n";
echo "</html>\n";
exit;
}

function display_children($parent, $level) {
$count = 0;
$result = mysql_query('SELECT user_id FROM sponsers '.'WHERE parent_id="'.$parent.'"');
while ($row = mysql_fetch_array($result))
{
$var = str_repeat(' ',$level).$row['user_id']."\n";

//echo $var  after remove comment check tree

// i call function in while loop until count all user_id

$count += 1 +$this->display_children($row['user_id'], $level+1);

}
return $count; // it will return all user_id count under parent_id
}
?>