@extends('adminlte::page')

@section('title', 'Fight For Life | Partners')

@section('css')

@stop

@section('content_header')
    <h1>
      Partners
      <div class="pull-right">
        
      </div>
    </h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Add Partner</div>
        {!! Form::open(['route' => 'dashboard.partner.create', 'method' => 'POST']) !!}
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              {!! Form::label('name', 'Name') !!}
              {!! Form::text('name', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
            <div class="col-md-6">
              {!! Form::label('address', 'Address') !!}
              {!! Form::text('address', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
          </div><br/>

          <div class="row">
            <div class="col-md-6">
              {!! Form::label('latitude', 'Latitude') !!}
              {!! Form::text('latitude', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
            <div class="col-md-6">
              {!! Form::label('longitude', 'Longitude') !!}
              {!! Form::text('longitude', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
          </div><br/>

          <div class="row">
            <div class="col-md-6">
              {!! Form::label('phone', 'Phone') !!}
              {!! Form::text('phone', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
            <div class="col-md-6">
              {!! Form::label('amount', 'Amount') !!}
              {!! Form::text('amount', 0, array('class' => 'form-control', 'required' => '')) !!}
            </div>
          </div><br/>

          <div class="row">
            <div class="col-md-6">
              {!! Form::label('families', 'Families') !!}
              {!! Form::number('families', null, array('class' => 'form-control', 'required' => '')) !!}
            </div>
            <div class="col-md-6">
              
            </div>
          </div>          
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Submit</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Conatct Info</th>
            <th>Location</th>
            <th>Donation Info</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($partners as $partner)
          <tr>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->phone }}<br/>{{ $partner->address }}</td>
            <td>{{ $partner->latitude }}, {{ $partner->longitude }}</td>
            <td>৳ {{ $partner->amount }}<br/><i class="fa fa-home"></i> {{ $partner->families }}</td>

            <td>
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editPartnerModal{{ $partner->id }}" data-backdrop="static" title="Edit Partner"><i class="fa fa-pencil"></i></button>
              <!-- Edit Modal -->
              <!-- Edit Modal -->
              <div class="modal fade" id="editPartnerModal{{ $partner->id }}" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header modal-header-primary">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Partner</h4>
                    </div>
                    {!! Form::model($partner, ['route' => ['dashboard.partner.update', $partner->id], 'method' => 'PUT', 'class' => 'form-default', 'enctype' => 'multipart/form-data']) !!}
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::label('address', 'Address') !!}
                            {!! Form::text('address', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                        </div><br/>

                        <div class="row">
                          <div class="col-md-6">
                            {!! Form::label('latitude', 'Latitude') !!}
                            {!! Form::text('latitude', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::label('longitude', 'Longitude') !!}
                            {!! Form::text('longitude', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                        </div><br/>

                        <div class="row">
                          <div class="col-md-6">
                            {!! Form::label('phone', 'Phone') !!}
                            {!! Form::text('phone', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                          <div class="col-md-6">
                            {!! Form::label('amount', 'Amount') !!}
                            {!! Form::text('amount', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                        </div><br/>

                        <div class="row">
                          <div class="col-md-6">
                            {!! Form::label('families', 'Families') !!}
                            {!! Form::text('families', null, array('class' => 'form-control', 'required' => '')) !!}
                          </div>
                          <div class="col-md-6">

                          </div>
                        </div><br/>
                      </div>
                      <div class="modal-footer">
                          {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
              <!-- Edit Modal -->
              <!-- Edit Modal -->
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>  
@stop

@section('js')

@stop