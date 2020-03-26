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
    <div class="col-md-4"></div>
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email & Phone</th>
            <th>Degree, Batch & Roll</th>
            <th>Job & Designation</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($partners as $partner)
          <tr>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->email }}<br/>{{ $partner->phone }}</td>
            <td>{{ $partner->degree }} {{ $partner->batch }}, {{ $partner->roll }}</td>
            <td>{{ $partner->designation }}<br/>{{ $partner->current_job }}</td>
            <td>
              @if($partner->image != null)
              <img src="{{ asset('images/users/'.$partner->image)}}" style="height: 40px; width: auto;" />
              @else
              <img src="{{ asset('images/user.png')}}" style="height: 40px; width: auto;" />
              @endif
            </td>
            <td>
              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#editPartnerModal{{ $partner->id }}" data-backdrop="static" title="Delete Application" disabled=""><i class="fa fa-trash-o"></i></button>
              <!-- Delete Member Modal -->
              <!-- Delete Member Modal -->
              <div class="modal fade" id="editPartnerModal{{ $partner->id }}" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Delete Member</h4>
                    </div>
                    <div class="modal-body">
                      Confirm Delete the member of <b>{{ $partner->name }}</b>
                    </div>
                    <div class="modal-footer">
                      {!! Form::model($partner, ['route' => ['dashboard.deletemember', $partner->id], 'method' => 'DELETE', 'class' => 'form-default', 'enctype' => 'multipart/form-data']) !!}
                          {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
              <!-- Delete Member Modal -->
              <!-- Delete Member Modal -->
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