<?php

namespace App\Http\Controllers;

use App\User;
use App\Compte;
use App\Http\Requests\addCompteServiceRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function addCompte(){
        return view('addCompte');
    }
    public function newCompteService(addCompteServiceRequest $request){
        $r = $request->all();
        $type = $r['type'];
        $compte= new Compte();
        $compte->key = rand();
        $compte->user_id = Auth::user()->id;
        $compte->value = 0;
        $compte->type = $type;
        $compte->save();

        return redirect()->back();
    }
}
