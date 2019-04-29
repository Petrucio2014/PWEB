<?php
	class conexaoDao{
		private string $servidor;
		private string $database;
		private string $senha;
		private string $usuario;
		private $connection;

		function conexaoDao(){
			$this->servidor = "localhost";
			$this->senha = "";
			$this->usuario = "root";
			$this->database = "alencar";
		}

		function conectar(){
			try 
			{
				$this->connection = mysqli_connect($server,$username,$password,$database);
				echo "conectado";	
			} catch (Exception $e) {
				print_r($e)
			}
			
		}

		function desconectar(){
			try 
			{
				msqli_close($this->connection);
				echo "desconectado";	
			} catch (Exception $e) {
				print_r($e)
			}
		}

		function exeSql(String $query){
			$this->conectar();
			try 
			{
				$result = mysqli_query($conexao, $query);
				if($result)
					echo "executado";	
			} catch (Exception $e) {
				print_r($e);
			}
			$this->desconectar();
		}

	}

	class categoria{
		private int $id;
		private string $categoria;

		function categoria($id,$categoria){
			$this->id = $id;
			$this->categoria = $categoria;
		}
	}

	class produto{
		
	}
?>