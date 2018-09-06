function getData() {
				var json;
			    $.ajax({
			        type: "POST",
			        url: "getchartdata.php",
			        data: '',
			        dataType: 'json',
			        success: function(data) {
			            json = data;
			            //console.log(json);
			        },
			        error: function(request, status, errorT) {
			             alert('error func');
			        }
			    });

			}