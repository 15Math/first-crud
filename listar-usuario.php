<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql);
    $qt = $res->num_rows;

    if($qt > 0){
        print "<table class='table table-hover table-striped'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data De Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                   <button class='btn btn-dark mr-1' onclick=\"location.href='?page=editar&id=".$row->id."'\">Editar</button>
                   <button class='btn btn-danger' onclick=\"location.href='?page=salvar&acao=excluir&id=".$row->id."'\">Excluir</button> 
                   </td>";
            print "</tr>";
    
        }
        
        print "</table>";
    }else{
        print "<h2>Sem Usuários no momento :(</h2>";
    }
?>