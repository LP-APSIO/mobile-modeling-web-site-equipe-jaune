DIAGRAMME DE SEQUENCE : (url image d'illustration : https://jmbruel.github.io/MobileModeling2016-1/img/concept/diagramme_sequence.png ) 

- Le diagramme de séquence décrit le déroulement de chaque cas d’utilisation.

- Il montre la façon dont les différentes entités interagissent entre elles au sein d’une fonctionnalité.

- Il offre une vision chronologique, en présentant les opérations réalisées par un acteur / une instance de classe.

- Il est composé : 

D’objets 
D’interaction

- Le système global est donc composé de plusieurs diagrammes de séquence.

- Un objet mis en œuvre dans un diagramme de classe peut symboliser :

Un acteur, humain ou non
Le système, ou une partie de celui-ci

- A chaque acteur / instance, est associée une ligne de vie.

- La ligne de vie permet de relier les acteurs / instances du diagramme au travers de messages.

- Une ligne de vie représente l’aspect temporel :

Lecture du haut vers le bas
Numérotation des messages

- Au niveau du formalisme, on va avoir :

L’acteurlui-même 
La période d’activité de l’objet (moment où les messages sont échangées) 
La ligne de vie

- Opérations (ou messages) qui transite d’un acteur à l’autre au travers des lignes de vie.

- Flèches horizontales :

Ligne de vie de l’objet émetteur vers la ligne de vie de l’objet destinataire
Numérotation séquentielle

- Transmission d’information possible

Paramètres transmis avec le message

- Formalismedes différents types de messages :

Synchrone
Asynchrone
De retour
Envoie d’un message à soi-même

- Lorsqu’un acteur envoie un message synchrone, il est bloqué jusqu’au moment où le destinataire accuse réception du message.

- Lorsqu’un acteur envoie un message asynchrone, il peut continuer son activité, que le destinataire ait reçu (ou pas) le message.

- Un message est récursif, lorsqu’il est envoyé par un acteur à soit même
