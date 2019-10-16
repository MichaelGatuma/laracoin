@extends('layouts.app', [
    'namePage' => 'New Client',
    'class' => 'sidebar-mini',
    'activePage' => 'code',
    'activeNav' => '',
])

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Borrower
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <!-- Start of Form -->
      <div class="form-group">
        {!! Form::open(['route' => 'borrowers.store']) !!}
        
        <div class="form-group row">
            <div class="col-sm-2">{{Form::label('firstName','First Name')}}</div>
            <div class="col-sm-7">{{Form::text('first_name','', ['class'=>'form-control','placeholder'=>'e.g Uhuru'])}}</div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">{{Form::label('lastName','Last Name')}}</div>
            <div class="col-sm-7">{{Form::text('last_name','',['class'=>'form-control','placeholder'=>'e.g Kenyatta'])}}</div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2">{{Form::label('nickName','Nick Name')}}</div>
            <div class="col-sm-7">{{Form::text('nickname','',['class'=>'form-cotrol','placeholder'=>'e.g Uhunye'])}}</div>
        </div>
        
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
      </div>
      <!-- End of Form -->
  </div>
</div>
@endsection