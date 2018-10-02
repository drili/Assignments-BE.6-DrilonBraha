<?php
      session_start();
      require_once 'includes/inc-televisionInterface.php';
      require_once 'includes/inc-television.php';
      require_once 'includes/inc-televisionV1.php';
      require_once 'includes/inc-televisionRC.php';
?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Index</title>

            <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
            <div class="MVC">
                  <?php
                        $model = new Television();          // init the model
                        $rc = new TelevisionRC($model);     // init a controller
                        $view1 = new TelevisionV1($model);  // init a view

                        if (isset($_POST)) {                // did we receive data?
                              $rc->action($_POST);            // the controller deals with it
                        }
                        printf("%s\n", $view1->osd());      // use the view, display state
                        printf("%s\n", $view1->remote());   // use the view, display form
                  ?>
            </div>
      </body>
</html>
