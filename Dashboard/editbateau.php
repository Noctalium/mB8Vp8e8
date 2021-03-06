<?php
require("../global.php");
if (isset($_SESSION['loginAdmin'])){
    ?>
    <!doctype html>
    <html lang="en">
    <?php
    require("tpl/header.php");
    require("tpl/navbar.php");
    ?>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <body>
    <div class="main-panel">
        <?php require('tpl/navbartop.php');
        $req = $db->connection()->prepare ('SELECT * FROM bateau WHERE idBateau = ' . $_GET['id']);
        $req->execute();
        $rows = $req->rowCount();
    if ($rows != 0) {
        for ($i = 1; $i <= $rows; $i++) {
            $data = $req->fetch();
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <form action="editbateausql.php" method="post">

                                    <input type='hidden' name="idBateau" class='form-control' value="<?= $data['idBateau']?>">

                                    <div class="form-group">
                                        <label for="nomBateau" class="col-form-label">Nom</label>
                                        <input type="text" value="<?= $data['nom'] ?>" class="form-control" placeholder=" "
                                               name="nomBateau" id="nomBateau" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="typeBateau" class="col-form-label">Type</label>
                                        <input type="text" value="<?= $data['typeBateau'] ?>" class="form-control"
                                               placeholder=" " name="typeBateau" id="typeBateau" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="capaciteBateau" class="col-form-label">Capacité</label>
                                        <input type="text" value="<?= $data['capaciteBateau'] ?>" class="form-control"
                                               placeholder=" " name="capaciteBateau" id="capaciteBateau" required>
                                    </div>

                                    <br>
                                    <div class="right-w3l">
                                        <input type="submit" class="form-control serv_bottom" id="edit-btn" value="Modifier">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
        ?>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
            </p>
        </div>
    </footer>


    </body>
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="assets/js/demo.js"></script>


    <!--Script ajax pour la modif + modals-->-->
<!--    <script>-->
<!--        $("#form_edit_user").submit(function () {-->
<!--            let id = $('input[name="user_id"]').val();-->
<!--            $.ajax({-->
<!--                type: "POST",-->
<!--                url: "editusersql.php?id="+id,-->
<!--                data: $('#form_edit_user').serialize(),-->
<!--                success:function(error) {-->
<!--                    if (error === "error") {-->
<!--                        console.log("erreur");-->
<!--                    }-->
<!--                    else {-->
<!--                        console.log("ok");-->
<!--                    }-->
<!--                },-->
<!--                error:function(){-->
<!--                    console.log("erreur");-->
<!--                }-->
<!--            });-->
<!--            return false;-->
<!--        })-->
<!--    </script>-->




    </html>
<?php } else {
    header('Location: login.php?success=2');
} ?>