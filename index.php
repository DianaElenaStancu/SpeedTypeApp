<?php
 require 'get_random.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
  <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
  <title> Cât de repede tastezi?</title>
</head>
<body>
  <div class="timer" id="timer"></div>
  <div class="container">
    <div class="text-display" id="textDisplay"><?php echo $result->text; ?></div>
    <textarea id="textInput" class="text-input" autofocus></textarea>
    <a onClick="window.location.reload();" class="btn btn-lg btn-default btn-outline-secondary pull-right " > <i class="fa fa-refresh"></i> Refresh </a>
  </div>

  <div class="modal fade" id="statsModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="statsModalTitle">Statistici</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p> Felicitări! Mai jos sunt rezultatele tale: </p>
                  <p>Cuvinte total: <span id='total_words'></span></p>
                  <p>Cuvinte punctate: <span id='correct_words'></span></p>
                  <p>Greșeli: <span id='mistakes'></span></p>
                  <p>Timp: <span id='final_time'></span></p>
                  <p>Viteză: <span id='speed'></span> cuvinte pe minut</p>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal" value = "Refresh">Închide</button>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
