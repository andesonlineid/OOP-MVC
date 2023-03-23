<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $datas["title"] ?> Page</title>
  <link href=" <?= BASEURL; ?>css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">

</head>

<body>

  <main>

    <nav class="navbar header  navbar-expand-lg  d-flex align-items-center justify-content-between">
      <div class="container-fluid title">
        <a class="navbar-brand" href="<?= BASEURL; ?>">MVC PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
      <div class="navigation collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-link" href="<?= BASEURL; ?>about">About</a>
          <a class="nav-link" href="<?= BASEURL; ?>students">Students</a>


        </div>


      </div>

    </nav>