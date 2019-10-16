@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'New Client',
'activePage' => 'client',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Client Management') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-primary btn-round">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Client information') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                <input type="text" name="name" id="input-name"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                @include('alerts.feedback', ['field' => 'name'])
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                <input type="password" name="password" id="input-password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Password') }}" value="" required>

                                @include('alerts.feedback', ['field' => 'password'])
                            </div>
                            <div class="form-group">
                                <label class="form-control-label"
                                    for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation"
                                    class="form-control" placeholder="{{ __('Confirm Password') }}" value="" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                    <!-- Start of Form -->
                    <div class="form-group">

                        {!! Form::open(['route' => 'borrower.store']) !!}
                        <div class="form-group row">
                        <div class="col-sm-6">
                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('first_name','First Name')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('first_name','', ['class'=>'form-control','placeholder'=>'e.g Uhuru'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('last_name','Last Name')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('last_name','',['class'=>'form-control','placeholder'=>'e.g Kenyatta'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('nickname','Nick Name')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('nickname','',['class'=>'form-control','placeholder'=>'e.g Uhunye'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('mobile_no','Phone Number')}}</div>
                            <!--<div class="input-group">
                                <div class="input-group-prepend p">
                                    <div class="input-group-text" style="font-size: 14px;">+254</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                    placeholder="e.g 716076053">
                            </div>-->
                            <div class="col-sm-9">
                                {{Form::text('mobile_no','+254',['class'=>'form-control','placeholder'=>'e.g 716076053'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('residence','Residence')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('residence','',['class'=>'form-control','placeholder'=>'e.g Githunguri, Kiambu'])}}
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('coordinates','Coordinates')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('coordinates','',['class'=>'form-control','placeholder'=>'e.g -1.234537,34.245322'])}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">{{Form::label('id_no','ID Number')}}</div>
                            <div class="col-sm-9">
                                {{Form::text('id_no','',['class'=>'form-control','placeholder'=>'e.g 12345678'])}}
                            </div>
                        </div>
                        {{Form::text('id_imageurl','/id.png',['class'=>'form-control','placeholder'=>'e.g /id.png'])}}
                        {{Form::text('photourl','/photo.png',['class'=>'form-control','placeholder'=>'e.g /photo.png'])}}
                        {{Form::text('signatureurl','/signature.png',['class'=>'form-control','placeholder'=>'e.g /signature.png'])}}
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload ID Scan</label>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload Passport Photo</label>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Register Client's Signature</label>
                        </div>
                        </div>
                        </div>
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

                        {!! Form::close() !!}
                    </div>
                    <!-- End of Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection