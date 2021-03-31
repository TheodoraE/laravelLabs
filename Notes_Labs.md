# Notes Labs
Adresse mail : projet.codingschool@gmail.com
On a déjà le template

Possibilité de modifier le contenu du site -> faire un BO complet

On ne veut pas de la page élément 

Dans tous les titres on veut des mots en vert

# Home
Carousel, mettre une image principale (possibilité de la changer), on veut pouvoir les bouger comme on veut et ça doit défiler tout seul. (toujours mettre un texte lié à la slide et donc à l'image). Le logo reste toujours dessus et ne bouge pas. 

Avoir qu'une seule image logo pour la navbar et sur le carousel (modifier l'image pour qu'elle soit plus petite)

Sur la page principale on veut trois services qui s'affichent de manière aléatoire parmi tous les services. 
A chaque fois titre, description, icon

En dessous un titre et deux paragraphes modifiable. Soulignement en vert, il faut qu'on puisse choisir quel mot sera mit en vert. 

Button browse qui doit rediriger vers l'équipe

La vidéo vient de youtube et doit pouvoir la changer comme on veut. Quand on clique 

Testimonial -> dans titre on veut des mots possible à souligner en vert, 6 testi ça sera les derniers que l'ont a reçu.  Ca doit venir d'un email que l'on aurait reçu image du testi on ne change pas. 

Service -> 9 services de manière aléatoire, pour le titre pareil on doit pouvoir choisir ce qui sera en vert. Le browse dans service il redirige vers la page Service

Equipe -> Au milieu doit toujours afficher le CEO et à gauche et à droite deux membres aléatoires de l'équipe. Doit pouvoir rajouter des nouveaux membres de l'équipe. 

Inscription -> Il faut faire une page d'inscription (tout le monde peut s'inscrire) avec leur =s l'équipe (pour les fonctions on doit pouvoir choisir dans un select 3 fictifs et pouvoir en rajouter), photo & brève description de soi-même -> il faut en tant qu'admin on puisse valider ou non l'appartenance à l'équipe et si c'est le cas il pourra apparaître dans cette partie équipe.
(accessible uniquement avec un URL)

Are you ready to stand out ? -> Modifier tout le contenu, que le Browse soit un btn d'inscription à la newsletter -> donne un msg de validation sur le site + 1 email qui leur confirme leur inscription à la newsletter

Formulaire -> Il faut limiter les choix de sujets que l'on peut choisir nous-même (on doit pouvoir dans le BO changer les sujets d'envoi de mail) -> si un seul ça ne doit pas être cliquable. Ça doit être possible de changer le mail qui va recevoir les mails 

Contact us -> tout doit être modifiable, les addresses, email, ect sauf les titres 

Footer -> Pouvoir changer tout le footer. 

# Services
Dans cette page, on a les 9 derniers services, on doit faire un pagination pour voir tous les services
On enlève le Browse

Partie avec tel -> on veut les 6 derniers services. L'image on ne doit pas savoir la changer. Le browse redirige vers la section suivante. 

Blog -> trois deniers articles qu'on met. 

Newsletter -> same que sur page d'accueil

Contact et form on réutilise le même. 

# Blog
Liste articles -> On doit pouvoir rajouter un blog à chaque fois. Titre, etc on a une brève description qui doit être un morceau de l'article en question. Chaque article à une seule catégorie.  Par contre les articles ont plusieurs tags (on affiche que 2 tags même si ils y en a plusieurs). + les commentaires de l'articles. C'est du plus récent au plus ancien Chaque blog à une image, une date. Catégorie et tags sont cliquable et nous ramène vers tous les tags et catégories de celui-là en particulier. (tout doit être modifiable sauf date de création). btn view More pour voir tout l'article. Max trois articles par page

Faire une pagination avec tous les articles. 

Barre de recherche -> Doit donner une liste d'articles (juste les titres) dont le mot qu'on a demandé apparaît dans le titre, pas dans le contenu. Les titres doivent être cliquable pour re diriger vers l'article.

Catégorie -> si on clique sur une catégorie ça filtre les articles et niveau visuel ça reste comme la page de base mais juste ceux liés à la catégorie. 

Instagram -> on enlève

Tags -> même système que pour les catégories. 

Quote -> on enlève

Add -> on enlève

Articles -> Dans la page article on peut écrire des commentaires. Pour en faire on doit mettre son nom, son name, son sujet, son message. On a aussi l'auteur qui s'affiche dans cette page article, on affiche sa photo , son nom, son role, et sa description. 

Commentaire -> pas d'image, pas de photo. Juste nom, email + message -> il faut un endroit où on valide les messages -> c'est le Webmaster qui approuve les commentaires (tout le monde peut laisser des commentaires). Qu'on ait juste le nom, prénom + date à laquelle ça a été fait d'affiché (pas de reply). Si un membre est connecté on doit pas reprendre leurs infos vu qu'on les as déjà donc eux peuvent juste laisser un message. (+ si c'est un membre on veut afficher sa photo)


# Contact
Doit avoir une map qui correspond à l'adresse. Possibilité de changer l'adresse de la map dans le BO. 

Le contact en dessous reste le même. 

# Roles
Admin : 
- peut changer les rôles
- peut faire tout ce que les rôles d'avant font (donc peut tout faire)
Webmaster :
- peut modifier les articles
- accepter les personnes qui s'inscrivent et valide leur fonction
- peut faire tout comme l'admin mais juste pas donner de role Webmaster / Admin
Rédacteur :
- peut écrire des articles
Membres :
- tout le monde est automatiquement membre

Tout le monde à une fonction -> CEO, Developpeur, designer, etc

# BO
Une page mofier contenu 
Une page avec toutes les personnes qui sont inscrites à la newsletter juste avec les emails -> voir combien ils sont. On ne peut inscrire qu'une fois son adresse mail pour la newsletter. 

Via au lien BO, les utilisateurs peuvent y accéder et modifier son profil. -> rédacteurs peuvent accéder à leurs articles et les modifier. 


Si on supprime un article ils doivent se soft_delete. 
