<?php
 session_start();

  if(isset($_SESSION['email']) ){
      $e = $_SESSION['email'];
      $b = $_SESSION['name'];     
  }



?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php echo $e ?>
                    <?php echo $b ?>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
