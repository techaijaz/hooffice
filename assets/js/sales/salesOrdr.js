var salesOrderItemArry=[];
var salesOrderData=[];
$(document).ready(function(){
	$('body').on('click',function(){
		salesOrderData=[];
		createArrayForSalesOrder();
	});


	table = $('#customerTable').DataTable({
	    processing: true,
	    serverSide: true,
	    responcive:true,
	    autoWidth:true,
	    order: [[0, 'desc']],
	    'ajax': {
	    	url:base_url+'sales/customer/getAllCustomer',
	    	type:'POST'
	    },
	    columns: [
	        {data: 'id', name: 'id'},
	        {data: 'name', name: 'name'},
	        {data: 'mobile', name: 'mobile'},
	        {data: 'email', name: 'email'},
	        {data: 'action', name: 'action', orderable:false, searchable:false}
	    ],
	    "columnDefs": [ {
		    "targets": 0,
		    "className": 'dt-center',
		    "width": "5%",
			},{
		    "targets": 1,
		    "width": "30%",
			},{
		    "targets": 2,
		    "width": "12%",
			},{
		    "targets": 3,
		    "width": "12%",
			},
		    {
		    "targets": 4,
		    "className": 'dt-center',
		    "width": "20%",
		    "render": function(data, type, row, meta){
		    	return `<button class="btn btn-success btn-sm rounded-0 editUnit" type="button" 
		    	data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
		    	id="${row.id}">
		    	<i class="fa fa-edit"></i>
		    	</button>
		    	<button class="btn btn-danger btn-sm rounded-0 deleteUnit" type="button" 
		    	data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" 
		    	id="${row.id}"><i class="fa fa-trash"></i></button>`;
		    }
			} ]
	   });


	$("#addNewCustForm").submit( function(e){
		e.preventDefault();

		var validationArray= new Array();
		validationArray.push("req,firstname");
		validationArray.push("req,lastname");
		validationArray.push("req,mobile");

		var type = $("input[name='custType']:checked").val();

		var formData = new FormData($('#addNewCustForm')[0]);
		//console.log($("#mulsltitems").val().length)
		if(!validateData(validationArray)){
			return false;
		}else{
			$.ajax({
		        type: 'post',
		        url: base_url+'sales/customer/addNewCustomer',
		        processData: false,
		        contentType: false,
		        data: formData,
		        success: function (response) {
		        	if(response=='success'){
		        		setTostrMessage('suc','Success','Data save sussessfully.');
		        		document.getElementById("addNewCustForm").reset();
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

function addNewSalesItem(ele){
	var itemId=$(ele).val();
	if(itemId){
		$.ajax({
	        type: 'post',
	        url: base_url+'sales/salesOrder/addNewSalesItem',
	       // processData: false,
	       // contentType: false,
	        data: {
	        	itemId:itemId
	        },
	        success: function (response) {
	        	if(response){
	        		if(createArrayForSalesOrderItem(itemId)){
		        		$('#salesOrderTable').append(response);
		        		createArrayForSalesOrder();
	        		}
	        	}
	        	$(ele).val('');
	        	refreshSelect();
	        },
	        error: function (err) {
	            console.log(err);
	        }
	    });
	}
}

function removeSalseOrderItem(itemId){
	$('#salseOrderItem_'+itemId).remove();
	salesOrderItemArry.splice(salesOrderItemArry.indexOf(itemId),1);
	createArrayForSalesOrder();
}

function createArrayForSalesOrderItem(itemId){
	if(!checkDuplicateValueInArr(itemId,salesOrderItemArry)){
		salesOrderItemArry.push(itemId);
		return true;
	}else{
		setTostrMessage('warn','Wornig','This item already added.');
		return false;
	}
}

function createArrayForSalesOrder(){
	var subTotal = 0.00;
	$('.salseOrderItemBlock').each(function(){
		var itemId=$(this).attr('value');
		var quantity = $('#salseOrderItemQuantity_'+itemId).val() || 0;
		var salePrice = $('#salseOrderItemSalesPrice_'+itemId).val() || 0;
		
		var itemObj = {
				itemId:itemId,
				quantity:Math.floor(quantity),
				salePrice:parseFloat(salePrice).toFixed(2)
			}
			salesOrderData.push(itemObj);

			var itemTotal = setTotaAndSubTotal(itemId);
			subTotal+=parseFloat(itemTotal);
	});
	subTotal=subTotal.toFixed(2);
	$("#salseOrderSubtotal").text(subTotal);
	if(parseFloat(subTotal)>0){
		var discount = $('#salseOrderDiscount').val() || 0;
	}else{
		var discount = '0.00';
		$('#salseOrderDiscount').val('0.00');
	}
	
	discount = parseFloat(discount);
	discount = discount.toFixed(2);

	$("#salseOrderDiscountText").text(discount);

	var total = parseFloat(subTotal) - parseFloat(discount);
	total = total.toFixed(2);
	$("#salseOrderTotal").text(total);
	//$("#amountpaid").val(total);
}

function setTotaAndSubTotal(itemId){
	var quantity = $('#salseOrderItemQuantity_'+itemId).val() || 0;
	var salesPrice = $('#salseOrderItemSalesPrice_'+itemId).val() || 0;

	var total = parseFloat(Math.floor(quantity)) * parseFloat(salesPrice);
		totalText = total.toFixed(2);
	$('#salseOrderItemTotal_'+itemId).text(totalText);
	return total;
}

function saveNewSalseOrder(type){
	var validationArray = new Array();

	validationArray.push('req,salesOrderNumber');
	validationArray.push('req,salesOrderDate');
	validationArray.push('req,salesOrderCustomer');

	var amountPaid = $('#amountpaid').val();


	if(salesOrderItemArry.length<1){
		setTostrMessage('warn','Wornig','Please select atleast one item.');
		return false;
	}

	if(validateData(validationArray)){
		$.ajax({
	        type: 'post',
	        url: base_url+'sales/salesOrder/saveNewSalseOrder',
	        data: {
	        	sONumber:$('#salesOrderNumber').val(),
	        	sODate:$('#salesOrderDate').val(),
	        	sOCustomer:$('#salesOrderCustomer').val(),
	        	sODiscount:$('#salseOrderDiscount').val(),
	        	sOType:type,
	        	sOAmountPaid:amountPaid,
	        	sOData:JSON.stringify(salesOrderData)
	        },
	        success: function (response) {
	        	//location.reload();
	        },
	        error: function (err) {
	            console.log(err);
	        }
	    });
	}
}