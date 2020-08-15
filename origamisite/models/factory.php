<?php 
	class Factory{
	private $servername = "localhost";
	private $username = "root";
	private $password = "rod.rigo123";
	private $dbname= "origamiSite";


	

	public function Conectar(){
		
		// Create connection	
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		#$connection= new PDO('mysql:unix_socket=/tmp/mysql.socket;host=localhost,port=3306;
		#dbname=origamiSite','root','rod.rigo123')

		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 	
		echo "Connected successfully";
		return  $conn;
		
	}

	public function InserirVideo($nome, $descricao, $cod)
	{	
		$sql = "INSERT INTO Video (Nome, descricao, url)
		VALUES (':$nome, '$descricao', '$cod')";
		$this->Open();
		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";}
    	else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
    	$conn->close();
	}		

	public function BuscaVideo(){
		#$conn = new mysqli($servername, $username, $password, $dbname);
		$conexao= $this->Conectar();
		#$sql = "DELETE FROM Video WHERE Nome = 'Padaria'";
		$sql = "SELECT * FROM Video";
		$resultado= $conexao->query($sql);
		$conexao->close();
		return $resultado;
		#if ($resultado->num_rows > 0) {
    	#	echo "New search realize successfully";
    		#while($row = $resultado->fetch_assoc()) {
    		#	echo $row['id']."</p>".$row['Nome']."</p>".$row['Descricao']."</p>".$row['url'];
    		#}
    	#}
    	
      	#else {
    	#	echo "Error: " . $sql . "<br>" . $conn->error;
		#}
    }
		

}//endClassFactory
	

#CREATE TABLE Video( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
# 	 Nome VARCHAR(20) NOT NULL,
#   Descricao TEXT,
#    url VARCHAR(10) NOT NULL);
?>
