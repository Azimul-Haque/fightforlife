@extends('adminlte::page')

@section('title', 'Fight For Life | Donations')

@section('css')

@stop

@section('content_header')
    <h1>
      Donations [Total donations: <b>{{ $totaldonations }}</b>, <b>৳ {{ $totaldonationamount->total }}</b>]
      <div class="pull-right">
        {{-- <a class="btn btn-success" href="{{ route('index.application') }}" target="_blank"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add Member</a> --}}
      </div>
    </h1>
@stop

@section('content')
    <div class="table-responsive">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Donor Name</th>
            <th>Institution/ Organization</th>
            <th>Amount, TrxID</th>
            <th>AamarPay Charge</th>
            <th>Payment Method</th>
            <th>Datetime</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tbody>
              @foreach($donors as $donor)
                  <tr>
                      <td><a href="{{ route('index.donatenext', $donor->donation_id) }}">{{ $donor->name }}</a><br/>{{ $donor->phone }}</td>
                      <td>{{ $donor->institute }}</td>
                      <td><big><b>৳ {{ $donor->amount }}</b></big><br/>{{ $donor->trxid }}</td>
                      <td><big><b>৳ {{ $donor->aamarpay_charge }}</b></big></td>
                      <td>{{ $donor->card_type }}</td>
                      <td>{{ date('F d, Y h:i A', strtotime($donor->created_at)) }}</td>
                      <td></td>
                  </tr>
              @endforeach
          </tbody>
        </tbody>
      </table>
    </div>
    {{ $donors->links() }}    
@stop

@section('js')

@stop