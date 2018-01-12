@extends('layouts.app')
<style>
    .compte{
        margin: 10px 10px 10px 10px;
        padding: 10px 10px 10px 10px;
        border: 5px solid black;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div>
                <h2>Account</h2>
                <a href="/addCompte">Create an account</a>
                <?php
                    use App\Compte;
                    $compte= Compte::all();
                    foreach ($compte as $compt){
                        echo"<div class='compte'><div> compte: ";
                        echo $compt->key;
                        echo "</div><div> solde: ";
                        echo $compt->value;
                        echo "</div>"
                        {{ Form::open(array('route'=>'Transfert')) }}
                        {{ Form::label('type','CryptoMoney') }}
                        {{ Form::select('type',array(
                            foreach($compte as $com){
                                "$com->key"=>"$com->key",
                            }
                        )) }}
                        {{ Form::button('submit',
                        array(
                            'type'=>'submit',
                            'class'=>'btn btn-primary'
                            )
                        ) }}
                        {{ Form::close() }}
                        echo "</div>";
                    }
                ?>
            </div>
            
        </div>
    </div>
</div>
@endsection
