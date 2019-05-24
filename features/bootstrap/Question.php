<?php


class Question
{

    private $nom;
    private $reponse;
    private $categorie;
    private $difficulte;

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
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * @param mixed $difficulte
     */
    public function setDifficulte($difficulte): void
    {
        $this->difficulte = $difficulte;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse): void
    {
        $this->reponse = $reponse;
    }
}