@extends('layout.general')

@section('content')

    {!! Form::open(['url' => 'generalLogin']) !!}
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <div class="form-group">
                {!! Form::label('email', 'E-Mail帳號') !!}
                {!! Form::text('email', null, ['placeholder' => '您的電子郵件帳號', 'class' => 'form-control']) !!}
                @if ($errors->has('email')) <h5 class="text-danger">{{ $errors->first('email') }}</h5> @endif
            </div>
            <div class="form-group">
                {!! Form::label('pwd', '密碼') !!}
                {!! Form::password('pwd', ['placeholder' => '您的密碼', 'class' => 'form-control']) !!}
                @if ($errors->has('pwd')) <h5 class="text-danger">{{ $errors->first('pwd') }}</h5> @endif
            </div>
            <div class="form-group">
                {!! Form::submit('登入', ['class' => 'form-control btn btn-primary']) !!}
            </div>

            <div class="form-group text-center">
                <h5 class="text-muted">您忘記密碼嗎？<a href="#">按此重設</a> </h5>
                <h5 class="text-muted">還沒有帳號嗎？<a href="register-primary">按此註冊</a></h5>
            </div>

        </div>
        <div class="col-lg-4"></div>
    </div>
    {!! Form::close() !!}

    @stop