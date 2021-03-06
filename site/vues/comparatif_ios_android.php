<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <title>Plateformes de développement Android</title>
</head>

<body>

<nav class="transparent">
    <div class="nav-wrapper">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10">
                <a href="../index.html" class="brand-logo">Mobile modeling</a>
                <a href="#!" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="page1.html">Comparatif<i class="tiny material-icons right">equalizer</i></a></li>
                    <li><a href="page2.html">Concept UML <i class="material-icons right">swap_calls</i></a></li>
                    <li><a href="plateform_dev.html">Platerformes de dev <i class="material-icons right">web</i></a></li>
                    <li><a href="outils.html">Outils de Maquette<i class="material-icons right">build</i></a></li>
                </ul>
            </div>
            <div class="col s1"></div>
        </div>
    </div>

    <ul id="slide-out" class="side-nav">
        <li><a href="page1.html">Comparatif</a></li>
        <li><a href="page2.html">Concept UML</a></li>
        <li><a href="plateform_dev.html">Platerformes de dev</a></li>
        <li><a href="outils.html">Outils de modélisation IHM</a></li>
    </ul>
</nav>

	

    <div class="container main">
        <div class="row">
            <div class="col s12">
                <div class="entry-content z-depth-1">
                    <!-- CONTENU DE LA PAGE -->
                    <center><h3>Comparaison entre Android et iOS</h3></center>
					</br>
                    <h4>Quelles sont les différences entre le développement sur Android et iOS ?</h4>
					</br>
                    <p class="flow text">
                        Créer des applications pour Android et iOS peut sembler similaire aux personnes non averties, cependant chacun de ces deux systèmes d’exploitation a ses propres particularités.
                    </p>
					<p class="flow text">
                        Il existe de nombreuses différences entre le développement d’applications entre Android et iOS, tant dans les bases techniques du développement d’une application que dans le processus de création d’une application elle-même. Et pas seulement au niveau technique du développement mais aussi en termes de conception et de stratégie marketing de l’application.
					</p>
					<p class="flow text">
						En d’autres termes, tout le concept d’une application dépendra du système d’exploitation choisi.
					</p>
					</br>
                    <!-- IMAGE -->
                    <div class="row">
                        <!-- Placez chaque image dans une div de classe 'col s<t>' où 't' est un chiffre de 1 à 12, 12 représentant 100% de la largeur -->
						<div class="col s6"><img class="materialboxed" width="650" src="../img/android-vs-ios.png"></div>
                    </div>
                    <br>
                    <center><h5>Tableau comparatif</h5></center>
					</br>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Android</th>
                                <th>iOS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><b>IDE</b></td>
                                <td>Android Studio, NetBeans IDE, Visual Studio Code</td>
                                <td>Xcode, Appcode, Atom</td>
                            </tr>
                            <tr>
                                <td><b>Développeur</b></td>
                                <td>Google</td>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <td><b>Open Source</b></td>
                                <td>Oui</td>
                                <td>Non</td>
                            </tr>
							<tr>
                                <td><b>Personnalisation</b></td>
                                <td>Très fortement personnalisable</td>
                                <td>Très peu personnalisable sauf si l'appareil est jailbreaké</td>
                            </tr>
							<tr>
                                <td><b>Langage de programmation</b></td>
                                <td>C, C++, Java, C#, HTML</td>
                                <td>C, C++, Objective-C, Swift, HTML</td>
                            </tr>
							<tr>
                                <td><b>Store</b></td>
                                <td>Google Play</td>
                                <td>Apple Store</td>
                            </tr>
							<tr>
                                <td><b>Dernière version Stable</b></td>
                                <td>11.0.x</td>
                                <td>14.0.1</td>
                            </tr>
							<tr>
                                <td><b>Support physique</b></td>
                                <td>Les téléphones utilisent une surcouche d’Android. La surcouche “stock”,</br>est la forme la plus simple d’Android, fourni par Google et est utilisée notamment par Nexus</td>
                                <td>iPhone, iPad, Apple TV, iPod</td>
                            </tr>
							<tr>
                                <td><b>Navigateur (default)</b></td>
                                <td>Google Chrome</td>
                                <td>Safari</td>
                            </tr>
							<tr>
                                <td><b>Système de paiement</b></td>
                                <td>Android Pay</td>
                                <td>Apple Pay</td>
                            </tr>
							<tr>
                                <td><b>Points positifs</b></td>
                                <td>OS le plus utilisé au monde, Reste plus tourné développeur, Langage de programmation plus accessible</td>
                                <td>En pleine expansion, Structure physique unique</td>
                            </tr>
							<tr>
                                <td><b>Points négatifs</b></td>
                                <td>Mise à jour lente, Surcouches  constructeurs</td>
                                <td>Accessibilité onéreuse, Système d'exploitation fermé</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <!-- NE MODIDIEZ RIEN APRES CE COMMENTAIRE -->
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer grey grey-text lighten-2 text-darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5>Mobile modeling</h5>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5>Menu</h5>
                    <ul>
                        <li><a href="page1.html">Comparatif</a></li>
                        <li><a href="page2.html">Concept UML</a></li>
                        <li><a href="plateform_dev.html">Platerformes de dev</a></li>
                        <li><a href="outils.html">Outils de Maquette</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey-text text-darken-1">
            <div class="container">
                Made by Groupe Jaune !
            </div>
        </div>
    </footer>	
	
</body>

</html>