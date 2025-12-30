<?php
namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use App\Models\User;
use App\Models\Temporada;
use App\Models\Episodio;
use App\Services\CriadorDeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request)
    {
     $data = $request->except('_token');
     $data['password'] = Hash::make($data['password']);
     $user = User::create($data);

     Auth::login($user);

     return redirect()->route('listar_series');

    }

}
