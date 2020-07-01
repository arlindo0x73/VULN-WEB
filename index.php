<?php include('header.php'); 
if(isset($_SESSION['isLoggedIn'])) { 
echo "<b>Welcome ".$_SESSION['username']." !</b>";
}
?>
<br/><br/>
			<b>ETHICAL HACKING NA PRATICA</b> <br>
			Este e um Laboratorio Open-Source do Curso Ethical Hacking na pratica, que aborda multiplas vuln's de uma Aplicacoes Web.   

<br/><br/>
Esta aplicacao esta presente para estudar multiplas vulns de Aplicacoes web como serao apresentadas: 
<ul>
<li>Injection (sql,php,html etc..)</li>
<li>XSS(includes Flash Based xss)</li>
<li>CSRF</li>
<li>Clickjacking</li>
<li>SSRF</li>
<li>File Inclusion</li>
<li> Code Execution</li>
<li>Insecure Direct Object Reference</li>
<li>Unrestricted File Upload vulnerability</li>
<li>Open URL Redirection</li>
<li>Server Side Includes(SSI) Injection</li>
</ul>
<br/>


<?php include('footer.php'); ?>
