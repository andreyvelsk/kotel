<?php
include 'layouts/header.html';
$json = file_get_contents('http://andreyvelsk.ru:4680/getjson.php');
$result = json_decode($json, true);
?>


<div class="container-custom">
  <div class="content">
    <div class="row">

      <div class="col-xl-6">
        <div class="row">

          <?php 

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
          ?>      

        </div>
      </div>
      <div class="col-xl-6">
          <div class="camera_img">
            <img class ="camera" src="cam.jpg"></img>
          </div>
      </div>
      
    </div>
    <!--end of row-->
  </div>
  <div class="footer">
    <button type="button" id="btnpump" class="btn btn-lg">...</button>
    <button type="button" id="btnten" class="btn btn-success btn-lg">Тэн включен</button>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

