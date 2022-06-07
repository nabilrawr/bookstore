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

{{--				<div class="col-sm-6 top-left">--}}
{{--					<img src="./images/logo.png" alt="Company logo" style="width: 100%; " />--}}
{{--				</div>--}}

				<div class="col-sm-6 top-right">
						<h3 class="marginright">Reference No: 1234578</h3>
						<span class="marginright">Created At: 14 April 2014</span>
			    </div>

			</div>
			<hr>
			<div class="row">

				<div class="col-xs-4 from">
					<p class="lead marginbottom">Borrower Details</p>
					<p>Name: razaman </p>
					<p>Phone: 415-767-3600</p>
					<p>Email: contact@dynofy.com</p>
                    <p>Address: Persiaran Multimedia, Cyberjaya, 63000 Cyberjaya, Selangor</p>
				</div>

			    <div class="col-xs-8 text-right payment-details">
					<p class="lead marginbottom payment-info">Staff In Charge</p>
					<p>Name: fuad</p>
					<p>Staff ID: DK888-777 </p>
			    </div>

			</div>

			<div class="row table-row">
				<table class="table table-striped">
			      <thead>
			        <tr>
			          <th class="text-center" style="width:5%">No</th>
			          <th style="width:10%">Item</th>
			          <th class="text-center" style="width:10%">Category</th>
			          <th class="text-center" style="width:10%">Writer Name</th>
                      <th class="text-center" style="width:10%">Book Condition</th>
                      <th class="text-center" style="width:10%">Rent Duration</th>
			          <th class="text-center" style="width:10%">Fees</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-center">1</td>
			          <td>Lawak Kampus</td>
			          <td class="text-center">Humour</td>
			          <td class="text-center">Keith</td>
                      <td class="text-center">Used</td>
                      <td class="text-center">7 days</td>
			          <td class="text-center">$0</td>
			        </tr>
			        <tr>
			          <td class="text-center">2</td>
			          <td>Buku Yasin</td>
			          <td class="text-center">Religion</td>
                      <td class="text-center">Mana Saya tahu</td>
			          <td class="text-center">New</td>
                      <td class="text-center">5 days</td>
			          <td class="text-center">$0</td>
			        </tr>
			       </tbody>
			    </table>

			</div>

			<div class="row">
				<div class="col-xs-4 from">
					<p class="lead marginbottom">Remarks</p>
					<p>Please return the book according to the date given to avoid charging fees</p>
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
