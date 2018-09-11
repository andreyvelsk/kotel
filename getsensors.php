<?php

$json = file_get_contents('getjson.php');
$result = json_decode($json, true);

			echo "<div class='row'>";
               for ($i=0; $i < count($result); $i++) {
                   ?>
                     <div class="col-sm-6">
                       <div class="card">
                         <div class="card-header bg-info text-white">
                           <?php
                           echo $result[$i]['name'];
                           ?>
                         </div>
                         <div class="card-body">
                           <h1>
                           <?php
                           echo $result[$i]['value'];
                           ?>
                           </h1>
                         </div>
                         <div class="card-footer">
                           <?php
                           echo $result[$i]['vdatetime'];
                           ?>
                         </div>
                       </div>
                     </div>
                   <?php
             
               }

               echo "</div>";


?>