<?php
/**
 * @author   "Thiago Souza" <Joacir@msn.com>
 * @version  1.0
 * @link     https://github.com/Joacir/InscricaoEstadual
 * @example  https://github.com/Joacir/InscricaoEstadual
 * @license  Revised BSD
 */

namespace Joacir\ValidarInscricaoEstadual\Util;


use Joacir\ValidarInscricaoEstadual\Util\Validador\Acre;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Alagoas;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Amapa;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Amazonas;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Bahia;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Ceara;
use Joacir\ValidarInscricaoEstadual\Util\Validador\DistritoFederal;
use Joacir\ValidarInscricaoEstadual\Util\Validador\EspiritoSanto;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Goias;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Maranhao;
use Joacir\ValidarInscricaoEstadual\Util\Validador\MatoGrosso;
use Joacir\ValidarInscricaoEstadual\Util\Validador\MatoGrossoDoSul;
use Joacir\ValidarInscricaoEstadual\Util\Validador\MinasGerais;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Para;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Paraiba;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Parana;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Pernambuco;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Piaui;
use Joacir\ValidarInscricaoEstadual\Util\Validador\RioDeJaneiro;
use Joacir\ValidarInscricaoEstadual\Util\Validador\RioGrandeDoNorte;
use Joacir\ValidarInscricaoEstadual\Util\Validador\RioGrandeDoSul;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Rondonia;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Roraima;
use Joacir\ValidarInscricaoEstadual\Util\Validador\SantaCatarina;
use Joacir\ValidarInscricaoEstadual\Util\Validador\SaoPaulo;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Sergipe;
use Joacir\ValidarInscricaoEstadual\Util\Validador\Tocantins;

class Validador
{

    /**
     * Verifica se a inscrição estadual é válida para o estado a ser consultado
     *
     * @param $estado string UF de dois dígitos
     * @param $inscricao_estadual string Inscrição Estadual que deseja validar.
     * @return bool true caso a inscrição estadual seja válida para esse estado, false caso contrário.
     */
    public static function check($estado, $inscricao_estadual)
    {
        //Transforma a sigla para maiúsculo
        $estado = strtoupper($estado);

        //Remove a máscara da inscrição deixando apenas os números
        $inscricao_estadual = preg_replace( '/[^0-9]/', '', $inscricao_estadual);

        switch ($estado) {
            case Estados::AC:
                $valid = Acre::check($inscricao_estadual);
                break;
            case Estados::AL:
                $valid = Alagoas::check($inscricao_estadual);
                break;
            case Estados::AP:
                $valid = Amapa::check($inscricao_estadual);
                break;
            case Estados::AM:
                $valid = Amazonas::check($inscricao_estadual);
                break;
            case Estados::BA:
                $valid = Bahia::check($inscricao_estadual);
                break;
            case Estados::CE:
                $valid = Ceara::check($inscricao_estadual);
                break;
            case Estados::DF:
                $valid = DistritoFederal::check($inscricao_estadual);
                break;
            case Estados::ES:
                $valid = EspiritoSanto::check($inscricao_estadual);
                break;
            case Estados::GO:
                $valid = Goias::check($inscricao_estadual);
                break;
            case Estados::MA:
                $valid = Maranhao::check($inscricao_estadual);
                break;
            case Estados::MT:
                $valid = MatoGrosso::check($inscricao_estadual);
                break;
            case Estados::MS:
                $valid = MatoGrossoDoSul::check($inscricao_estadual);
                break;
            case Estados::MG:
                $valid = MinasGerais::check($inscricao_estadual);
                break;
            case Estados::PA:
                $valid = Para::check($inscricao_estadual);
                break;
            case Estados::PB:
                $valid = Paraiba::check($inscricao_estadual);
                break;
            case Estados::PR:
                $valid = Parana::check($inscricao_estadual);
                break;
            case Estados::PE:
                $valid = Pernambuco::check($inscricao_estadual);
                break;
            case Estados::PI:
                $valid = Piaui::check($inscricao_estadual);
                break;
            case Estados::RJ:
                $valid = RioDeJaneiro::check($inscricao_estadual);
                break;
            case Estados::RN:
                $valid = RioGrandeDoNorte::check($inscricao_estadual);
                break;
            case Estados::RS:
                $valid = RioGrandeDoSul::check($inscricao_estadual);
                break;
            case Estados::RO:
                $valid = Rondonia::check($inscricao_estadual);
                break;
            case Estados::RR:
                $valid = Roraima::check($inscricao_estadual);
                break;
            case Estados::SC:
                $valid = SantaCatarina::check($inscricao_estadual);
                break;
            case Estados::SP:
                $valid = SaoPaulo::check($inscricao_estadual);
                break;
            case Estados::SE:
                $valid = Sergipe::check($inscricao_estadual);
                break;
            case Estados::TO:
                $valid = Tocantins::check($inscricao_estadual);
                break;
            default:
                $valid = false;
        }
        return $valid;
    }
}
