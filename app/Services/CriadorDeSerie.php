<?php

namespace App\Services;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class CriadorDeSerie 
{
    public function criarSeries(
        string $nomeSerie,
        int $qtdTemporadas,
        int $epPorTemporada
    ): Serie {
        $serie = Serie::Create(['nome' => $nomeSerie]);
        for($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);

            for ($j = 1; $j <= $epPorTemporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }
        return $serie;
    }
}

?>

