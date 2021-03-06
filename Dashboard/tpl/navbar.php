<div class="wrapper">
    <?php
    ?>
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    MarieTeam
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li>
                    <a href="notif.php">
                        <i class="pe-7s-bell"></i>
                        <?php
                        $req2 = $db->connection()->prepare('SELECT * FROM notifications');
                        $req2->execute();
                        $rows = $req2->rowCount();
                        if ($rows < 100) {
                            echo "<p>Notification (" .$rows. ")</p>";
                        }
                        else {
                            echo "<p>Notification (99+)</p>";
                        }

                        ?>
                    </a>
                </li>
                <li>
                    <a href="client.php">
                        <i class="pe-7s-user"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li>
                    <a href="bateau.php">
                        <i class="pe-7s-note2"></i>
                        <p>Bateaux</p>
                    </a>
                </li>
                <li>
                    <a href="capitaine.php">
                        <i class="pe-7s-id"></i>
                        <p>Capitaines</p>
                    </a>
                </li>
                <li>
                    <a href="voyage.php">
                        <i class="pe-7s-map-2"></i>
                        <p>Voyages</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Carte</p>
                    </a>
                </li>
                <li>
                    <a href="lesiles.php">
                        <i class="pe-7s-anchor"></i>
                        <p>Île</p>
                    </a>
                </li>
                <li>
                    <a href="liaison.php">
                        <i class="pe-7s-helm"></i>
                        <p>Liaison</p>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <i class="pe-7s-user"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li>
                    <a href="secteur.php">
                        <i class="pe-7s-angle-up-circle"></i>
                        <p>Secteur</p>
                    </a>
                </li>
                <li>
                    <a href="Tarification.php">
                        <i class="pe-7s-diamond"></i>
                        <p>Tarification</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>