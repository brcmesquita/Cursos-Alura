<?php

namespace Alura;

class Calculadora {
    public function calculaMedia(array $notas): ?float {

        $quantidadDisciplinas = sizeof($notas);

        if ($quantidadDisciplinas > 0) {
            $soma = 0;
            for ($i = 0; $i < $quantidadDisciplinas; $i++) {
                $soma = $soma + $notas[$i];
            }
            $media = $soma / $quantidadDisciplinas;
            return $media;

        } else {
            echo "<p>Não foi possível calcular a média</p>";
        
        }
    }
}