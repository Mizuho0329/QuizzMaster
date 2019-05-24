<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class NouvellePartieContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    public function __construct()
    {
    }

    /**
     * @Given je vois un bouton du menu nommé :arg1
     */
    public function jeVoisUnBoutonDuMenuNomme($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je clique sur le bouton nommé :arg1
     */
    public function jeCliqueSurLeBoutonNomme($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la page : :arg1
     */
    public function jeDoisVoirLaPage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une liste des difficultés disponibles : :arg1, :arg2, :arg3
     */
    public function jeVoisUneListeDesDifficultesDisponibles($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Given la difficulté est par défaut : :arg1
     */
    public function laDifficulteEstParDefaut($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je sélectionne :arg1 dans la liste
     */
    public function jeSelectionneDansLaListe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then l'application charge la difficulté en :arg1
     */
    public function lapplicationChargeLaDifficulteEn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je ne sélectionne aucun difficulté dans la liste
     */
    public function jeNeSelectionneAucunDifficulteDansLaListe()
    {
        throw new PendingException();
    }

    /**
     * @Then l'application charge la difficulté par défaut :arg1
     */
    public function lapplicationChargeLaDifficulteParDefaut($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une liste des catégories disponibles
     */
    public function jeVoisUneListeDesCategoriesDisponibles()
    {
        throw new PendingException();
    }

    /**
     * @When je ne sélectionne :arg1 dans la liste
     */
    public function jeNeSelectionneDansLaListe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then l'application filtre les questions avec la catégorie :arg1
     */
    public function lapplicationFiltreLesQuestionsAvecLaCategorie($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then l'application charge toutes les questions
     */
    public function lapplicationChargeToutesLesQuestions()
    {
        throw new PendingException();
    }

    /**
     * @Given je vois un bouton nommé :arg1
     */
    public function jeVoisUnBoutonNomme($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la page :arg1
     */
    public function jeDoisVoirLaPage2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une liste des langues disponibles
     */
    public function jeVoisUneListeDesLanguesDisponibles()
    {
        throw new PendingException();
    }

    /**
     * @Then l'application doit charger la langue en :arg1
     */
    public function lapplicationDoitChargerLaLangueEn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois un :arg1 pour activer ou désactiver le son, à l'état :arg2
     */
    public function jeVoisUnPourActiverOuDesactiverLeSonALetat($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When je clique :arg1
     */
    public function jeClique($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then le :arg1 doit passer à l'état :arg2
     */
    public function leDoitPasserALetat($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois entendre le son
     */
    public function jeDoisEntendreLeSon()
    {
        throw new PendingException();
    }

    /**
     * @Then je ne dois pas entendre le son
     */
    public function jeNeDoisPasEntendreLeSon()
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une question avec :arg1 choix
     */
    public function jeVoisUneQuestionAvecChoix($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given ce n'est pas la dernière question
     */
    public function ceNestPasLaDerniereQuestion()
    {
        throw new PendingException();
    }

    /**
     * @When je sélectionne la bonne réponse
     */
    public function jeSelectionneLaBonneReponse()
    {
        throw new PendingException();
    }

    /**
     * @Then l'application ajoute :arg1 points sur mon score
     */
    public function lapplicationAjoutePointsSurMonScore($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je vois la nouvelle question
     */
    public function jeVoisLaNouvelleQuestion()
    {
        throw new PendingException();
    }

    /**
     * @When je sélectionne la mauvaise réponse
     */
    public function jeSelectionneLaMauvaiseReponse()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois la bonne réponse
     */
    public function jeVoisLaBonneReponse()
    {
        throw new PendingException();
    }

    /**
     * @Given c'est la dernière question
     */
    public function cestLaDerniereQuestion()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois le résultat de la partie
     */
    public function jeVoisLeResultatDeLaPartie()
    {
        throw new PendingException();
    }

    /**
     * @Given je vois un bouton :arg1
     */
    public function jeVoisUnBouton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je clique le bouton :arg1
     */
    public function jeCliqueLeBouton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je vois un popup d'un indice
     */
    public function jeVoisUnPopupDunIndice()
    {
        throw new PendingException();
    }

    /**
     * @Then la question n'est pas validé
     */
    public function laQuestionNestPasValide()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois une autre question
     */
    public function jeVoisUneAutreQuestion()
    {
        throw new PendingException();
    }

    /**
     * @Given j'ai eu au moins :arg1 mauvaise réponse
     */
    public function jaiEuAuMoinsMauvaiseReponse($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then une mauvaise réponse est supprimée du choix de la réponse
     */
    public function uneMauvaiseReponseEstSupprimeeDuChoixDeLaReponse()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois la question actuelle
     */
    public function jeVoisLaQuestionActuelle()
    {
        throw new PendingException();
    }

    /**
     * @Given je n'ai eu aucune mauvaise réponse
     */
    public function jeNaiEuAucuneMauvaiseReponse()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois :arg1
     */
    public function jeVois($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une liste des questions dont un bouton :arg1 pour chaque question
     */
    public function jeVoisUneListeDesQuestionsDontUnBoutonPourChaqueQuestion($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je clique sur le bouton nommé :arg1 de la question que je veux modifier
     */
    public function jeCliqueSurLeBoutonNommeDeLaQuestionQueJeVeuxModifier($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je modifie les champs
     */
    public function jeModifieLesChamps()
    {
        throw new PendingException();
    }

    /**
     * @When je clique un bouton :arg1
     */
    public function jeCliqueUnBouton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la liste des questions avec la question modifiée
     */
    public function jeDoisVoirLaListeDesQuestionsAvecLaQuestionModifiee()
    {
        throw new PendingException();
    }

    /**
     * @When je clique sur le bouton nommé :arg1 de la question que je veux supprimer
     */
    public function jeCliqueSurLeBoutonNommeDeLaQuestionQueJeVeuxSupprimer($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la liste des questions sans la question supprimée
     */
    public function jeDoisVoirLaListeDesQuestionsSansLaQuestionSupprimee()
    {
        throw new PendingException();
    }

    /**
     * @Given je vois une liste des questions et un bouton :arg1
     */
    public function jeVoisUneListeDesQuestionsEtUnBouton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la page formulaire :arg1
     */
    public function jeDoisVoirLaPageFormulaire($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given je vois la formulaire de la nouvelle question
     */
    public function jeVoisLaFormulaireDeLaNouvelleQuestion()
    {
        throw new PendingException();
    }

    /**
     * @When je remplis les champs :arg1, :arg2, :arg3, :arg4, :arg5, :arg6, :arg7, :arg8
     */
    public function jeRemplisLesChamps($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8)
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la liste des questions avec la question ajoutée
     */
    public function jeDoisVoirLaListeDesQuestionsAvecLaQuestionAjoutee()
    {
        throw new PendingException();
    }

    /**
     * @Given je vois la résultat d'une partie
     */
    public function jeVoisLaResultatDunePartie()
    {
        throw new PendingException();
    }

    /**
     * @Then je dois voir la nouvelle question
     */
    public function jeDoisVoirLaNouvelleQuestion()
    {
        throw new PendingException();
    }
}
