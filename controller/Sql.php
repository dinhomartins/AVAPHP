<?php
//criação da classe PDO - CLASSE EXTENDE DA CLASSE PDO. 
	class Sql extends PDO{ 
        //definindo a variável de conexão como private.
		private $conn;  
		
		//conexão automática com o banco de dados após a instanciação (new)
		public function __construct(){
        // acesso a variavel a atribuição da conexão com o banco definindo o nome e senha do banco de dados
			$this->conn = new PDO("mysql:host=localhost;dbname=sistemaAva", "root", "");
        }
        
        // Função que receberá os parametros e deverá fazer um o Bind entre chave e valor
		private function setParams($statement, $parameters = array()){
			foreach ($parameters as $key => $value){
				$this->setParam($statement, $key, $value);
			}
		}
        
        // Função que deverá definar os parametros e fazer o Brin entre chave e valor
		private function setParam($statement, $key, $value){
			$statement->bindParam($key, $value);
		}
		
        //Função que irá execução de comandos passado via querys para o mysql
        //                     query Crua Parametros do tipo array
		public function query($rawQuery, $params = array()){  
			$stmt = $this->conn->prepare($rawQuery); 
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}
        
        // Função que fará um simples select para testar a conexão com o banco
		public function select($rawQuery, $params = array()){   //:array
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function traga()
		{
			$sql = new Sql();

			$resultado = $sql->teste("SELECT * FROM aluno");
			return $resultado;
		}
	}
?>