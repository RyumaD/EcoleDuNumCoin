@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>Create an account</div>
            <div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ Form::open(array('route'=>'newCompteService')) }}
                        {{ Form::label('type','CryptoMoney') }}
                        {{ Form::select('type',array(
                            'bitcoin'=>'Bitcoin',
                            'etherium'=>'Etherium'
                        )) }}
                        {{ Form::button('submit',
                        array(
                            'type'=>'submit',
                            'class'=>'btn btn-primary'
                            )
                        ) }}
                {{ Form::close() }}
            </div>  
        </div>
    </div>
</div>
@endsection
