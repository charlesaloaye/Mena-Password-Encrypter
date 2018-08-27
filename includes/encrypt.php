<?php
define('PASSWORD', $_POST["password"]);

if(isset($_POST["encrypt"]))
{
	if(!empty(PASSWORD))
	{
		define("SHA1",sha1(PASSWORD));
		define("MD5",md5(PASSWORD));
		echo SHA1."<br>";
		echo  "Md5: ". MD5;
	}
}

?>