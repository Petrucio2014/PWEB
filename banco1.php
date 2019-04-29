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

		function categoria(int $id, string $categoria){
			$this->id = $id;
			$this->categoria = $categoria;
		}
	}

	class produto{
		private int $id;
		private int $id_categoria;
		private string $produto;
		private string $descricao;
		private string $imagem_produto;
		private float $preco;
		private int $quantidade;

		function produto(int $id,int $id_categoria,string $produto,string $descricao,string $imagem_produto,string $preco,string $quantidade){
			$this->id = $id;
			$this->id_categoria = $id_categoria;
			$this->produto = $produto;
			$this->descricao = $descricao;
			$this->imagem_produto = $imagem_produto;
			$this->preco = $preco;
			$this->quantidade = $quantidade;
		}

	}

	class pedidoitens{
		private int $id;
		private int $id_produto;
		private int $id_pedido;
		private string $produto;
		private int $quantidade;
		private float $valor;
		private float $total;

		function pedidoitens(int $id,int $id_produto,int $id_pedido,string $produto,int $quantidade,float $valor,float $total)
		{
			$this->id = $id;
			$this->id_categoria = $id_categoria;
			$this->produto = $produto;
			$this->descricao = $descricao;
			$this->imagem_produto = $imagem_produto;
			$this->preco = $preco;
			$this->quantidade = $quantidade;	
		}
	}

	class pedido{
		private int $id;
		private string $cpf_cliente;
		private $momento = new DateTime();//da uma olhadinha aqui depois
		private string $situacao;

		function pedido(int $id, string $cpf_cliente, $momento, string $situacao){
			$this->id = $id;
			$this->cpf_cliente = $cpf_cliente;
			$this->momento = $momento;
			$this->situacao = $situacao;
		}
	}

	class usuario{
		private string $cpf;
		private int $id_endereco;
		private string $nome;
		private string $e_mail;
		private string $nome_usuario;
		private string $senha;
		private boolean $admin;

		function usuario(string $cpf,int $id_endereco,string $nome,string $e_mail,string $nome_usuario,string $senha,boolean $admin)
		{
			$this->cpf = $cpf;
			$this->id_endereco = $id_endereco;
			$this->nome = $nome;
			$this->e_mail = $e_amil;
			$this->nome_usuario = $nome_usuario;
			$this->senha = $senha;
			$this->admin = $admin;
		}

	}

	class endereco{
		private int $id;
		private int $id_bairro;

		function endereco(int $id,int $id_bairro){
			$this->id = $id;
			$this->id_bairro = $id_bairro;
		}
	}

	class bairro{
		private int $id;
		private int $id_cidade;
		private string $bairro;

		function bairro($id, $id_cidade, $bairro)
		{
			$this->id = $id;
			$this->id_cidade = $id_cidade;
			$this->id_bairro = $id_bairro;
		}
	}

	class cidade{
		private int $id;
		private int $id_estado;
		private string $cidade;

		function cidade($id, $id_estado, $cidade){
			$this->id = $id;
			$this->id_estado = $id_estado;
			$this->cidade = $cidade;

		}
	}





?>