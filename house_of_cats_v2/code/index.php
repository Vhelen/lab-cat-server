<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>House of cats v2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body>
    <?php
      if(isset($_GET['search'])){
        $search = $_GET['search'];

        foreach (["flag"," ",";","'",'"',"*"] as $char) {
          if (strpos($search, $char) !== false) {
              die('Attack detected, les chats vous surveillent !');
          }
        }

        $result = shell_exec('file '.$search);
      }
    ?>


    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-secondary">Maison</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="/" method="GET">
            <input name="search" type="search" class="form-control" placeholder="Search for file info..." aria-label="Search">
          </form>
        </div>
      </div>
    </header>
    <main>
      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">House of cats v2</h2>

        <?php
          if($result){
            echo '<h3 class="pb-2">Result</h3>';
            echo '<p class="border-bottom">File info: '.$result.'</p>';
          }
          else{
            if($search){
              echo '<h3 class="pb-2">Resultat de la recherche</h3>';
              echo '<p class="border-bottom">File not found</p>';
            }
          }
        ?>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <?php
            for ($x = 1; $x <= 5; $x++) {
          ?>
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url(<?php echo 'image'.$x.'.png' ?>); background-size:     cover;   background-repeat:   no-repeat; background-position: center center;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h4 class="pt-5 mt-5 mb-4 "><?php echo 'Image n°'.$x ?></h4>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"></svg>
                      <small>House of cats v2</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"></svg>
                      <small><a href="index.php?search=<?php echo 'image'.$x.'.png' ?>">More information on this image</a></small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php  
            }
          ?>
        </div>
      </div>
    </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
