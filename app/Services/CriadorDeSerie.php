<?php

namespace App\Services;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie 
{
    public function criaEpisodios( int $epPorTemporada, \Illuminate\Database\Eloquent\Model $temporada ) : void 
    {
        for ($j =1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
    
    public function criaTemporadas(int $qtdTemporadas, int $epPorTemporada, $serie) 
    {
        for ($i=1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
    
            $this->criaEpisodios($epPorTemporada, $temporada);
        }
    }

    public function criarSeries(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada) : Serie 
    {
        DB::beginTransaction();
        $serie = Serie::Create(['nome' => $nomeSerie]);
        $this->criaTemporadas($qtdTemporadas, $epPorTemporada, $serie);
        DB::commit();

        return $serie;
    }

}


?>

