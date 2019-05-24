<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
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
     * @Given je vois une :arg1 des langues disponibles
     */
    public function jeVoisUneDesLanguesDisponibles($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When je sélectionne :arg1 dans la :arg2
     */
    public function jeSelectionneDansLa($arg1, $arg2)
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
}
