<?php
 
 	header("content-type: text/html;charset=utf8");
	 $localHost="localhost";
	 $usuario="root";
	 $senhaBanco="usbw";
	 $banco="doe_sangue";

	 $conn= mysqli_connect($localHost,$usuario,$senhaBanco,$banco);
	 

	 if (mysqli_connect_errno())#número do erro
	 {
	 	echo " Falha na conexão com o servido MySQL:".mysqli_connect_error();#o texto do erro
	 }
	 
	  $conn->set_charset("utf8");

?>