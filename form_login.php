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


<div class="container">
    <div class="card" >
        <div class="card-body" >
    <form class="mb-2" >
    <!-- Email input -->
    <div class="form-outline mb-2 text-dark">
        <input type="email" id="form1Example1" class="form-control" />
        <label class="form-label" for="form1Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-2 text-dark">
        <input type="password" id="form1Example2" class="form-control" />
        <label class="form-label" for="form1Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-2 text-dark">
        <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
            <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        </div>

        <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>
    </div>  </div>
</div>
<?php
include 'footer.php';
?>