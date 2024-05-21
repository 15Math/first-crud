<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <div class="mb-3 w-50">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3 w-50">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3 w-50">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3 w-50">
        <label for="data">Data de Nascimento</label>
        <input type="date" name="data" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>