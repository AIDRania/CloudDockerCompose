<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/assets/css/bulma.min.css">
        <title>Projet d’évaluation 2018 – 2019 </title>
    </head>
    <body>
        <section style="background-color:#f4c2c2;" class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        Projet d’évaluation 2018 – 2019 
                    </h1>
                    <h2 class="subtitle">
                        Master 2 DataScale
                    </h2>
		<br/>
		   <p>
			realisé par:<br/> AID Rania <br/>
				    Abid Soukaina
		</p>
                </div>
            </div>

        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">L'environement de notre Application </h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect("mysql", "root", "tiger", null);

/* check connection */
                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="http://localhost/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost/test_db.php">Tester la connexion de base de donnée</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
