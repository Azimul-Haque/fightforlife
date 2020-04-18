@extends('adminlte::page')

@section('title', 'Fight For Life')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
    	<div class="col-md-3">
    		<div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Donors</span>
                  <span class="info-box-number">
                    {{ $totaldonations }}
                  </span>
                  <span class="info-box-text"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
		</div>
		<div class="col-md-3">
			<div class="info-box">
	            <span class="info-box-icon bg-red"><span class="fa fa-line-chart"></span></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Total Amount</span>
	              <span class="info-box-number">
	                ৳ 
	                {{ $totaldonationamount->total }}
	              </span>
	              <span class="info-box-text"></span>
	            </div>
	            <!-- /.info-box-content -->
	        </div>
		</div>
		<div class="col-md-3">
			<div class="info-box">
	            <span class="info-box-icon bg-blue"><span class="fa fa-hourglass-half"></span></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Gateway Charge</span>
	              <span class="info-box-number"> 
	                ৳ 
	                {{ $totalcharge->total }}
	              </span>
	              <span class="info-box-text"></span>
	            </div>
	            <!-- /.info-box-content -->
	        </div>
		</div>
		<div class="col-md-3">
			<div class="info-box">
	            <span class="info-box-icon bg-yellow"><i class="fa fa-balance-scale"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text">Total Balance</span>
	              <span class="info-box-number"> 
	                ৳ 
	                {{ $totaldonationamount->total - $totalcharge->total }}
	              </span>
	              <span class="info-box-text"></span>
	            </div>
	            <!-- /.info-box-content -->
	        </div>
		</div>
    </div>
@stop