<?php

class CampoDaCalcio
{
    private string $nome;
    private string $url;
    private int $spettatori;

    public function __construct(string $nome, string $url = "", int $spettatori)
    {
        $this->nome = $nome;
        $this->url = $url;
        $this->spettatori = $spettatori;
    }

    public function __toString()
    {
        return $this->nome . " - " . $this->url . " - " . $this->spettatori;
    }
}