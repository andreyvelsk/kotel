<?php
include 'layouts/header.html';
?>
	<div class="container">
		<button type="button" id="btn3h" class="btn btn-lg">1H</button>
		<button type="button" id="btn12h" class="btn btn-lg">12H</button>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js""></script>
		<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

		<script src="assets/js/getchartdata.js"></script>

		<div class="canva">
			<canvas id="myChart"></canvas>
		</div>
	</div>
</body>
</html>