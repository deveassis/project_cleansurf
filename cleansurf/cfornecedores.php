<!DOCTYPE html>
<html lang="en">
<head>
    <?php  include_once("./head.php") ?>
    <link rel="stylesheet" href="css/pages.css">
    <title>Home</title>
</head>
<?php include_once("./header.php") ?>
<body>
<div class="container" >
    <div class="top-background">
        <h1 id="titulo" >Cadastro de Fornecedores</h1>
        </div>
        <div class="body-background" >
            <form action="" id="form-fornecedor">
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="cnpj">CNPJ</label>
                        <input type="text" class="form-control form-control-sm"  name="cnpj" id="Cnpj"  >
                    </div>
                    <div class="col">
                        <label class="label-form" for="razao">Razão Social</label>
                        <input type="text" class="form-control form-control-sm" name="razao_social" id="razaoSocial"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label  class="label-form"for="endereco">Endereço</label>
                        <input type="text" class="form-control form-control-sm" name="endereco" id="endereco" >
                    </div>
                    <div class="col">
                        <label class="label-form" for="numero">Número</label>
                        <input type="text" class="form-control form-control-sm" name="numero" id="numero">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="estado">Estado</label>
                        <select class="form-control form-control-sm" aria-label="Default select example">
                        <option selected>Selecione</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-form" for="cidade">Cidade</label>
                        <select name="cidade" id="cidade" class="form-control form-control-sm">
                            <option value="" selected>Selecione</option>
                    </select>
                    </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="uf">UF</label>
                        <select name="uf" id="uf" class="form-control form-control-sm">
                            <option value="">Selecione</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-form" for="cep">CEP</label>
                        <input type="text" class="form-control form-control-sm" name="cep" id="cep">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="ie">IE</label>
                        <input type="text" class="form-control form-control-sm" name="ie" id="ie" placeholder="Inscrição Estadual">
                    </div>
                    <div class="col">
                        <label class="label-form" for="im">IM</label>
                        <input type="text" class="form-control form-control-sm" name="im" id="im" placeholder="Inscrição Municipal">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="telefone">Telefone</label>
                        <input type="text" class="form-control form-control-sm" name="ie" id="telefone">
                    </div>
                    <div class="col">
                        <label class="label-form" for="im">Celular</label>
                        <input type="text" class="form-control form-control-sm" name="celular" id="celular">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="label-form" for="site">Site</label>
                        <input type="site" name="site" class="form-control form-control-sm" id="site">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="enviar" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script></body>
</html>