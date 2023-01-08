$(document).ready(function(){

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