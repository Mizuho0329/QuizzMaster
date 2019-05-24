# features/option.feature
# language: fr
Fonctionnalité: Option
  Afin de parametrer cette application
  En tant qu'utilisateur
  Je dois être capable de choisir des options


  Scénario: Changer la langue en "Français"
    Etant donné que je vois une liste des langues disponibles
    Quand je sélectionne "Français" dans la liste
    Alors l'application doit charger la langue en "Français"

  Scénario: Changer la langue en "Anglais"
    Etant donné que je vois une liste des langues disponibles
    Quand je sélectionne "Anglais" dans la liste
    Alors l'application doit charger la langue en "Anglais"

  Scénario: Activer les sons
    Etant donné que je vois un "switch" pour activer ou désactiver le son, à l'état "false"
    Quand je clique "switch"
    Alors le "switch" doit passer à l'état "true"
    Et je dois entendre le son

  Scénario: Désactiver les sons
    Etant donné que je vois un "switch" pour activer ou désactiver le son, à l'état "true"
    Quand je clique "switch"
    Alors le "switch" doit passer à l'état "false"
    Et je ne dois pas entendre le son

  Scénario: Retourner au Menu
    Etant donné que je vois un bouton nommé "Retour menu"
    Quand je clique sur le bouton nommé "Retour menu"
    Alors je dois voir la page "Menu"
