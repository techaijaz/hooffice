$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	$('.chzn-select').select2({
		placeholder: "Select option",
		allowClear: true
	});

	$('#openAddUnitModal,#openAddBrandModal,#openAddCatagoryModal').on('hidden.bs.modal', function () {
		$(this).find('form').trigger('reset');
	});

	$('.numeric-input').on('focusout',function(){
		var thisVal = $(this).val() || 0;
			thisVal = parseFloat(thisVal).toFixed(2);
			$(this).val(thisVal);
	});

	$("#addCatagory").submit(function(event){
		event.preventDefault();
		var form = $("#addCatagory")[0];
		var formData = new FormData(form);
		console.log(formData);
		$.ajax({
			type: "POST",
			url: base_url+'catagory/addCaagory',
			processData: false,
			data:{
				formData:formData
			},
			success: function(msg){
				// if(msg=='exist'){
				// 	Swal.fire('Catagory already exist, please enter new catagory');
				// }else{
				// 	$('#addCatagory').modal('hide');
				// 	Swal.fire({
				// 		icon: 'success',
				// 		title:'Success...',
				// 		text: 'Catagory add successfully!'
				// 	});
				// }
				
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				// Swal.fire({
				// 	icon: 'error',
				// 	title: 'Error...',
				// 	text: errorThrown
				// });
			}
		});
	});

	$('#openAddSubCatModal').on('show.bs.modal', function () {
		$.ajax({
			type: "POST",
			url: base_url+'catagory/getAllCategory',
			data:{},
			success: function(responce){
				$("#catagoryInModal").html(responce);
				refreshSelect();
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setTostrMessage('err','',errorThrown);
			}
		});
	});
});

function setTostrMessage(type,title,msg){
	if(type=="suc"){
		toastr.success(msg, title);
	}else if(type=="warn"){
		toastr.warning(msg, title);
	}else if(type=="err"){
		toastr.error(msg, title);
	}
}

function refreshSelect(refId){
	if(typeof refId != "undefined"){
		$("#"+refId).trigger("change");
	}else{
		$(".chzn-select").trigger("change");
	}
}

function addBrand(){
	var validationArray= new Array();
	validationArray.push("req,brand");
	if(!validateData(validationArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'common/CommonCtrl/addBrand',
			data:{
				brand:$('#brand').val()
			},
			success: function(responce){

				var responceObj = JSON.parse(responce);
				console.log(responceObj)

				if(responceObj.msg=='exist'){
					setTostrMessage('warn','Wornig','This Brand already added.');
					return false;
				}else if(responceObj.msg=='success'){
					setTostrMessage('suc','Success','Brand added successfully.');
					$('#openAddBrandModal').modal('toggle');
						var optData = responceObj.data;

						var newOption = new Option(optData.text, optData.id, false, true);
						$('#itembrand').append(newOption).trigger('change');

						//$('#itembrand').html(responceObj.data);
						//refreshSelect();
					
					return false;
				}else if(responceObj.msg=='fail'){
					setTostrMessage('err','Failed','Somthig went wrong , please contact to Administrator.');
					return false;
				}

			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {

			}
		});
	}
}

function addUnit(){
	var validationArray= new Array();
	validationArray.push("req,unit");
	if(!validateData(validationArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'common/CommonCtrl/addUnit',
			data:{
				unit:$('#unit').val()
			},
			success: function(responce){

				var responceObj = JSON.parse(responce);
				console.log(responceObj)

				if(responceObj.msg=='exist'){
					setTostrMessage('warn','Wornig','This unit already added.');
					return false;
				}else if(responceObj.msg=='success'){
					setTostrMessage('suc','Success','Unit added successfully.');
					$('#openAddUnitModal').modal('toggle');
					var optData = responceObj.data;

					var newOption = new Option(optData.text, optData.id, false, true);
					$('#itemunit').append(newOption).trigger('change');
					
					return false;
				}else if(responceObj.msg=='fail'){
					setTostrMessage('err','Failed','Somthig went wrong , please contact to Administrator.');
					return false;
				}

			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setTostrMessage('err','',errorThrown);
			}
		});
	}
}

function addCetegory(){
	var validationArray= new Array();
	validationArray.push("req,category");
	if(!validateData(validationArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'catagory/addCaagory',
			data:{
				category:$('#category').val()
			},
			success: function(responce){

				var responceObj = JSON.parse(responce);
				console.log(responceObj)

				if(responceObj.msg=='exist'){
					setTostrMessage('warn','Wornig','This category already added.');
					return false;
				}else if(responceObj.msg=='success'){
					setTostrMessage('suc','Success','Category added successfully.');
					$('#openAddCatagoryModal').modal('toggle');
					var optData = responceObj.data;

					var newOption = new Option(optData.text, optData.id, false, true);
					$('#itemcatagory').append(newOption).trigger('change');
					$('#catagoryInModal').append(newOption).trigger('change');
					
					return false;
				}else if(responceObj.msg=='fail'){
					setTostrMessage('err','Failed','Somthig went wrong , please contact to Administrator.');
					return false;
				}

			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setTostrMessage('err','',errorThrown);
			}
		});
	}
}

function addSubCetegory(){
	var validationArray= new Array();
	validationArray.push("req,catagoryInModal");
	validationArray.push("req,subcategory");
	if(!validateData(validationArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'catagory/addSubCaagory',
			data:{
				catagoryInModal:$('#catagoryInModal').val(),
				subcategory:$('#subcategory').val()
			},
			success: function(responce){

				var responceObj = JSON.parse(responce);
				console.log(responceObj)

				if(responceObj.msg=='exist'){
					setTostrMessage('warn','Wornig','This subcategory already added.');
					return false;
				}else if(responceObj.msg=='success'){
					setTostrMessage('suc','Success','Subcategory added successfully.');
					$('#openAddSubCatModal').modal('toggle');
					var optData = responceObj.data;

					var newOption = new Option(optData.text, optData.id, false, true);
					$('#itemsubcatagory').append(newOption).trigger('change');
					
					return false;
				}else if(responceObj.msg=='fail'){
					setTostrMessage('err','Failed','Somthig went wrong , please contact to Administrator.');
					return false;
				}

			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setTostrMessage('err','',errorThrown);
			}
		});
	}
}

function getSubCategory(obj){
	if(obj.value){
		$.ajax({
			type: "POST",
			url: base_url+'catagory/getSubCategory',
			data:{
				category:obj.value
			},
			success: function(responce){
				$("#itemsubcatagory").html(responce);
				refreshSelect('itemsubcatagory');
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setTostrMessage('err','',errorThrown);
			}
		});
	}
}


function checkDuplicateValueInArr(val,dataArr) {
	for(var i=0;i<dataArr.length;i++){
		if(val==dataArr[i]){
			return true;
		}
	}
	return false;
}