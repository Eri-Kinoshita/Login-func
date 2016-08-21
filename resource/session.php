<?php
	session_start();
	// $mysqli = new mysqli('localhost', 'root', 'root');
	//セッションにセットされていたらログイン済み
	// if(isset($_SESSION["username"]))
	//   $status = "logged_in";
	// else if(!empty($_POST["username"]) && !empty($_POST["password"])){
	//   //ユーザ名、パスワードが一致する行を探す
	//   $password = md5($_POST["password"] . $salt);
	//   $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
	//   $stmt->bind_param('ss', $_POST["username"], $password);
	//   $stmt->execute();

	//   //結果を保存
	//   $stmt->store_result();
	//   //結果の行数が1だったら成功
	//   if($stmt->num_rows == 1){
	//     $status = "ok";
	//     //セッションにユーザ名を保存
	//     $_SESSION["username"] = $_POST["username"];
	//   }else
	//     $status = "failed";
?>