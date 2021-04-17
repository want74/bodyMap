<?php 
	include 'connect.php';
    $query = mysqli_query($connect,"SELECT * FROM users ");
	$row=$query->fetch_assoc();

    if (!empty($_POST['mail']) && !empty($_POST['pass'])) {
		if ($_POST['mail'] == $row['mail']) {
		  echo "К большому сожалению такая почта уже занята";
		}
		else{
            $query2 = mysqli_query($connect, "INSERT INTO users ( mail, pass ) VALUES ('". $_POST['mail'] . "','". $_POST['pass'] . "')");
            header("Location: auth.php?query=".$_POST['muscle']);
		}	
	}
	else {
		echo "Проверте всё ли вы написали правильно?";
        echo $_POST['mail'] ." ". $_POST['pass'];
	}
 ?>
 <meta charset="utf-8">