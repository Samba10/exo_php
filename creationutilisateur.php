<?php 
	if (isset($_POST['valider'])) {
		extract($_POST);
		$fin= "fin \r\n";
		function Genere_Password($size)
  {
	   $characters = array(0, 1, 2, 3, 4, 5, 6, "a", "b", "c", "d");
	   $password='';
	   for($i=0;$i<$size;$i++)

	  {
		$password .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
	   
	   }
	     return $password;
  }
    $mon_mot_de_passe = Genere_Password(8);
    echo $mon_mot_de_passe;
    $f = "fichiers.txt";

    $monfichier = fopen($f, "a");
    $existe=false;
    while($line=fgets($monfichier)!==false)
    	 {
    		    $info=explode(";", $line);
    		    $info[0]=$login;
    		   }
    		    $existe=true;
    		      if ($existe){
                      echo"login esiste deja";
    		      }
    		      else
    		      	fseek($monfichier, 2);
    	
 	fputs($monfichier,$login.';'.$choix.';'.$mon_mot_de_passe.';'.$fin);


    fclose($monfichier);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
		<tr>
			<td>Login</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>Profil</td>
			<td><select name="choix">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="valider" value="CREER">
			</td>
		</tr>
	</table>
	<a href="../pagedaccueil.php">Se Connecter</a>
	</form>
</body>
</html>