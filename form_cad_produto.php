<?php 
    // Define as variáveis com os dados do produto a ser cadastrado
    $nome_produto = $_POST['nome-produto'];
    $quantidade = $_POST['quantidade'];
    $data_entrada = $_POST['data-entrada'];
    $valor = $_POST['valor'];
    $cnpj_empresa = $_POST['cnpj'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "usuario_fael");

    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara o comando SQL de inserção
    $sql = "INSERT INTO cadastro_produtos (nome_produto, quantidade, data_entrada, valor, cnpj)
            VALUES ('$nome_produto', '$quantidade', '$data_entrada', '$valor', '$cnpj_empresa')";

    // Executa o comando SQL
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produto cadastrado com sucesso!')</script>;";
        return include("cadastrar_produto.php");
    } else {
        echo "<scrip>alert('Erro ao cadastrar produto: ')</script>" . $conn->error;
        return include("cadastrar_produto.php");
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

?>
