<h1>Editar Usuário</h1>
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];  
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id?>">

    <div class="mb-3 w-50">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome?>">
    </div>
    <div class="mb-3 w-50">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email?>">
    </div>
    <div class="mb-3 w-50">
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" class="form-control" value="<?php print $row->data_nasc?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>