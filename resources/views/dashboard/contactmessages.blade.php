@extends('adminlte::page')

@section('title', 'Contact Form Messages')

@section('css')

@stop

@section('content_header')
    <h1>
      Contact Form Messages
      <div class="pull-right">
        {{-- <a class="btn btn-success" href="{{ route('index.application') }}" target="_blank"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add Member</a> --}}
      </div>
    </h1>
@stop

@section('content')
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th width="20%">Name</th>
          <th width="20%">Email</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        @foreach($messages as $message)
        <tr>
          <td>{{ $message->name }}</td>
          <td>{{ $message->email }}</td>
          <td>{{ $message->message }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div>
    {{ $messages->links() }}
  </div>


    
@stop

@section('js')

@stop