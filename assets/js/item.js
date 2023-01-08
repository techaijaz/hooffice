$(document).ready(function (){

	$('.itemtypesingle').click(function(){
		if($(this).val()=='0'){
			$('.allitems').hide();
		}else{
			$('.allitems').show();
		}
	});

	table = $('#itemsTable').DataTable({
	    processing: true,
	    serverSide: true,
	    responcive:true,
	    autoWidth:true,
	    order: [[0, 'desc']],
	    'ajax': {
	    	url:base_url+'item/getAllItem',
	    	type:'POST'
	    },
	    columns: [
	       // {data: 'id', name: 'id'},
	        {data: 'item_image', name: 'item_image'},
	        {data: 'name', name: 'name'},
	        {data: 'sku', name: 'sku'},
	        {data: 'catagory', name: 'catagory'},
	        {data: 'action', name: 'action', orderable:false, searchable:false}
	    ],
	    "columnDefs": [ /* {
		    "targets": 0,
		    "className": 'dt-center',
		    "width": "5%",
			}, */{
		    "targets": 0,
		    "width": "5%",
			},{
		    "targets": 1,
		    "width": "30%",
			},{
		    "targets": 2,
		    "width": "12%",
			},{
		    "targets": 3,
		    "width": "20%",
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


	$("#itemimage").on('change',async function(e){
		e.preventDefault();
		var formData = new FormData();
		formData.append('itemimage', $('#itemimage')[0].files[0]);

  		$.ajax({
	        type: 'post',
	        url: base_url+'item/uploadItemImage',
	        processData: false,
	        contentType: false,
	        data: formData,
	        success: function (response) {
	        	if(response.indexOf('~')===-1){
	        		$("#fileImage").val(response)
	        	}else{
	        		alert(response.split('~')[1])
	        		$("#fileImage").val('')
	        	}
	        	
	        },
	        error: function (err) {
	            console.log(err);
	        }
	    });
	});



	$("#addNewItemForm").submit( function(e){
		e.preventDefault();

		var validationArray= new Array();
		validationArray.push("req,itemname");
		validationArray.push("req,itemunit");
		validationArray.push("req,itemcostprice");

		var type = $("input[name='itemtypegroup']:checked").val();
		if(type=="1"){
			validationArray.push("req,mulsltitems");
			validationArray.push("grpItemCount,mulsltitems");
		}

		var formData = new FormData($('#addNewItemForm')[0]);
		//console.log($("#mulsltitems").val().length)
		if(!validateData(validationArray)){
			return false;
		}else{
			$.ajax({
		        type: 'post',
		        url: base_url+'item/addNewItem',
		        processData: false,
		        contentType: false,
		        data: formData,
		        success: function (response) {
		        	if(response=='success'){
		        		setTostrMessage('suc','Success','Data save sussessfully.');
		        		document.getElementById("addNewItemForm").reset();
		        		refreshSelect();
		        	}else{
		        		$("#itemFormErr").show();
		        		$("#itemFormErrText").html(response);
		        	}
		        },
		        error: function (err) {
		            console.log(err);
		        }
		    });
		}
	});



});


	