<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data = $_POST["data"];


            $sql = "INSERT INTO usuarios(nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}',' {$senha}', '{$data}')";

            $res =  $conn->query($sql);
            if($res){
                print "<script>alert('Cadastro realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $data = $_POST["data"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', data_nasc='{$data}' WHERE id=".$_REQUEST["id"];
           
            $res =  $conn->query($sql);
            if($res){
                print "<script>alert('Edição realizada com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id =" . $_REQUEST["id"];
            $res = $conn->query($sql);
            if($res){
                print "<script>alert('Cadastro deletado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel deletar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }