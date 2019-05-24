<?php


class Reponse
{

    private $nom;
    private $estCorrecte;
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEstCorrecte()
    {
        return $this->estCorrecte;
    }

    /**
     * @param mixed $estCorrecte
     */
    public function setEstCorrecte($estCorrecte): void
    {
        $this->estCorrecte = $estCorrecte;
    }

}