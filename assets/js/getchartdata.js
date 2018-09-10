$(function(){
	var $btn3h = $("#btn3h");
	var $btn12h = $("#btn12h");

	var request;

	$btn3h.click(function() {

		getData(3);
	});

	$btn12h.click(function() {
		getData(12);
	});

	getData(3);

	function getData(inter) { //интервал в часах

		if (request) {
	        request.abort();
	    }

	    request = $.ajax({
	        type: "POST",
	        url: "getchartdata.php",
	        data: {
	        	interval: inter
	        },
	        dataType: 'json'
	    });

	    request.done(function (response, textStatus, jqXHR){
	        // Log a message to the console
	        setDataChart(response);
	    });

	    request.fail(function (jqXHR, textStatus, errorThrown){
	        // Log the error to the console
	        console.error(
	            "The following error occurred: "+
	            textStatus, errorThrown
	        );
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

});