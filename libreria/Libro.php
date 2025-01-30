<?php

class Libro
{
    public function __construct(string $titolo, string $autore, string $genere, double $prezzo, DateTime $data_pubblicazione)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->genere = $genere;
        $this->prezzo = $prezzo;
        $this->data_pubblicazione = $data_pubblicazione;
    }

    public function getAutore(): string
    {
        return $this->autore;
    }

    public function getDataPubblicazione(): DateTime
    {
        return $this->data_pubblicazione;
    }

    public function getGenere(): string
    {
        return $this->genere;
    }

    public function getPrezzo(): float
    {
        return $this->prezzo;
    }

    public function getTitolo(): string
    {
        return $this->titolo;
    }

}