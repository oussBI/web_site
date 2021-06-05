<!DOCTYPE html>
<html>

<head>
    <title>Expérience Pro.</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_index.css">
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php include("menu.php");?>
    <div class="exp">
        <div class="exp-contenu">
            <table>
                <caption>Expériences professionnelles</caption>
                    <thead>
                        <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Année</th>
                        <th scope="col">Durée</th>
                        <th scope="col">Poste</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <th class = "c4d" scope="row" onclick="c4d()"> Clou4Dev </th>
                        <td>2018</td>
                        <td>4 Mois</td>
                        <td>Développeur WEB (Stage)</td>
                    </tr>
                    <script>
                            function c4d() {
                                document.write("<h3> Élaboration du business plan et rédaction du cahier des charges : recueil du besoin auprès de la Direction Générale, revue de la navigation et de l’expérience utilisateur</h3>")
                                document.write("<h3> Maquettage graphique de l’interface utilisateur, puis validation auprès de la Direction Générale</h3>")
                                document.write("<h3> Intégration des éléments graphiques</h3>")
                                document.write("<h3> Développement complet du site web et des services annexes</h3>")
                                document.write(" <img src='static/c4d.png' width='500' height='600'> ")
                                document.write("<h3><a href='experience.php'> Retour </a></h3>")
                        }
                    </script>
                    <tr>
                        <th class = "ratp" scope="row" onclick="ratp()" >RATP</th>
                        <td>2019</td>
                        <td>6 mois</td>
                        <td>Consultant BIG DATA</td>
                    </tr>
                    <script>
                            function ratp() {
                                document.write("<h3> Participation à l’alimentation du Data Lake Hadoop</h3>")
                                document.write("<h3> Études et choix des outils des flux de données</h3>")
                                document.write("<h3> Modélisation des données (gestion des tables sur Hive)</h3>")
                                document.write("<h3> Stockage des données sur Hive</h3>")
                                document.write("<h3> Création de pipeline de data via PySpark</h3>")
                                document.write("<h3> Traitement et transformation des données avec Python, Pyspark et Hive</h3>")
                                document.write(" <img src='static/ratp.png' width='500' height='600'> ")
                                document.write("<h3><a href='experience.php'> Retour </a></h3>")
                            }
                    </script>
                    <tr>
                        <th class="wevops" scope="row" onclick="wevops()">WEVOPS</th>
                        <td>2020</td>
                        <td>15 mois</td>
                        <td>Consultant BIG DATA | Formateur</td>
                    </tr>
                    <script>
                        function wevops(){
                                document.write("<h1> Consultant Formateur </h1>")
                                document.write("<h3> Définition du contenu et rédaction du plan de formation des différents langages et outils</h3>")
                                document.write("<h3> Déclinaison du plan par profil utilisateur en fonction du niveau de maitrise requis</h3>")
                                document.write("<h3> Animation des sessions de formation (parfois jusqu’à 1 semaine) auprès des différents acteurs (groupe de 20 personnes environ)</h3>")
                                document.write("<h3> Intervention sur les modules de data science (aide à la montée en compétences des utilisateurs sur les technos, explication, mises en cas pratiques et assistance si nécessaire)</h3>")
                                document.write("<h3> Accompagnement des utilisateurs dans le choix de leur projet de soutenance (étude de faisabilité en fonction du temps disponible de réalisation, des profils des acteurs…)</h3>")
                                document.write("<h3> Participation au jury de soutenance de l’ensemble des projets</h3>")
                                document.write(" <img src='static/formation.jpg' width='500' height='600'> ")
                                document.write("<h3><a href='experience.php'> Retour </a></h3>")

                                document.write("<h1> Développeur WEB | Data </h1>")
                                document.write("<h3> Constitution des données sources : choix des différentes plateformes d’emplois à partir desquelles on collecte les données (via scrapping)</h3>")
                                document.write("<h3> Définition de l’architecture temps réel de l’application</h3>")
                                document.write("<h3> Réalisation des pipelines d’ingestion de données via Python (développement de pipelines, mise en place de filtres ad hoc…)</h3>")
                                document.write("<h3> Structuration et analyse des données collectées sous forme de Datasets (profil, expérience, salaire) pour dégager des tendances de rémunération par profil</h3>")
                                document.write("<h3>Réalisation de Viz sous Matplot et mise en forme des Datasets</h3>")
                                document.write(" <img src='static/scrap.png' width='500' height='600'> ")
                                document.write("<h3><a href='experience.php'> Retour </a></h3>")
                        }
                    </script>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" colspan="2">TOTAL EXP</th>
                        <td colspan="2">2 ANS 3 MOIS</td>
                    </tr>
                </tfoot>
            </table>
            </div>
    </div>
    
</body>

</html>