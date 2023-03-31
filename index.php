<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="UTF-8">
    <title>Описание сайта </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание">
    <meta name="keywords" content="ключевые слова ">
  

</head>

<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Функции</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Ценообразование</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
          <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Войти</button>
          <button type="button" class="btn btn-warning">Зарегистрироваться</button>
        </div>
      </div>
    </div>
  </header>

<?php
include('nav.php')
?>

<div class="container">


</div>     

























<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Главная</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Функции</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Цены</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Ответы</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">О нас</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Компания</p>
  </footer>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
