<?php
include 'header.php';

?>


<form action="" method="post" class="justify-content-center align-items-center " >
    <div class="row mb-md-5 mt-md-4 pb-5">
        <label class="col-sm-2 text-center col-form-label">Usuario</label>
        <div class="col-sm-10 text-center">
            <input class="form-control" type="text" name="usuario" id="usuario">
        </div>
    </div>
    <div class="row mb-3 g-6 text-center">
        <label class="col-sm-2 col-form-label text-center">Senha</label> 
        <div class="col-sm-10 text-center">
            <input class="form-control text-center" type="password" name="password" id="password">
            <input class="btn btn-primary text-center" type="submit" value="Entrar">
            <button class="btn btn-primary text-center" type="submit" value="cadastrar">Cadastrar</button>
        </div>
    </div>
</form>

<?php
include 'footer.php';
?>