<?php 
      
    if(isset($_POST['cad-empresa'])){
        // Define as variáveis com os dados da empresa a ser cadastrada
        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome_empresa'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        

        // Conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "usuario_fael");
        // Verifica se houve algum erro na conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Prepara o comando SQL de inserção
        $sql = "INSERT INTO cadastro_empresas (cnpj, nome, endereco, telefone)
                VALUES ('$cnpj', '$nome', '$endereco', '$telefone');";

        // Executa o comando SQL
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cadastrado com sucesso!');</script>";
            return include("cadastrar_empresa.php");
        } else {
            echo"<script>alert('Erro ao cadastrar empresa!');</script>" . $conn->error;
            return include("cadastrar_empresa.php");
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
?>