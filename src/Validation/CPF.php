<?php

namespace Src\Validation;

use Exception;
use Src\Utils\Printer;

/** 
 * Classe responsavel pelo calculo 
 * e validacao do CPF
 * 
 * @package Src\App\Validation
 */
class CPF extends Printer
{

    /**
     * Verifica se o CPF possui tamanho valido
     * 
     * @param string $cpf
     * @return bool
     */
    public static function verificarTamanho(string $cpf): bool
    {
        if (strlen($cpf) != 11) {
            return false;
        }

        return true;
    }

    /**
     * Verifica se o CPF possui numeros duplicados
     * 
     * @param string 
     * @return bool
     */
    public static function verificaDuplicidade(string $cpf): bool
    {
        $duplicados = [
            '11111111111', '22222222222', '33333333333', '44444444444',
            '55555555555', '66666666666', '77777777777', '88888888888',
            '99999999999'
        ];

        if (!in_array($cpf, $duplicados, true)) {
            return true;
        }

        return false;
    }


    /**
     * Metodo responsavel pela validacao do CPF
     *
     * @param string $cpf
     * @return bool
     */
    public static function validar(string $cpf): bool
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        if (!self::verificarTamanho($cpf)) {

            Printer::display("\e[31m[*] CPF com tamanho invalido");
            return false;
        }

        if (!self::verificaDuplicidade($cpf)) {
            Printer::display("\e[31m[*] CPF com numeros duplicados");
            return false;
        }

        $cpfValidacao = substr($cpf, 0, 9);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);

        // compara o cpf calculado com o cpf enviado
        return $cpfValidacao == $cpf ?? false;
    }

    /**
     * Metodo responsavel por calcular o digito verificador com base
     * na sequencia numerica
     * 
     * @param string $cpf
     * @return string
     */
    public static function calcularDigitoVerificador(string $cpf): string
    {
        $tamanho = strlen($cpf);
        $multiplicador = $tamanho + 1;

        $soma = 0;

        for ($i = 0; $i < $tamanho; $i++) {
            $soma += $cpf[$i] * $multiplicador;
            $multiplicador--;
        }

        $resto = $soma % 11;

        return $resto > 1 ? 11 - $resto : 0;
    }
}
