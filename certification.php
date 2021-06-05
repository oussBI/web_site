<!DOCTYPE html>
<html>

<head>
    <title>Certifications</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_index.css">
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php include("menu.php");?>
    <div class="exp">
        <div class="exp-contenu">
            <table>
                <caption>Education</caption>
                    <thead>
                        <tr>
                        <th scope="col">Etablissement</th>
                        <th scope="col">Année</th>
                        <th scope="col">Certification</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <th class = "ms" scope="row" onclick="ms()"> Microsoft </th>
                        <td>2021</td>
                        <td>DP-900</td>
                    </tr>
                    <script>
                        function ms() {
                            document.write("<img src='static/dp900.jpg'>")
                            document.write("<br> <a href='https://www.credly.com/badges/0ee4ac34-e7cb-476a-bad7-99eb1dc6cd47?source=linked_in_profile'> Verify Certification </a>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>

                    <tr>
                        <th class = "oc" scope="row" onclick="oc()"> OC </th>
                        <td>2020</td>
                        <td>Ruby on Rails</td>
                    </tr>
                    
                    <script>
                        function oc() {
                            document.write("<img src='static/ruby.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>

                    <tr>
                        <th class = "m2i" scope="row" onclick="m2i()" > M2i </th>
                        <td>2019</td>
                        <td>Expertise Big Data</td>
                    </tr>
                    
                    <script>
                        function m2i() {
                            document.write("<img src='static/bigdata.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>") 
                        }
                    </script>

                    <tr>
                        <th class = "helsinki" scope="row" onclick="helsinki()"> Univ. Helsinki </th>
                        <td>2019</td>
                        <td>Elements of AI</td>
                    </tr>
                    
                    <script>
                        function helsinki() {
                            document.write("<img src='static/ai.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>

                    <tr>
                        <th class = "ibm" scope="row" onclick="ibm()"> IBM University </th>
                        <td>2019</td>
                        <td>Scala 101</td>
                    </tr>
                    <script>
                        function ibm() {
                            document.write("<img src='static/scala.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>

                    <tr>
                        <th class = "epfl" scope="row" onclick="epfl()"> EPFL </th>
                        <td>2019</td>
                        <td>Big Data Analysis with Spark Scala</td>
                    </tr>
                    <script>
                        function epfl() {
                            document.write("<img src='static/spark.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>

                    <tr>
                        <th class = "udemy" scope="row" onclick="udemy()"> Udemy </th>
                        <td>2018</td>
                        <td>Expertise MongoDB</td>
                    </tr>

                    <script>
                        function udemy() {
                            document.write("<img src='static/mongodb.png'>")
                            document.write("<br> <h1> <a href='certification.php'> Retour </a> </h1>")
                        }
                    </script>
                  
                </tbody>
            </table>
            </div>
    </div>
    
</body>

</html>