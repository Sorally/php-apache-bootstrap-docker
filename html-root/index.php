<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Modals · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">

    

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">


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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  
  <body>

    <div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
      <div class="modal-dialog" role="document">
        <div class="modal-content rounded-6 shadow">
          <div class="modal-body p-5">
            <h2 class="fw-bold mb-0">What's new</h2>
            <ul class="d-grid gap-4 my-5 list-unstyled">

<?php

    for ($i = 0; $i < 5; $i++) {

?>
  
              <li class="d-flex gap-4">
                <img class="bi text-muted flex-shrink-0" src="/images/lizard.png" width="48" height="48"><use xlink:href="#grid-fill"/></svg>
                <div>
                  <h5 class="mb-0">Grid view <?=$i?></h5>
                  Not into lists? Try the new grid view.
                </div>
              </li>
  
<?php

    }
?>
  
            </ul>
            <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal">Great, thanks!</button>
          </div>
        </div>
      </div>
    </div>
      




    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
