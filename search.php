<?php
//if (isset($_GET) && !empty($_GET))
//
require("global.php");

?>

<html lang="zxx">
<head>
    <title>Voyages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Expedition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<div class="inner-banner">
    <!-- header -->

    <?php
    require("tpl/header.php");

    ?>

    <!-- //header -->
</div>
<!-- //banner -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Recherche</li>
    </ol>
</nav>



    <!--TEMPLATE-->
Debut Template

<div style="background: none; min-height: calc(100vh - 615px); margin-bottom: 15px; padding: 15px 2.5%;max-width: 750px;">

    <!--TEMPLATE LE TRAJET-->

    <div class="lieu">
        Lille blabla > V2 Auchan
    </div>

    <div class="ligne">
        <div class="duree">
            0115 ---------------------> 1020
        </div>
        <div class='prix'>
            bouton
        </div>
    </div>
    <div class="ligne">
        <div class="duree">
            0115 ---------------------> 1020
        </div>
        <div class="prix">
            bouton
        </div>
    </div>
</div>

    <style>
        *
        {
            transition: all 0.35s ease-in-out;
        }
        .ligne {
            margin: 5px 0;
            background: #dadfdd;
            width: 100%;
            border-radius: 2px;
            border: none;
            color: black;
            min-height: 115px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 10px 20px;
            text-align: center
        }
        .lieu {
            /*margin: top right bottom left;*/
            margin: 5px 0;
            background: #dadfdd;
            max-width: 450px;
            border-radius: 2px;
            border: none;
            padding: 25px 27.5px;
            color: black;
            height: 115px;
            line-height: 75px;
        }
        .duree
        {
            padding-right: 10px;
            margin: auto 10px
        }
            .prix
            {
                padding: 10px 15px;
                margin: auto 10px;
                border: 0.75px solid black
            }

        @media all and (max-width: 750px)
        {
            .duree
            {
                padding-right: 10px;
                margin: auto 5px
            }
            .prix
            {
                padding: 5px 7.5px;
                margin: auto 5px;
            }
        }
    </style>
    <!--FIN TEMPLATE-->





Fin Du Template




<!-- Corps -->

<div style="background: none; min-height: calc(100vh - 615px); margin-bottom: 15px; padding: 15px 2.5%">
    <table>
        <?php
        $cond = array();
        $filtre = '';

        foreach ($_GET as $key => $value) {
            if ($key == "id") {
                $cond[] = $key . "= " . $value;
            } else {
                $cond[] = $key . "='" . $value . "'";
            }
        }

        if (count($cond) > 0)
        {
            $filtre .= " WHERE " . implode(' AND ', $cond);
        }

        $req = 'SELECT * FROM traverse'.$filtre;

        $res = $db->connection()->prepare($req);
        $res->execute();
        $rows = $res->rowCount();

        if ($rows != 0) {
            for ($i = 1; $i <= $rows; $i++) {
                $data = $res->fetch();
                $reqTrav = 'SELECT * FROM liaison WHERE idLiaison = :liaison';
                $resTrav = $db->connection()->prepare($reqTrav);
                $resTrav->execute(array(
                    'liaison' => $data['idLiaison']
                ));
                $dataLi = $resTrav->fetch();
                ?>
                <!--       CSS A FIX         -->
                <div class="row">
                    <div class="col">
                        <div class="line">
                            <div class="row">
                                <table>
                                    <tr>
                                        <th>De</th>
                                        <th><?=$dataLi['portDepart']?></th>
                                    </tr>
                                    <tr>
                                        <th>À</th>
                                        <th><?=$dataLi['portArriver']?></th>
                                    </tr>
                                </table>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <p>durée</p>
                                        <!--Flèche à changer en qq chose de plus beau :3-->
                                        <p><?=$data['heureDepart']?> --> <?=$data['heureArrive']?></p>
                                    </div>
                                    <div class="col">
                                        <button type="button">PRIX€</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </table>
</div>


<div class="line">1</div>
<style>
    .line {
        margin: 5px auto;
        background: #dadfdd;
        width: 95%;
        border-radius: 2px;
        border: none;
        color: black;
        min-height: 120px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        text-align: center
    }
</style>

<!--footer -->
<footer>
    <?php
    require("tpl/footer.php");
    require('session/login.php');
    require('session/register.php');
    ?>
    <!-- //footer -->
</footer>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- contact validation js -->
<script src="js/form-validation.js"></script>

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
//}
//else
//{
//    header('Location:index.php');
//    exit();
//}
?>
