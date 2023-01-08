<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        NOT READY</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                       PRINTED INVOICE</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        PRINTED LABLE</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
   <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        ADDRES MISSING</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        NUMBER MISSING</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-2 col-md-4 mb-1">
        <div class="card border-left-primary shadow h-5 py-2 px-2">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        IN TRANSIT</div>
                </div>
                <div class="col-auto">
                   <div class="mb-0 font-weight-bold text-gray-800">100</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<a href="#" class="btn btn-info btn-icon-split">
	    <span class="text">Pull Order</span>
	</a>
	<a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#myModal">
	    <span class="text">Create Order</span>
	</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Order #</th>
      <th scope="col">Price</th>
      <th scope="col">Order Type</th>
      <th scope="col">Billing Type</th>
      <th scope="col">Status</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Tracking</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>19-12-2022</td>
      <td>17622</td>
      <td>1998.10</td>
      <td>Online</td>
      <td>Ppepaid</td>
      <td>Address Missing</td>
      <td>Aijaz Ahmad</td>
      <td>9971228250</td>
      <td>9865471256987 <i class="fas fa-copy"></i></td>
      <td><a href="#">VIEW | EDIT | HISTORY | CONVERT</a></td>
    </tr>
    <tr>
      <td>19-12-2022</td>
      <td>17622</td>
      <td>1998.10</td>
      <td>Online</td>
      <td>Ppepaid</td>
      <td>Address Missing</td>
      <td>Aijaz Ahmad</td>
      <td>9971228250</td>
      <td>9865471256987 <i class="fas fa-copy"></i></td>
      <td><a href="#">VIEW | EDIT | HISTORY | CONVERT</a></td>
    </tr>
    <tr>
      <td>19-12-2022</td>
      <td>17622</td>
      <td>1998.10</td>
      <td>Online</td>
      <td>Ppepaid</td>
      <td>Address Missing</td>
      <td>Aijaz Ahmad</td>
      <td>9971228250</td>
      <td>9865471256987 <i class="fas fa-copy"></i></td>
      <td><a href="#">VIEW | EDIT | HISTORY | CONVERT</a></td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
	      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
	    </div>
	    <div class="modal-body p-4">
	      <form>
	        <!-- 2 column grid layout with text inputs for the first and last names -->
	        <div class="row mb-4">
	          <div class="col">
	            <div class="form-outline">
		            <label class="form-label" for="form6Example1" style="margin-left: 0px;">First name</label>
		            <input type="text" id="form6Example1" class="form-control">
		            <!-- <div class="form-notch">
		            	<div class="form-notch-leading" style="width: 9px;"></div>
		            	<div class="form-notch-middle" style="width: 68.8px;"></div>
		            	<div class="form-notch-trailing"></div>
		            </div> -->
		        </div>
	          </div>
	          <div class="col">
	            <div class="form-outline">
		              <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
		              <input type="text" id="form6Example2" class="form-control">
		            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div>
			            <div class="form-notch-middle" style="width: 68px;"></div>
			            <div class="form-notch-trailing"></div>
			        </div>
			    </div>
	          </div>
	          <div class="col">
	            <div class="form-outline">
		              <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
		              <input type="text" id="form6Example2" class="form-control">
		            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div>
			            <div class="form-notch-middle" style="width: 68px;"></div>
			            <div class="form-notch-trailing"></div>
			        </div>
			    </div>
	          </div>
	        </div>
			<div class="row mb-4">
	          <div class="col">
	            <div class="form-outline">
		            <label class="form-label" for="form6Example1" style="margin-left: 0px;">First name</label>
		            <input type="text" id="form6Example1" class="form-control">
		            <!-- <div class="form-notch">
		            	<div class="form-notch-leading" style="width: 9px;"></div>
		            	<div class="form-notch-middle" style="width: 68.8px;"></div>
		            	<div class="form-notch-trailing"></div>
		            </div> -->
		        </div>
	          </div>
	          <div class="col">
	            <div class="form-outline">
		              <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
		              <input type="text" id="form6Example2" class="form-control">
		            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div>
			            <div class="form-notch-middle" style="width: 68px;"></div>
			            <div class="form-notch-trailing"></div>
			        </div>
			    </div>
	          </div>
	          <div class="col">
	            <div class="form-outline">
		              <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
		              <input type="text" id="form6Example2" class="form-control">
		            <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div>
			            <div class="form-notch-middle" style="width: 68px;"></div>
			            <div class="form-notch-trailing"></div>
			        </div>
			    </div>
	          </div>
	        </div>


	        <!-- Text input -->
	        <div class="form-outline mb-4">
	          <input type="text" id="form6Example3" class="form-control">
	          <label class="form-label" for="form6Example3" style="margin-left: 0px;">Company name</label>
	        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 97.6px;"></div><div class="form-notch-trailing"></div></div></div>

	        <!-- Text input -->
	        <div class="form-outline mb-4">
	          <input type="text" id="form6Example4" class="form-control">
	          <label class="form-label" for="form6Example4" style="margin-left: 0px;">Address</label>
	        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 55.2px;"></div><div class="form-notch-trailing"></div></div></div>

	        <!-- Email input -->
	        <div class="form-outline mb-4">
	          <input type="email" id="form6Example5" class="form-control">
	          <label class="form-label" for="form6Example5" style="margin-left: 0px;">Email</label>
	        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 40px;"></div><div class="form-notch-trailing"></div></div></div>

	        <!-- Number input -->
	        <div class="form-outline mb-4">
	          <input type="number" id="form6Example6" class="form-control">
	          <label class="form-label" for="form6Example6" style="margin-left: 0px;">Phone</label>
	        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 44px;"></div><div class="form-notch-trailing"></div></div></div>

	        <!-- Message input -->
	        <div class="form-outline mb-4">
	          <textarea class="form-control" id="form6Example7" rows="4"></textarea>
	          <label class="form-label" for="form6Example7" style="margin-left: 0px;">Additional information</label>
	        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 135.2px;"></div><div class="form-notch-trailing"></div></div></div>

	        <!-- Checkbox -->
	        <div class="form-check d-flex justify-content-center mb-4">
	          <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked="">
	          <label class="form-check-label" for="form6Example8"> Create an account? </label>
	        </div>

	        <!-- Submit button -->
	        <button type="submit" class="btn btn-primary btn-block">Place order</button>
	      </form>
	    </div>
	  </div>
	</div>
</div>