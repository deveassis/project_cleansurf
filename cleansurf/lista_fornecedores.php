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
        <h1 id="titulo" >Lista de Fornecedores</h1>
        </div>
        <div class="table-responsive">
        <div class="filter">
            <div class="row">
                <div class="col">
                     <label for="Nome">Nome</label>
                    <input type="text" name="nome" class="form-control form-control-sm">
                </div>
                <div class="col">
                    <label for=Cnpj">CNPJ</label>
                <input type="text" name="cnpj" class="form-control form-control-sm">
                </div>
            </div>
                 <button type="submit" id="enviar" name="pesquisar" class="btn btn-primary">Pesquisar</button>
        </div>
        <div class="body-background" >
            <div class="table-responsive">
             <table class="table table-sm"  id="lista_fornecedor">
                <thead>
                    <tr>
                        <th class="th-title" scope="col">Nome</th>
                        <th class="th-title" scope="col">CNPJ</th>
                        <th class="th-title" scope="col">Cidade</th>
                        <th class="d-none d-sm-table-cell th-title" scope="col">Estado</th>
                        <th class="th-title"  scope="col">UF</th>
                        <th class="th-title" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Helena e Tatiane Limpeza ME</td>
                       <td>40.102.878/0001-52</td>
                       <td>São Paulo</td>
                       <td class="d-none d-sm-table-cell">Sâo Paulo</td>
                       <td  scope="col">SP</td>
                       <td><button type="button" class="btn btn-warning">Alterar</button></td>
                    </tr> 
                    <tr>
                        <td>Nair e Francisca Fotografias ME</td>
                        <td>06.101.580/0001-90</td>
                        <td>Botucatu</td>
                        <td class="d-none d-sm-table-cell" scope="col">São Paulo</td>
                        <td  scope="col">SP</td>
                        <td><button type="button" class="btn btn-warning">Alterar</button></td>
                    </tr>
                    <tr>
                        <td>Priscila e Raul Eletrônica Ltda</td>
                        <td>13.951.646/0001-04</td>
                        <td>Sorocaba</td>
                        <td class="d-none d-sm-table-cell" scope="col">São Paulo</td>
                        <td  scope="col">SP</td>
                        <td><button type="button" class="btn btn-warning">Alterar</button></td>
                    </tr>
                </tbody>
             </table>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script></body>
</html>