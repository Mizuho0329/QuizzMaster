# features/partieUnJoueur.feature
# language: fr
Fonctionnalité: partieUnJoueur
  Afin de jouer un quizz
  En tant qu'utilisateur
  Je dois être capable de répondre bien ou non, à une suite de 10 questions


  Scénario: Sélectionner une bonne réponse et ce n'est pas la dernière question
    Etant donné que je vois une question avec 4 choix
    Et ce n'est pas la dernière question
    Quand je sélectionne la bonne réponse
    Alors l'application ajoute 10 points sur mon score
    Et je vois la nouvelle question

  Scénario: Sélectionner une mauvaise réponse et ce n'est pas la dernière question
    Etant donné que je vois une question avec 4 choix
    Et ce n'est pas la dernière question
    Quand je sélectionne la mauvaise réponse
    Alors je vois la bonne réponse
    Et je vois la nouvelle question

  Scénario: Sélectionner une bonne réponse et c'est la dernière question
    Etant donné que je vois une question avec 4 choix
    Et c'est la dernière question
    Quand je sélectionne la bonne réponse
    Alors l'application ajoute 10 points sur mon score
    Et je vois le résultat de la partie

  Scénario: Sélectionner une mauvaise réponse et c'est la dernière question
    Etant donné que je vois une question avec 4 choix
    Et c'est la dernière question
    Quand je sélectionne la mauvaise réponse
    Alors je vois la bonne réponse
    Et je vois le résultat de la partie

  Scénario: Obtenir un indice
    Etant donné que je vois un bouton "Indice"
    Et je vois un bouton "Passer"
    Et je vois un bouton "Enlever 1 mauvaise réponse"
    Quand je clique le bouton "Indice"
    Alors je vois un popup d'un indice

  Scénario: Passer la question
    Etant donné que je vois un bouton "Indice"
    Et je vois un bouton "Passer"
    Et je vois un bouton "Enlever 1 mauvaise réponse"
    Quand je clique le bouton "Passer"
    Alors la question n'est pas validé
    Et je vois une autre question

  Scénario: Enlever 1 mauvaise réponse si existant
    Etant donné que je vois un bouton "Indice"
    Et je vois un bouton "Passer"
    Et je vois un bouton "Enlever 1 mauvaise réponse"
    Et j'ai eu au moins 1 mauvaise réponse
    Quand je clique le bouton "Enlever 1 mauvaise réponse"
    Alors une mauvaise réponse est supprimée du choix de la réponse
    Et je vois la question actuelle

  Scénario: Enlever 1 mauvaise réponse si non existant
    Etant donné que je vois un bouton "Indice"
    Et je vois un bouton "Passer"
    Et je vois un bouton "Enlever 1 mauvaise réponse"
    Et je n'ai eu aucune mauvaise réponse
    Quand je clique le bouton "Enlever 1 mauvaise réponse"
    Alors je vois "Vous n'avez pas de mauvaise réponse !"
    Et je vois la question actuelle
