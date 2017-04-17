<?php
  $bg = array('banner_1.jpg', 'banner_2.jpg', 'banner_3.jpg', 'banner_4.jpg');

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>

<style type="text/css">
    <!--
    .intro-header {
        padding-top: 50px;
        padding-bottom: 50px;
        text-align: center;
        color: #f8f8f8;
        background: url("img/<?php echo $selectedBg; ?>") no-repeat center center;
        background-size: cover;
    }
    -->
</style>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "head.html"; ?>

    <title>Cadox8 ~ Index</title>

</head>

<body>

    <?php include "nav.html"; ?>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Cadox8</h1>
                        <h3>A shitty page built by Cadox8 for tests</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/cadox8" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/cadox8" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://keybase.io/cadox8" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-key"></i> <span class="network-name">Keybase</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "footer.html"; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
