<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Conteudo;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function sobre(){
        $conteudo = Conteudo::where('id', '=', 1)->first();
        return view('guest.sobre', compact('conteudo'));
    }

    public function cidadeClientes(){
        $cidades = Cidade::with('clientes')->paginate(25);
        Paginator::useBootstrap();
        return view('guest.historia', compact('cidades'));
    }
}
