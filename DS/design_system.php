<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="menu.js"></script>
    <link rel="stylesheet" href="style_ds.css">
    <title>Design System</title>
</head>
<body>
    <?php include("./navbar.php"); ?>
    <article>

        <section class="section1">
            <div class="container_flex">
                <div class="container_text_white_titre">
                    <h1>Un projet<br>à long terme</h1>
                    <p>Nora & Dorian</p>
                </div>
                <img class="container_img" src="../images/logo_ds.svg" alt="Logo Design System">
            </div>
        </section>
    
        <section class="section2">
            <div class="container_flex">
                <img class="logo_frontify" src="../images/logo_frontify.svg" alt="Logo Frontify">
                <div class="container_text">
                    <h1>Notre besoin</h1>
                    <p>
                        Régulièrement, nous faisons appel à des <strong>agences</strong> pour qu’il nous réalise des pages web du site Macif.fr. 
                        Il est donc important pour nous d’avoir une charte graphique bien établie, mais surtout un <strong>design system</strong>, pour permettre de <strong>guider nos créateurs.</strong><br><br>
                        Guide utile pour nos designers, developpeurs, mais aussi prestataires, il est donc un  élément indispensable à la constuction du nouveau site Macif.fr.<br><br>
                        Pour se faire, <strong>David notre PO sur ce projet,</strong> à determiner d’utiliser <strong>Frontify,</strong>
                        ce qui nous permettra <strong>d’accorder des accès</strong> à différente partie du design system en <strong>fonction du besoin de la personne.</strong>
                    </p>
                </div>
            </div>
        </section>
    
        <span class="sep"> </span>
    
        <section class="section3">
            <div class="container_flex">
                <div class="container_text">
                    <h2>Couleurs</h2>
                    <p>
                        Même si les couleurs primaires et secondaires ont déja validé par le studio de communication, nous devions <strong>determiner celles de navigation, d’alertes ou encore de structure.</strong>
                        Avant de rechercher les couleurs que nous allions fixer, il etait important de <strong>regrouper les besoins</strong> du site (message d’erreur/validation/information) et <strong>les utilisations et fonctions</strong> (bloc d’information/bouton/picto/cards).<br><br>
                        Une fois le nombre de couleurs que nous avions besoin d’avoir et les couleurs determiné, <strong>des tests ont été réalisé afin de vérifier l’accessibilité et la cohérence</strong> avec la charte graphique.<br><br>
                        Le fait d’avoir une <strong>bonne accessibilité</strong> est pour nous très important. Nous sommes une mutuelle et devons penser à toutes les personnes. <strong>Les malvoyants et autres personnes en situation de handicap sont au coeur de cette préocupation.</strong>
                        Nous avons donc fait attention aux <strong>couleurs trop vive ou ayant un mauvais contraste</strong>, mais aussi aux <strong>balises Hn</strong> permettant la navigation au clavier.
                    </p>
                </div>
                <div class="container_couleurs">
                    <h4>Navigation</h4>
                    <span class="sep_section3"></span>
                    <img src="../images/code_couleur_navigation.svg" alt="Code couleurs">
                    <span class="sep_section3"></span>
                    <p>Les couleurs de navigation sont utilisées pour les liens hypertextes ou boutons.</p>
                </div>
            </div>
        </section>
    
        <section class="section4">
            <div class="container_flex">
                <div class="container_couleurs">
                    <h4>Structures</h4>
                    <img src="../images/structure_couleur.svg" alt="code couleur structures">
                    <p>
                        Majoritairement utilisé pour la typographie, les contours, sérapateurs, ombres, effets de transparence ou encore les supperpositions d’aplats en transparence. 
                    </p>
                </div>
                <div class="container_couleurs">
                    <h4>Alertes</h4>
                    <img src="../images/alertes_couleur.svg" alt="code couleur alertes">
                    <p>
                        Des couleurs spécifiques sont appliquées aux 4 niveaux d'alerte présents sur l'interface : danger (rouge) , warning (orange), info (bleu), succès (vert).
                        Les couleurs claires sont destinées aux fonds, les foncées aux titres et icônes.
                    </p>
                </div>
            </div>
        </section>
    
        <section class="section5">
            <div class="container_flex">
                <img class="container_img" src="../images/img_graph_typo.svg" alt="Graphique Typologies">
                <div class="container_text">
                    <h2>Typographies</h2>
                    <p>
                        Déjà travaillé par le studio de communication, nous avions  <strong>typographies imposées</strong> : la <strong>Source Sans Pro</strong> pour le texte courant et la <strong>Monserrat</strong> pour les titres. <br><br>
                        Notre rôle ici n’était donc pas de rechercher un style mais de <strong>réflechir à leurs intégration</strong> dans nos pages; <strong>tailles, hauteurs de ligne, marges hautes et basses.</strong><br><br>
                        Lors de nos premiers <strong>tests en situation réelle,</strong> nous nous sommes rendu compte de plusieurs porblèmes d’intégration avec le site actuel,
                        alors que la typographie n’avait pas changé, seulement les tailles, marges et hauteur de ligne.
                        De ce fait nous avons établie <strong>une User Story par problème rencontré,</strong> afin de les résoudre a la prochaine itération.
                    </p>
                </div>
            </div>
        </section>
    
        <section class="section6">
            <div class="container_flex">
                <div class="container_text_white">
                    <h3>Tailles et intégration</h3>
                    <p>
                        Pour faciliter le travail des developpeurs, nous avons choisi <strong>de definir les tailles en px mais aussi en rem.</strong>
                        En effet, cela permet d’avoir <strong>une taille variable en fonction du zoom appliqué sur l’écran</strong> et se base toujours sur la taille défini à la base.
                        De ce fait, <strong>relie les préférences de notre site à celui du navigateur de l’internaute.</strong> Notre référence est 1rem pour 16 pixel, ce qui equivaut à notre texte courant.
                    </p>
                </div>
                <img class="container_img" src="../images/img_taille_integration.svg" alt="Tableau des tailes d'intégration">
            </div>
        </section>
        
    
        <section class="section7">
            <div class="container_flex">
                <div class="container_text">
                    <h2>Cards</h2>
                    <p>
                        Élément important dans la composition de notre site : <strong>les cards.</strong> Nous avons décidé d’utiliser ce type de composant pour rendre <strong>l’interface plus interactif.</strong>
                        La difficulté principal est celle de l’intégration. En effet comme nous utilisons <strong>Jahia</strong> (CMS mais avec contribution de nos developpeurs),
                        nous avons la possiblité d’intégrer les composants facilement dans nos pages. <br>
                        Cependant, <strong>celui-ci est complexe</strong> comme nous avons décidé de le décliner en <strong>plusieurs tailles</strong> (defini par un nombre de colonne)
                        mais aussi avec un <strong>choix de couleurs</strong> important et des des <strong>interactions diverses</strong> (liens hypertextes ou bouton). <br>
                        La contrainte liée à son developpement est la multitude du nombre de card possible, avec la taille, le texte, le bouton/lien ou encore la photo.
                    </p>
                </div>
                <img class="container_img" src="../images/img_cards.svg" alt="Image cards">
            </div>
        </section>
    
        <section class="section8">
            <div class="container_flex">
                <img class="container_img" src="../images/img_compo_cards.svg" alt="Composition cards">
                <div class="container_text_white">
                    <h3>Composition</h3>
                    <p>
                        Voici un exemple des cards que nous avons choisi de developper. <br>
                        Possibilité de choisir entre les <strong>différentes tailles</strong><br>(determiner grâce aux nombres de colonnes utilisés),
                        <strong>de la proportion de la photo</strong> (la moitier/un tier/un quart) ou encore du <strong>type d’interaction</strong> (bouton/lien).
                    </p>
                </div>
            </div>
        </section>
    
        <section class="section9">
            <div class="container_flex">
                <img class="container_img" src="../images/img_bouton.svg" alt="Images boutons">
                <div class="container_text">
                    <h3>Boutons</h3>
                    <p>
                        Élément <strong>indispensable à un design system</strong> : les boutons. Avec une utilisation sur pratiquement toutes nos pages,
                        il était indispensable de les réfléchir intelligemment. <br><br>
                        Après avoir hésiter à réaliser un bouton primaire, un secondaire,
                        mais aussi un CTA, nous en sommes resté une configuration sans CTA. <br><br>
                        En revanche nous avons laissé la possibilité d’ajouter un pictogramme à droite ou à gauche du texte.
                        Cela nous permettra de mettre en situation le bouton, et de l’associer à un action particulière. <br><br>
                        Étant dans le domaine de l’assurance, il était important pour nous d’avoir un <strong>bouton sinistre,</strong>
                        permettant à l’utilisateur de se diriger rapidement vers des solutions.
                    </p>
                </div>
            </div>
        </section>
    
        <section class="section10">
            <div class="container_flex">
                <div class="container_text_white">
                    <h3>Déclinaison</h3>
                    <p>
                        Nous avons pris le parti de <strong>décliner nos boutons</strong> sous la forme d’un <strong>pictogramme seul et rond.</strong>
                        Ils nous seront utiles pour  un <strong>“floating action button”</strong> ou encore mettre nos <strong>réseaux sociaux</strong> dans le footer.
                    </p>
                </div>
                <img class="container_img" src="../images/declinaison_img.svg" alt="Image déclinaison">
            </div>
        </section>
    </article>

    <footer>
        <div class="footer_p">
            <p>
                Nombreux sont les composants que nous devons défnir pour <strong>enrichir et finaliser notre design system.</strong>
                Que ce soit les dates pickers, accordéons, modals, blocs de messages, points de ruptures, carrousels ou encore loaders.
                Nous ne l’avons pas terminé, et <strong>une équipe est en train de se construire</strong> vue la quantité de travail à réaliser pour <strong>finaliser le projet.</strong>
            </p>
        </div>
    </footer>
    <!-- <br><br><br><br><br><br><br><br><br><br><br><br> -->
</body>
</html>