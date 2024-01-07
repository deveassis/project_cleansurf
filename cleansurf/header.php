<!DOCTYPE html>
<html lang="pt-br">
<?php include_once("./head.php")  ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha384-rmbbSM2Ug5kw9BJoqLLsSsQctHAAuBfZWyRcp6Ll9QgHA6sF9vXvogAfA2z7I4bZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-i03Nc7I/Ezjg6K20w0T9a8kfnU4kiopzQ5ZZ+8Gk/Dt2g9nSSr7oCIUgBQjL4jcv" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js/2.11.6/dist/umd/popper.min.js" integrity="sha384-dxWi2qQvGGBo1oPH5Fx5fjcGZntjRkwyKp1CJWxCeCqvA6zUZKcw6kw6Isf6D1E6" crossorigin="anonymous"></script>

<header>
    <nav class="navbar" style="background-color: #FFFFFF;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="./LOGO.png" width="88" height="55">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><ion-icon name="menu-outline"></ion-icon></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./cfornecedores.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="#">Funcionários</a></li>
            <li><a class="dropdown-item" href="#">Produtos</a></li>
            <li><a class="dropdown-item" href="#">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Tipo de Produto</a></li>
            <li><a class="dropdown-item" href="#">Lojas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lista
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="../cleansurf/lista_fornecedores.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="#">Vendas</a></li>
            <li><a class="dropdown-item" href="#">Vendedores</a></li>
            <li><a class="dropdown-item" href="#">Lojas</a></li>
            <li><a class="dropdown-item" href="#">Clientes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Financeiro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Faturamento</a></li>
            <li><a class="dropdown-item" href="#">Custos</a></li>
            <li><a class="dropdown-item" href="#">Pré-fatura</a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estoque
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Devoluções</a></li>
            <li><a class="dropdown-item" href="#">Defeitos</a></li>
            <li><a class="dropdown-item" href="#">Trocas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Promoções
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Lista de Promoções</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav></nav>
</header>
