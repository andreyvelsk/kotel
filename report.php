<?php
include 'layouts/header.html';
?>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js""></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

    <script src="assets/js/getchartdata.js"></script>

	<div class="canva">
   	<canvas id="myChart"></canvas>
   	</div>
<script>
	
		var json = getData();
		console.log(json);

		var config = {
			type: 'line',

			data: {
        labels: [1,1,1,1,1,1,1,1,1,1,1,1,1,1],
        datasets: [{
            label: '# of Votes',
            fill: false,
            data: [12, 19, 3, 5, 2, 3,2,1,1,2,2,8,2,13,9,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1,
            pointRadius: 0,
			hoverRadius: 0
        }]
    },
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
</script>


</body>
</html>