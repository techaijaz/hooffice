
$(document).ready(function(){
	$('#addNewPayReceviedForm').submit(function(e){
		e.preventDefault();
		var validationArray= new Array();
		var formData = new FormData($('#addNewPayReceviedForm')[0]);
		validationArray.push('req,payReceviedCustomer');
		validationArray.push('req,payRecevieAmount');
		
		if(!validateData(validationArray)){
			return false;
		}else{
			$.ajax({
		        type: 'post',
		        url: base_url+'sales/paymentReceived/addNewPament',
		        processData: false,
		        contentType: false,
		        data: formData,
		        success: function (response) {
		        	if(response=='success'){
		        		setTostrMessage('suc','Success','Data save sussessfully.');
		        		document.getElementById("addNewPayReceviedForm").reset();
		        		refreshSelect();
		        	}else{
		        		$("#customerFormErr").show();
		        		$("#customerFormErrText").html(response);
		        	}
		        },
		        error: function (err) {
		            console.log(err);
		        }
		    });
		}
	});
});

