<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet13;charset=utf8','root');
		if (isset($_GET["id"])){
    		$id = $_GET['id'];
    		$bdd->query("DELETE FROM projets WHERE id = $id");
    		echo "<script> alert('Le post à bien été supprimé.')</script>";
            echo '<script language="Javascript">
            document.location.replace("admin.php");
            </script>';
		}
		?>