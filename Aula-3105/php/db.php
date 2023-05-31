<?php
	function conectaBD(){
		$con=new PDO("mysql:host=localhost;dbname=web","root","aluno");
		return $con;
	}

	//create a function to insert a new user in database parameters are the name, email, password and city

	function insereUsuario($nome,$email,$senha,$cidade){
		try{
			$con = conectaBD();
			$sql = "INSERT INTO usuario (nome,login,senha,cidade) VALUES (?,?,?,?)";
			$stm=$con->prepare($sql);
			$stm->binParam(1,$nome);
			$stm->binParam(2,$email);
			$stm->binParam(3,$senha);
			$stm->binParam(4,$cidade);
			$stm->execute();
			 
		}catch (PDOEXception $e){
			echo 'ERROR: ' . $e->getMessage();
		}
	}
	function resuperaUsuario($id){
		$con=conectaBD();
		$sql = "SELECT * FROM usuario WHERE id=?";
			$stm=$con->prepare($sql);
			$stm->binParam(1,$id);
			$stm->execute();
			$result=$stm->fetchALL(PDO::FETCH_ASSOC);
			return $result;
	}
	function recuperaALL(){
		$con=conectaBD();
		$sql = "SELECT * FROM usuario";
			$stm=$con->prepare($sql);
			$stm->execute();
			$result=$stm->fetchALL(PDO::FETCH_ASSOC);
			return $result;
	}


?>

