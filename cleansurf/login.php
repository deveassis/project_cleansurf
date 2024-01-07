<!DOCTYPE html>
<html lang="pt-br">
<?php include_once("./head.php")  ?>
<link rel="stylesheet" href="css/login.css">


<body>
    <div class="container">
            <form action="" id="my-form"  class="my-form">
               
                    <div class="logo" >
                        <img src="./LOGO.png" width="150" height="100" >
                    </div>
                    <div>
                    <h1 id="text-login" >Login</h1>
                </div>
                <label for="email" id="lb-email" >Email</label>
                <input type="email" id="email" placeholder="" >
                <label for="password" id="lb-password" >Senha</label>
                <input type="password" id="password" placeholder="">
                <button type="submit" id="btn-login" class="btn-login" >Entrar</button>
                <button type="update" id="btn-reset" >Esqueci senha</button>
                <p id="p-text" >Loja oficial <br> www.cleansurfshop.com.br</p>
            </form>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>