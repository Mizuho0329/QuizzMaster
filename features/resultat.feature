# features/resultat.feature
# language: fr
Fonctionnalité: Resultat
  Afin de rejouer ou retourner au Menu
  En tant qu'utilisateur
  Je dois être capable de cliquer le bouton nommé "Rejouer" ou "Menu"


  Scénario: Rejouer
    Etant donné que je vois la résultat d'une partie
    Et je vois un bouton "Rejouer"
    Et je vois un bouton "Retour Menu"
    Quand je clique sur le bouton nommé "Rejouer"
    Alors je dois voir la nouvelle question
    Et je dois voir la page "Nouvelel partie"

  Scénario: Retourner au Menu
    Etant donné que je vois la résultat d'une partie
    Et je vois un bouton "Rejouer"
    Et je vois un bouton "Retour menu"
    Quand je clique sur le bouton nommé "Retour menu"
    Alors je dois voir la page "Menu"
