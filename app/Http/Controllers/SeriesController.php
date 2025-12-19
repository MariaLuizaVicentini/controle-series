<?php 
namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use App\Models\Temporada;
use App\Models\Episodio;
use App\Services\CriadorDeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;

class SeriesController extends Controller 
{
    public function index(Request $request) 
    {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create() {
        return view( 'series.create');
    }

    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie) 
    {
        $serie = $criadorDeSerie->criarSeries(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );
        
        $request->session()
        ->flash(
            'mensagem', 
            "Série {$serie->nome} suas temporadas e episódios criados com sucesso! ID: {$serie->id}"
        );
        return redirect()->route('listar_series');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie) 
    {
        $nomeSerie = $removedorDeSerie->removerSerie($request->id);
        $request->session()
        ->flash(
            'mensagem', 
            "Série $nomeSerie removida com sucesso"
        );
        return redirect()->route('listar_series');
    }
}



?>