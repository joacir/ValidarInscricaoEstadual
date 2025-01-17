<?php

namespace Joacir\ValidarInscricaoEstadual\Util\Validador;


class Para extends Ceara
{

    /**
     * Verifica se a inscrição estadual é válida para o Para (PA)
     * seguindo a regra: http://www.sintegra.gov.br/Cad_Estados/cad_PA.html
     *
     * @param $inscricao_estadual string Inscrição Estadual que deseja validar.
     * @return bool true caso a inscrição estadual seja válida para esse estado, false caso contrário.
     */
    public static function check($inscricao_estadual)
    {
        $valid = true;
        // se não tiver 9 digitos não é valido
        if (strlen($inscricao_estadual) != 9) {
            $valid = false;
        }
        if ($valid && substr($inscricao_estadual, 0, 2) != '15') {
            $valid = false;
        }
        if ($valid && !self::calculaDigito($inscricao_estadual)) {
            $valid = false;
        }
        return $valid;

    }
}