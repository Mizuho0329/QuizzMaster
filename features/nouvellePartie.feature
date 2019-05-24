# features/nouvellePartie.feature
# language: fr
Fonctionnalité: NouvellePartie
  Afin de démarrer une nouvelle partie
  En tant qu'utilisateur
  Je dois être capable de choisir le niveau et la catégorie


  Scénario: Jouer en Difficile
    Etant donné que je vois une liste des difficultés disponibles : "Facile", "*Moyen", "Difficile"
    Et la difficulté est par défaut : "Moyen"
    Quand je sélectionne "Difficile" dans la liste
    Alors l'application charge la difficulté en "Difficile"

  Scénario: Jouer en Moyen
    Etant donné que je vois une liste des difficultés disponibles : "Facile", "*Moyen", "Difficile"
    Et la difficulté est par défaut : "Moyen"
    Quand je sélectionne "Moyen" dans la liste
    Alors l'application charge la difficulté en "Moyen"

  Scénario: Jouer en Facile
    Etant donné que je vois une liste des difficultés disponibles : "Facile", "*Moyen", "Difficile"
    Et la difficulté est par défaut : "Moyen"
    Quand je sélectionne "Facile" dans la liste
    Alors l'application charge la difficulté en "Facile"

  Scénario: Jouer sans sélectionner de difficulté
    Etant donné que je vois une liste des difficultés disponibles : "Facile", "*Moyen", "Difficile"
    Et la difficulté est par défaut : "Moyen"
    Quand je ne sélectionne aucun difficulté dans la liste
    Alors l'application charge la difficulté par défaut "Moyen"

  Scénario: Choisir la catégorie "film et série"
    Etant donné que je vois une liste des catégories disponibles
    Quand je ne sélectionne "film et série" dans la liste
    Alors l'application filtre les questions avec la catégorie "film et série"

  Scénario: Ne pas choisir de catégorie
    Etant donné que je vois une liste des catégories disponibles
    Quand je ne sélectionne "Toutes" dans la liste
    Alors l'application charge toutes les questions

  Scénario: Retourner au Menu
    Etant donné que je vois un bouton nommé "Retour menu"
    Quand je clique sur le bouton nommé "Retour menu"
    Alors je dois voir la page "Menu"
