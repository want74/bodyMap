<?php 
session_start();
include 'connect.php';
$query = mysqli_query($connect,"SELECT * FROM users where mail = '".$_POST['mail']."'");
$row=$query->fetch_assoc();
if (!empty($_POST['mail']&& $_POST['mail']== $row['mail']) ) {
	if ($_POST['pass'] == $row['pass']) {
        $_SESSION['session_username']= $row['id'];
		header('Location: '.$_POST['muscle'].'.php');
        echo $_SESSION['session_username'];
	}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

	
}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

?>    
<meta charset="utf-8">