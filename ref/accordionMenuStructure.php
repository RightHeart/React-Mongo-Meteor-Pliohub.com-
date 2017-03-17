<?php
echo "<div class='panel-group' id='accordion'>";
    for($i=0;$i<count($accordionHead);$i++){
        echo "
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <h4 class='panel-title'><a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#collapse$i'>$accordionHead[$i]</a></h4>
          </div>
          <div id='collapse$i' class='panel-collapse collapse".(($accordionActive==$i)?' in':'')."'>
            <div class='panel-body'>$accordionBody[$i]</div>
          </div>
        </div>";
    }
echo "</div>";

unset($accordionHead);
unset($accordionBody);
?>