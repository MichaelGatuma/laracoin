@extends('layouts.app', [
    'namePage' => 'sv_create',
    'class' => 'sidebar-mini',
    'activePage' => 'code',
    'activeNav' => '',
])

@section('content')
<div class="container">
    <br><br><br><br>
    <div class="form-group">
    {!! Form::open(['url' => 'foo/bar']) !!}
    {{Form::label('firstName','First Name')}}
    {{Form::text('fName','', ['class'=>'form-control','placeholder'=>'e.g Uhuru'])}}
    {{Form::label('lastName','Last Name')}}
    {{Form::text('lName','', ['class'=>'form-control','placeholder'=>'e.g Kenyatta'])}}
    {{Form::label('nick','Nick Name')}}
    {{Form::text('nickName','', ['class'=>'form-control','placeholder'=>'e.g Uhunye'])}}
    {{Form::label('id','ID Number')}}
    {{Form::text('idNo','', ['class'=>'form-control','placeholder'=>'e.g 12345678'])}}
    {{Form::label('email','Email Address')}}
    {{Form::email('email', '', ['class'=>'form-control','placeholder'=>'e.g uhuru254@mail.com'])}}
    {{Form::label('resid','Residence')}}
    {{Form::text('residence','', ['class'=>'form-control','placeholder'=>'e.g Kenya'])}}
    
    {{Form::submit('Submit',['class'=>'form-control'])}}
   
    {!! Form::close() !!}
    </div>
</div>


@endsection