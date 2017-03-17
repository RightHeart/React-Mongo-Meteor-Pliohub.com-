<?php
    echo "<div class='' style='width:500px;margin:0 auto;'>
              <div class='alert alert-$alertClass alert-dismissable$cssClassAlertMsg'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  $alertMessage
              </div>
    </div>";
unset($cssClassAlertMsg);
?>