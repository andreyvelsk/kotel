var $status;
var $btnpump = $("#btnpump");
var $btnten = $('#btnten');
var $camera = $('.camera_img');

updateStatus();
setInterval(function(){
    updateStatus() // this will run after every 5 seconds
}, 5000);


function updateStatus(){
$.get( "pumpstatus.php", function( data ) {
	$status = data;

	if($status==false){
            $btnpump.addClass("btn-danger");
            $btnpump.removeClass('btn-success');
            $btnpump.text("Насос выключен");
        }
        if($status==true){

            $btnpump.addClass("btn-success");
            $btnpump.removeClass('btn-danger');
            $btnpump.text("Насос включен");
        }

	});

//updateCam();
}


function updateCam() {
	//$camera.html("<img class ='camera' src='cam.jpg'></img>");
}

$btnpump.click(function () {

	if($status==1){
		
		$.get("pumpoff.php", function( data ) {

			if(data==52){

				$btnpump.toggleClass("btn-danger btn-success");
				$btnpump.text("Насос выключен");
			}

			});
	}
	if($status==0){

		$.get( "pumpon.php", function( data ) {

			if(data==51){
				$btnpump.toggleClass("btn-danger btn-success");
				$btnpump.text("Насос включен");
			}

			});
	}

	$status = !$status;

});

$btnten.click(function () {	
	
});
