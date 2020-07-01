<?php 
if(!isset($_SESSION))
{
session_start();
}
 
include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 

?>

Welcome to the Admin Panel<br/><br/>
<ul>
<li><b><a href='manageusers.php'>Manage Users </a></b></li>
<li><b><a href='MessageList.php'> Messages </a></b></li>
<li><b><a href='/logout.php'>Logout</a></b></li>
</ul>
<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php');  ?>
