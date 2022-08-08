<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet"   href="styles.css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
<?php if(isset($_SESSION['logado'])): ?>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/listar-cursos"> Admin </a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/logout"> Sair</a>
        </li>
    </ul>
</nav>
<?php endif; ?>
<div class="container">
    <div class="jumbotron">
        <h1 class="inicio-title"><?php echo $titulo ?></h1>
    </div>

    <style>
        .mr-auto, .mx-auto {
            margin-right: initial !important;
            bottom: 5;
        }
    </style>