<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bothniabladet</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="modalStyles.css"> -->
  <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
  <!-- Inkluderar projektfiler -->
  <?php include 'modal.php'; ?>
  <?php include 'showImages.php'; ?>



  <!-- START of webbpage -->

  <div class="jumbotron jumbotron-fluid">
    <h1 style="background-color:#7ABDFF; color:#FFFFFF; font-family:Courier New, Courier, monospace;"> &nbsp Bothniabladet </h1>

    <div class="navContainer container d-flex justify-content-center">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="./index.php">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./laddaUppBild.php">Ladda Upp Bild</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./orderhantering.php">Orderhantering</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./minaSidor.php">Mina Sidor</a>
        </li>

      </ul>
    </div>

  </div>

  <div class="container">

    <div class="jumbotron">

      <h2> Sök: </h2>

      <div class="row">


        <div class="">

          <form action="">
            <!-- Vid "onkeyup" så körs funktionen showImages med inparamentern = värdet man skrivit -->
            <input type="text" class="txt1" id="txt1" size="50" placeholder="Skriv sökord separerat med mellanslag.." onkeyup="showImages(this.value)">
          </form>

        </div>


        <!-- row ends -->
      </div>

      

      <!-- Jumbotron ends -->
    </div>

    <!-- I denna div så visas bild-resultaten -->
    <div class="row" id="imgSuggestion">

    </div>

    <!-- Container ends -->
  </div>


  <!-- END of webbpage -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>