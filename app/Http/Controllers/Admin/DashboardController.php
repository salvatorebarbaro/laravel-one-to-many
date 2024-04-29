<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        //con questo comando io mi importo gli utenti che sono autorizzati
        $user= Auth::user();
        //mostro in pagina l'utente
        // dd($user);

        //mi porto in pagina l'utente tramite compact
        return view ('admin.index',compact('user'));
    }
    public function users(){

        return view ('admin/users');
    }
}
