<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Trollságok Tornalja és környékéről">
    <meta name="keywords" content="Trollnalja, Tornalja, Gömör, gecmó, getn, vromondzsol, szklendondzsonsz, germondzsonsz">
    <meta name="author" content="brThong">

    <!--BOOTSTRAP, JQUERY-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--BOOTSTRAP, JQUERY END-->


    <link rel="stylesheet" type="text/css" href="_front-end/css/style.css">
    <script type="text/javascript" src="_front-end/js/js.js"></script>


    <script type='text/javascript'>
        function isHugarian() {
            var b = <?php echo(json_encode(basename($_SERVER['PHP_SELF']))); ?>;
            return (b.substr(b.length - 6) === "Sk.php") ? 0 : 1;
        }
        function  toHungarian() {
            if (!isHugarian()) {
                var link2;
                link2 = <?php echo(json_encode(basename($_SERVER['PHP_SELF'], 'Sk.php'))); ?>;
                var a2 = document.getElementById("toHungarian"); //or grab it by tagname etc
                a2.href = link2 + ".php";
            }
        }
        function toSLovak() {
            if (isHugarian())  {
                var link;
                link = <?php echo(json_encode(basename($_SERVER['PHP_SELF'], '.php'))); ?>;
                var a = document.getElementById("toSlovak"); //or grab it by tagname etc
                a.href = link + "Sk.php";
            }
        }



    </script>

    <title>Trollnalja |
        <?php
        echo $title;
        ?>
    </title>
</head>

<body data-spy="" data-target="#my-navbar">

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $name = basename($_SERVER['PHP_SELF']);
            $newname = substr($name, -6);
            if ($newname == 'Sk.php'){

                echo '    <a href="indexSk.php" class="navbar-brand">Trollnaľa a okolie</a>';
            }
            else {
                echo '    <a href="index.php" class="navbar-brand">Trollnalja és vidéke</a>';
            }
            ?>
        </div><!-- Navbar Header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <span id="flags">
                <a id="toSlovak" onclick="toSLovak()" > <img class="navbar-right image-responsive" id="zaszloSk" src="_front-end/images/zaszlo_szlovak2.gif"></a>
                <a id="toHungarian" onclick="toHungarian()" > <img class="navbar-right image-responsive" id="zaszloHu" src="_front-end/images/zaszlo_magyar2.png"></a>
            <span>
            <ul class="nav navbar-nav">
                <?php
                $name = basename($_SERVER['PHP_SELF']);
                $newname = substr($name, -6);
                if ($newname == 'Sk.php'){

                    echo '<li><a href= "indexSk.php">Hlavná stránka</a></li>
                          <li><a href="gallerySk.php">Galéria</a></li>
                          <li><a href="gamesSk.php">Hry</a></li>
                          <li><a href="contactsSk.php">Kontakty</a></li>
                          <li><a href= "aboutSk.php">O nás</a></li>';
                }
                else {
                    echo '<li><a href="index.php">Főoldal</a></li>
                          <li><a href="gallery.php">Galéria</a></li>
                          <li><a href="games.php">Játékok</a></li>
                          <li><a href="contacts.php">Elérhetőségeink</a></li>
                          <li><a href= "about.php">Rólunk</a></li>';
                }
                ?>


            </ul>
        </div>
    </div><!-- End Container-->
</nav><!-- End navbar -->

<!-- jumbotron-->
<div class="jumbotron">
    <div class="container text-center">
        <?php
        if ($newname == 'Sk.php'){

            echo ' <h1>Trollnaľa a okolie</h1>
        <p>Uvoľni sa a buď gemerský</p>
        <div class="btn-group">
            <a href="" class="btn btn-lg btn-default">Obchod</a>
            <a href="" class="btn btn-lg btn-info">Aplikácia</a>
            <a href="" class="btn btn-lg btn-danger">Zdielaj</a>
        </div>';
        }
        else {
            echo ' <h1>Trollnalja és vidéke</h1>
        <p>Engedd el magad, és légy gömöri!</p>
        <div class="btn-group">
            <a href="" class="btn btn-lg btn-danger">Bolt</a>
            <a href="" class="btn btn-lg btn-default">Aplikáció</a>
            <a href="" class="btn btn-lg btn-success">Oszd meg!</a>
        </div>';
        }
        ?>
    </div><!-- End container -->
</div><!-- End jumbotron-->





</body>