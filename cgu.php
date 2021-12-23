<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https : //fonts.googleapis.com/css2? family= Roboto:wght@300 & family= Rokkitt:wght@300;700 &famille= Zilla+Slab:ital,wght@1600 & display=swap"
        rel="stylesheet" />

    <!--début footer = 2 lignes-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <title>TP LE TRAIL</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <header>

                    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
                    <div class="overlay"></div>

                    <!-- The HTML5 video element that will create the background video on the header -->
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                    </video>

                    <!-- The header content -->
                    <div class="container h-100">
                        <div class="d-flex h-100 text-center align-items-center">
                            <div class="w-100 text-white text-bottom">
                                <h1 class="display-3">LE TRAIL</h1>
                                <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
                                <div class="espaceperso">
                                    <a href="Espaceperso.html">Inscription et connexion</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </header>
                <!--fin-->

                <nav class="navbar navbar-light bg-light sticky-top" id="navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Retour en haut de page</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Fermer le menu</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.html">Page d'accueil</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Entraînements
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                            <li><a class="dropdown-item" href="training1.html">Débutants</a></li>
                                            <li><a class="dropdown-item" href="#">Confirmés</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Lexique</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Calculateur
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                            <li><a class="dropdown-item" href="#">Calculateur</a></li>
                                            <li><a class="dropdown-item" href="#">Graphique</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>


                <!--Fin navbar bootstrap-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="main">


                                <div class="text1">
                                    <h2><strong>Mentions légales</strong></h2>

                                    <p>
                                    <h3>1. Conditions générales d’utilisation du site et des services proposés</h3>
                                    <div class="text">
                                        L’utilisation du site www.Letrail/Lamanu.fr implique l’acceptation
                                        pleine et entière des conditions générales d’utilisation ci-après décrites. Ces
                                        conditions
                                        d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment,
                                        les
                                        utilisateurs du site
                                        www.Letrail/Lamanu.fr sont donc invités à les consulter de manière
                                        régulière. Ce site est normalement accessible à tout moment aux utilisateurs.
                                        Une interruption pour raison de maintenance technique peut être toutefois
                                        décidée et les
                                        utilisateurs seront informés des dates et heures de l’intervention. De la même
                                        façon, les mentions légales peuvent être modifiées à tout moment : elles
                                        s’imposent
                                        néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible
                                        afin
                                        d’en
                                        prendre connaissance.</p>


                                        <p>
                                        <h3>2. Description des services fournis</h3>
                                        Ce site a pour objet de fournir une information concernant l’ensemble
                                        des activités de la société. Il s’efforce de fournir sur le site
                                        www.Letrail/Lamanu.fr
                                        des informations aussi précises que possible. Toutefois, il ne pourra être
                                        tenue responsable des omissions, des inexactitudes et des carences dans la mise
                                        à
                                        jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui
                                        fournissent
                                        ces
                                        informations. Tous les informations indiquées sur le site www.Letrail/Lamanu.fr
                                        sont
                                        données
                                        à titre indicatif, et sont susceptibles
                                        d’évoluer. Par ailleurs, les renseignements figurant sur le site
                                        www.Letrail/Lamanu.fr
                                        ne
                                        sont pas
                                        exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées
                                        depuis
                                        leur
                                        mise en ligne.
                                        </p>

                                        <p>
                                        <h3>3. Limitations contractuelles sur les données techniques</h3>
                                        Le site utilise la technologie JavaScript. Le site Internet ne pourra
                                        être tenu responsable de dommages matériels liés à l’utilisation du site. De
                                        plus,
                                        l’utilisateur du site s’engage à accéder au site en utilisant un matériel
                                        récent, ne
                                        contenant pas de
                                        virus et avec un navigateur de dernière génération mis-à-jour
                                        </p>

                                        <p>
                                        <h3>4. Propriété intellectuelle et contrefaçons</h3>
                                        www.Letrail/Lamanu.fr est propriétaire des droits de propriété
                                        intellectuelle ou détient les droits d’usage sur tous les éléments accessibles
                                        sur le
                                        site,
                                        notamment les textes,
                                        images, graphismes, logo, icônes, sons, logiciels. Toute reproduction,
                                        représentation, modification, publication, adaptation de tout ou partie des
                                        éléments
                                        du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf
                                        autorisation
                                        écrite préalable. Toute exploitation non autorisée du site ou de l’un quelconque
                                        des
                                        éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et
                                        poursuivie
                                        conformément aux dispositions des
                                        articles L.335-2 et suivants du Code de Propriété Intellectuelle.
                                        </p>

                                        <p>
                                        <h3>5. Limitations de responsabilité</h3>

                                        Ce site ne pourra être tenue responsable des dommages directs et
                                        indirects causés au matériel de l’utilisateur, lors de l’accès au site
                                        www.Letrail/Lamanu.fr, et
                                        résultant soit de l’utilisation d’un matériel ne répondant pas aux
                                        spécifications
                                        indiquées
                                        au point
                                        4, soit de l’apparition d’un bug ou d’une incompatibilité.
                                        www.Letrail/Lamanu.fr ne pourra également être tenue responsable des dommages
                                        indirects (tels par exemple qu’une perte de marché ou perte d’une chance)
                                        consécutifs à
                                        l’utilisation du www.Letrail/Lamanu.fr.
                                        Des espaces interactifs (possibilité de poser des questions dans l’espace
                                        contact)
                                        sont à la disposition des utilisateurs. www.
                                        Letrail/Lamanu.fr se réserve le droit de supprimer, sans mise en demeure
                                        préalable,
                                        tout contenu déposé dans cet espace qui contreviendrait à la législation
                                        applicable
                                        en France, en particulier aux dispositions relatives à la protection des
                                        données.
                                        Le cas échéant, www.Letrail/Lamanu.fr se réserve également la possibilité de
                                        mettre
                                        en cause la responsabilité civile et/ou pénale de l’utilisateur,
                                        notamment en cas de message à caractère raciste, injurieux, diffamant, ou
                                        pornographique, quel que soit le support utilisé (texte, photographie…)</p>

                                        <p>
                                        <h3>6. Gestion des données personnelles</h3>
                                        En France, les données personnelles sont notamment protégées par la
                                        loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L.
                                        226-13
                                        du
                                        Code
                                        pénal et la Directive Européenne du 24 octobre 1995. A l’occasion
                                        de l’utilisation du site www.Letrail/Lamanu.fr, peuvent êtres recueillies :
                                        l’URL
                                        des liens par l’intermédiaire desquels l’utilisateur a accédé au site
                                        www.Letrail/Lamanu.fr,
                                        le
                                        fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de
                                        l’utilisateur.
                                        En tout
                                        état de cause, ce site ne collecte des informations
                                        personnelles relatives à l’utilisateur que pour le besoin de certains services
                                        proposés par le www.Letrail/Lamanu.fr. L’utilisateur fournit ces informations en
                                        toute
                                        connaissance
                                        de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors
                                        précisé à
                                        l’utilisateur du
                                        www.Letrail/Lamanu.fr l’obligation ou non de fournir ces informations.
                                        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6
                                        janvier
                                        1978
                                        relative à l’informatique, aux fichiers et aux libertés, tout utilisateur
                                        dispose
                                        d’un droit d’accès, de rectification et d’opposition aux données personnelles le
                                        concernant,
                                        en
                                        effectuant sa demande écrite et signée, accompagnée d’une copie du titre
                                        d’identité avec
                                        signature du titulaire de la pièce, en
                                        précisant l’adresse à laquelle la réponse doit être envoyée.
                                        Aucune information personnelle de l’utilisateur du www.Letrail/Lamanu.fr n’est
                                        publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un
                                        support
                                        quelconque à des tiers.
                                        Seule l’hypothèse du rachat de ce site et de ses droits permettrait la
                                        transmission
                                        des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la
                                        même
                                        obligation de conservation et de
                                        modification des données vis à vis de l’utilisateur du site
                                        www.Letrail/Lamanu.fr.
                                        Le site n’est pas déclaré à la CNIL car il ne recueille pas d’informations
                                        personnelles.
                                        Les bases de données sont protégées par les dispositions de la loi du 1er
                                        juillet
                                        1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection
                                        juridique
                                        des
                                        bases de données.</p>

                                        <p>
                                        <h3>7. Liens hypertextes et cookies</h3>
                                        Ce contient un certain nombre de liens hypertextes vers d’autres
                                        sites, mis en place avec l’autorisation de www.Letrail/Lamanu.fr.
                                        Cependant, ce site n’a pas la possibilité de vérifier le contenu des sites ainsi
                                        visités, et n’assumera en conséquence aucune responsabilité de ce fait.
                                        La navigation sur le www.Letrail/Lamanu.fr est susceptible de provoquer
                                        l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
                                        Un cookie est un fichier de petite taille, qui ne permet pas l’identification de
                                        l’utilisateur, mais qui enregistre des informations
                                        relatives à la navigation d’un ordinateur sur un site. Les données ainsi
                                        obtenues
                                        visent à faciliter la navigation ultérieure sur le site, et ont également
                                        vocation à
                                        permettre diverses mesures de fréquentation.
                                        Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à
                                        certains services.
                                        L’utilisateur peut toutefois configurer son ordinateur de la manière suivante,
                                        pour
                                        refuser l’installation des cookies :
                                        <ul>
                                            <li>Sous Internet Explorer :
                                                onglet outil (pictogramme en forme de rouage en haut a droite) / options
                                                internet. Cliquez sur
                                                Confidentialité et choisissez Bloquer
                                                tous les cookies. Validez sur Ok.</li>
                                            <li>Sous Firefox : en haut de la fenêtre du navigateur, cliquez
                                                sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur
                                                l’onglet Vie privée.
                                                Paramétrez les Règles de conservation sur : utiliser les paramètres
                                                personnalisés pour l’historique. Enfin décochez-la pour désactiver les
                                                cookies.</li>
                                            <li>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme
                                                de
                                                menu
                                                (symbolisé par un rouage). Sélectionnez
                                                Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section
                                                «
                                                Confidentialité »,
                                                cliquez sur Paramètres de contenu. Dans la section « Cookies », vous
                                                pouvez
                                                bloquer les cookies.</li>
                                            <li>Sous Chrome : Cliquez en haut à
                                                droite du navigateur sur le pictogramme de menu (symbolisé par trois
                                                lignes
                                                horizontales).
                                                Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés.
                                                Dans
                                                la section «
                                                Confidentialité », cliquez sur préférences.
                                                Dans l’onglet « Confidentialité », vous pouvez bloquer les cookies.</li>
                                            </p>
                                            <p>
                                            <h3>8. Droit applicable et attribution de juridiction</h3>
                                            <div class="text">Tout litige en relation avec l’utilisation du
                                                www.Letrail/Lamanu.fr
                                                est soumis au droit français. Il est fait attribution exclusive de
                                                juridiction aux
                                                tribunaux
                                                compétents de Paris.</div>

                                            <p>
                                            <h3>9. Les principales lois concernées</h3>
                                            <div>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la
                                                loi n°
                                                2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux
                                                libertés. Loi
                                                n°
                                                2004-575
                                                du 21 juin 2004 pour la confiance dans l’économie numérique.</div>
                                            </p>

                                            <p>
                                            <h3>10. Lexique</h3>
                                            <div> Utilisateur : Internaute se connectant, utilisant le site
                                                susnommé.
                                                <p>Informations personnelles : « les informations qui permettent, sous
                                                    quelque forme
                                                    que ce soit, directement ou non, l’identification des personnes
                                                    physiques
                                                    auxquelles
                                                    elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier
                                                    1978).
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-----------------Début footer------------------>
                    <div class="footer-dark ">

                        <footer>
                            <div class="container">
                                <div class="row ">
                                    <div class="col-sm-6 col-md-3 item text-center ">
                                        <h3>Services</h3>
                                        <ul>
                                            <li><a href="index.html">Page d'accueil</a></li>
                                            <li><a href="# ">C.G.U</a></li>
                                            <li><a href="# ">Plan du site</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 item text-center ">
                                        <h3>About</h3>
                                        <ul>
                                            <li><a href="# ">Company</a></li>
                                            <li><a href="# ">Team</a></li>
                                            <li><a href="# ">Careers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 item text ">
                                        <h3>Company Name</h3>
                                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem
                                            lacus.
                                            Ut
                                            vehicula
                                            rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget
                                            velit
                                            pulvinar
                                            dictum
                                            vel in justo.</p>
                                    </div>
                                    <div class="col item social "><a href="# "><i
                                                class="icon ion-social-facebook "></i></a><a href="# "><i
                                                class="icon ion-social-twitter "></i></a><a href="# "><i
                                                class="icon ion-social-snapchat "></i></a><a href="# "><i
                                                class="icon ion-social-instagram "></i></a></div>
                                </div>
                                <p class="copyright ">Company Name © 2018</p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p "
        crossorigin="anonymous "></script>

    <!--------------Fin footer---------------->

</body>

</html>