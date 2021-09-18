<?php

namespace Src\Utils;

/**
 * Classe responsavel 
 * 
 * @package Src\Utils
 */
class Printer
{
    /**
     * Imprime a mensangem passada
     * 
     * @param string $message
     * @return void
     */
    public static function out(string $message): void
    {
        echo $message;
    }

    /**
     * Adiciona uma nova linha no prompt
     * 
     * @return void
     */
    public static function newLine(): void
    {
        self::out(PHP_EOL);
    }

    /**
     * Monta o display para exibicao da mensagem
     * 
     * @param string
     * @return void
     */
    public static function display(string $message): void
    {
        self::newLine();
        self::out($message);
        self::newLine();
    }
}
