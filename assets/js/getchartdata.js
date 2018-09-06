getData(90);

function getData(inter) {
	var json;
    $.ajax({
        type: "POST",
        url: "getchartdata.php",
        data: {
        	interval: inter
        },
        dataType: 'json',
        success: function(data) {
        	setDataChart(data);
        },
        error: function(request, status, errorT) {
             alert('error func');
        }
    });
}

function setDataChart(data){

	var value = [];
	var vdatetime = [];
	for(var i in data){
		value.push(data[i].value);
		vdatetime.push(data[i].vdatetime);
	}
		

	var config = {
		type: 'line',

		data: {
    labels: vdatetime,
    datasets: [{
        label: 'Температура подачи',
        fill: false,
        data: value,
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)'
        ],
        borderWidth: 2,
        pointRadius: 0,
		hoverRadius: 50
    }]
}
	};

	setChart(config);
}

function setChart(config){
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myLine = new Chart(ctx, config);
};