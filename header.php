<?php 
if(!isset($_SESSION))
{
 session_start();
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel='shortcut icon' type='image/x-icon' href="/images/Logo.png" />	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Hacking Na Pratica Lab</title>
	<link rel="stylesheet" href="/style.css" type="text/css" charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
</head>

<body>
<div id="container" >

     <div id="Menu">
		<ul id="menu-bar" style="margin-left: auto ;  margin-right: auto ;" >
			<li class="current"><a href="/">Home</a></li>
			
			<li><a href="#">Vulnerability</a>
				<ul><li><a href="#">A1- Injection</a>
					<ul>
					<li><a href="#">Html Injection</a>
						<ul>
						  <li><a href="/vulnerability/html/htmli_get.php">HTML Injection - (get)</a></li>
						  <li><a href="/vulnerability/html/htmli_post.php">HTML Injection -  (post)</a></li>
						  <li><a href="/vulnerability/sqli/UserInfo.php?id=1">HTML Injection - Reflected (URL)</a></li>
						  <li><a href="/vulnerability/sqli/blindsqli.php?id=1">HTML Injection - Stored (Blog)</a></li>
						
					</ul>
						</li>
						<li><a href="#">XML Injection</a>
						<ul>
						  <li><a href="/vulnerability/ForumPosts.php?id=1">XML/XPath Injection (Login Form)</a></li>
						  <li><a href="/login.php">XML/XPath Injection (Search)</a></li>
						
					</ul>
						</li>
																	
					<li><a href="#">SQL Injection</a>
						<ul>
						  <li><a href="/vulnerability/ForumPosts.php?id=1">Sql Injection 1</a></li>
						  <li><a href="/login.php">Authentication Bypass</a></li>
						  <li><a href="/vulnerability/sqli/UserInfo.php?id=1">Blind SQLi 1</a></li>
						  <li><a href="/vulnerability/sqli/blindsqli.php?id=1">Blind SQLi 2</a></li>
						
					</ul>
						</li>
							
					<li>
						<a href="/vulnerability/cmd/cmd.php">Command Injection </a>
						</li>
							<li><a href="#">PHP Code Injection</a>
							<ul>
							<li><a href="/vulnerability/phpinjection/challenge1.php?data=Hello">Challenge 1</a>	</li>
							<li><a href="/vulnerability/phpinjection/challenge2.php?data=Hello">Challenge 2</a>	</li>
							</ul>
						</li>
<li><a href="#">PHP Object Injection</a>
 <ul>
<?php

$a=array("Java","C","Perl");
$a1=array("Assembly","C","Perl");
$s=serialize($a);
$s1=serialize($a1);
?>
<a href='/vulnerability/injection/obj.php?array=<?php echo $s; ?>'>Challenge 1</a></li>
<li><a href='/vulnerability/injection/obj1.php?array=<?php echo $s1; ?>'>Challenge 2</a></li>
</ul>
</li>
						<li><a href="/vulnerability/rfi/RFI.php?file=news.php">Remote File Inclusion</a></li>
						<li>
						<a href="/vulnerability/ssi/ssi.php">Server Side Includes(SSI) Injection</a>						
					</li>
						</ul>
					</li>
					<li><a href="#">A2- Broken Auth.</a>
				             <ul>
					       <li><a href="#">CAPTCHA Bypassing</a>
					 	 <ul>
							<li> <a href="/vulnerability/xss/xss1.php">CAPTCHA Bypassing</a></li>
					       	 </ul>
					       </li>
						<li><a href="/vulnerability/xss/postxss.php">POST Based</a></li>
						<li><a href="/vulnerability/xss/postxss.php">Deface xss</a></li>
						 <li><a href="/vulnerability/xss/dom.php">DOM based</a></li>
						<li><a href="#">HTTP Referer</a>
							<ul>
							<li><a href="/vulnerability/xss/xss-referer2.php">Challenge 1</a></li>
							<li><a href="/vulnerability/xss/xss-referer2.php">Challenge 2</a></li>
							</ul>

						</li>
						<li><a href="/vulnerability/xss/xss-user-agent.php">User Agent Header</a></li>
					       <li><a href="#">Flash Based</a>
						 <ul>
							<li><a href="/vulnerability/xss/flash/xss1.swf?vuln=/btslab">Challenge 1</a></li>
						 	<li><a href="/vulnerability/xss/flash/exss.php">Challenge 2</a></li>
						 </ul>
						<li><a href="/vulnerability/forum.php">Stored XSS(Persistent)</a></li>
				  	    </ul>
						
					</li>					
			   	       <li><a href="#">A3- Cross Site Scripting</a>
				             <ul>
					       <li><a href="#">Reflected(GET)</a>
					 	 <ul>
							<li> <a href="/vulnerability/xss/xss1.php">Challenge 1</a></li>
							<li> <a href="/vulnerability/xss/xss2.php">Challenge 2</a></li>
							<li> <a href="/vulnerability/xss/xss3.php">Challenge 3</a></li>
							<li> <a href="/vulnerability/xss/xss4.php">Challenge 4</a></li>
					       	 </ul>
					       </li>
						<li><a href="/vulnerability/xss/postxss.php">POST Based</a></li>
						<li><a href="/vulnerability/xss/postxss.php">Deface xss</a></li>
						 <li><a href="/vulnerability/xss/dom.php">DOM based</a></li>
						<li><a href="#">HTTP Referer</a>
							<ul>
							<li><a href="/vulnerability/xss/xss-referer2.php">Challenge 1</a></li>
							<li><a href="/vulnerability/xss/xss-referer2.php">Challenge 2</a></li>
							</ul>

						</li>
						<li><a href="/vulnerability/xss/xss-user-agent.php">User Agent Header</a></li>
					       <li><a href="#">Flash Based</a>
						 <ul>
							<li><a href="/vulnerability/xss/flash/xss1.swf?vuln=/btslab">Challenge 1</a></li>
						 	<li><a href="/vulnerability/xss/flash/exss.php">Challenge 2</a></li>
						 </ul>
						<li><a href="/vulnerability/forum.php">Stored XSS(Persistent)</a></li>
				  	    </ul>
						
					</li>
					<li><a href="#">A4-Insecure Direct Object References</a>
					<ul>
						<li><a href="/myprofile.php?id=<?php if(isset($_SESSION['userid'])){ echo $_SESSION['userid'];} ?>" title="Make sure you have logged in ">Viewing Details</a>
						</li>
						<li><a href="/vulnerability/csrf/change-email.php" title="Make sure you have logged in ">Modifying email ID</a>
						</li>
						<li><a href="/vulnerability/dor/download.php?file=doc1.pdf">Download Document</a>
						</li>
					</ul>
					</li>
					<li><a href="#">A5-Security Misconfiguration</a>
						<ul>
							<li><a href="/setup.php">Setup Page not removed</a></li>		
							
							</ul>
					</li>
					<li>
					<a href="/admin/adminlogin.php">A7- Missing Function Level Access Control</a>
					</li>
					<li><a href="#">A8- CSRF</a>
						<ul>
							<li><a href="/vulnerability/csrf/changeinfo.php">CSRF 1: Change Info</a></li>
							<li><a href="/vulnerability/csrf/change-email.php">CSRF 2: Change Email</a></li>
						</ul>
					</li>
					<li><a href="#">A10. Unvalidated Redirect & Forward..</a>
						<ul>
							<li><a href="/vulnerability/url/open.php?u=http://www.breakthesecurity.com">Open Redirect</a>
							</li>
							<li><a href="/vulnerability/url/forward.php?u=index.php">Open Forward</a>
							</li>
						</ul>
					</li>
					<li><a href="#">File Inclusion</a>
						<ul>
						<li><a href="/vulnerability/lfi/LFI.php?file=news.php">Local File Inclusion</a></li>
						
						</ul>
					</li>
				
					
					<li><a href="#">More..</a>
						<ul>
							<li>
						<a href="/vulnerability/ssrf/ssrf.php">SSRF</a>
					</li>
						<li>
						<a href="/vulnerability/clickjacking/cj.php">Clickjacking</a>
					</li>
							<li>
						<a href="/vulnerability/upload.php">Unrestricted File Upload</a>
					</li>
						
				
						</ul>
					</li>
				
				</ul></li>
			<li><a href="/vulnerability/forum.php">Forum</a></li>
				
			<?php if(!isset($_SESSION['isLoggedIn'])) { 
				echo "<li><a href='/login.php'>LogIn</a></li><li><a href='/register.php'>Register</a></li>";
				}
				else
				{
					echo "<li><a href='/logout.php'>LogOut</a></li>";
			    } 
			?>
			<li><a href="/contact.php">Contact</a></li>
		</ul>
	</div>

	<div id="Main-Container">
	<br/>
	<div id="logo">

	<h1> A Legiao The Hacker Security</h1>
	<h2>[ Vuln APP WEB ]</h2>
</div>
<br/>
	
		
		<div id="Main">
		
