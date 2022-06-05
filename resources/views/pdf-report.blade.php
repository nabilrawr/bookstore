@extends('layouts.receipt-header')
<!DOCTYPE html>
<html lang="en">
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-sm-12">
	  	<div class="panel panel-default invoice" id="invoice">
		  <div class="panel-body">
		    <div class="row">

				{{-- <div class="col-sm-6 top-right">
						<h3 class="marginright">Reference No: 1234578</h3>
						<span class="marginright">Created At: 14 April 2014</span>
			    </div> --}}

			</div>
			<hr>
			<div class="row">

				{{-- <div class="col-xs-4 from">
					<p class="lead marginbottom">Borrower Details</p>
					<p>Name: razaman </p>
					<p>Phone: 415-767-3600</p>
					<p>Email: contact@dynofy.com</p>
                    <p>Address: Persiaran Multimedia, Cyberjaya, 63000 Cyberjaya, Selangor</p>
				</div> --}}

                	<div class="col-xs-4 from">
						<img src="./images/logo.png" alt="Company logo" style="width: 100%; " />
				</div>

			    <div class="col-xs-8 text-right payment-details">
					<p class="lead marginbottom payment-info">Business Report</p>
					<p>Created At: 14 April 2014</p>
			    </div>

			</div>

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">No</th>
			          <th class="text-center"style="width:10%">Borrower</th>
			          <th class="text-center" style="width:10%">Book Title</th>
                      <th class="text-center" style="width:10%">Author</th>
			          <th class="text-center" style="width:10%">Rent Duration</th>
                      <th class="text-center" style="width:10%">Staff In charge</th>
                      <th class="text-center" style="width:10%">Status</th>
			          <th class="text-center" style="width:10%">Fees</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-center">1</td>
			          <td class="text-center">Razaman Bin Munawir</td>
			          <td class="text-center">Buku anak kancil</td>
			          <td class="text-center">Keith</td>
                      <td class="text-center">7 days</td>
                      <td class="text-center">Muzafar</td>
                      <td class="text-center">Pending</td>
			          <td class="text-center">$0</td>
			        </tr>
			        <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">Razaman Bin Munawir</td>
                        <td class="text-center">Buku anak kancil</td>
                        <td class="text-center">Keith</td>
                        <td class="text-center">7 days</td>
                        <td class="text-center">Muzafar</td>
                        <td class="text-center">Pending</td>
                        <td class="text-center">$0</td>
			        </tr>
			       </tbody>
			    </table>

			</div>



			<div class="col-xs-6 text-right pull-right invoice-total">
			          <p>Total : $0 </p>
			</div>
			</div>

		  </div>
		</div>
	</div>
</div>
</div>
</body>
</html>
