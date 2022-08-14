<?php
//id19418651_formulario_db' id19418651_formulario_db_user


//variaveis
$username = $_POST['username'];
$email = $_POST['email'];
$endereço = $_POST['endereço'];

//conexão com o banco de dados
$conexao = new mysqli('localhost', 'id19418651_formulario_db_user','id19418651_formulario_db')

if($conexao-connect_error){
    die('Conexao falha :' .$conexao->connect_error);
}
else{
$sql = $conexao->prepare("insert into api_registros (nome,email,endereço) values(?,?,?)";)
$sql->bind_param("sssssi",$username,$email,$endereço);
$sql->execute();
echo "registro bem sucedido";
$sql->close();
$conexao->close();

}


?>
