<?php 
    $json = json_decode(file_get_contents('menu.json'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reza Juliandri</title>
    <link rel="stylesheet" href="style.css?t=<?=date('ymdhis')?>">
    <meta name="viewport" content="width=device-width,inictial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="item logo">
                <a href="#logo">Reza Juliandri</a>
            </div>
            <?php 
                foreach ($json as $key):
            ?>
            <a href="<?=str_replace('BASEURL',$_SERVER['SERVER_NAME'],$key->url)?>" class="item toggle hidden"><?=$key->name?></a>
            <?php 
                endforeach
            ?>
            <div class="item-right">
                <div class="toggle-d">
                        <button class="btn btn-toggle">&#9776;</button>
                </div>
                 <a href="" class="item social toggle hidden"><i class="fab fa-facebook-f"></i>
                    </a>
                <a href="" class="item social toggle hidden">
                        <i class="fab fa-github"></i>
                </a>
                <a href="" class="item social toggle hidden">    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </header>
    <nav class="menu mobile toggle-d left">
        <div class="item">
            <div class="mobile-header">
                Navigation
            </div>
                <?php 
                    foreach ($json as $key):
                ?>
                <a href="<?=str_replace('BASEURL',$_SERVER['SERVER_NAME'],$key->url)?>" class="item"><?=$key->name?></a>
                <?php endforeach ?>
        </div>
        <div class="item-right">
            <div class="social">
                <a href="https://www.facebook.com/ppabcd" class="item social">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://github.com/ppabcd" class="item social">
                    <i class="fab fa-github"></i>
                <a href="https://linkedin.com/in/rezajuliandri" class="item social">    
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="slider">
            <div class="background"></div>
            <img src="http://www.calgary.ca/CA/city-manager/scripts/about-us/webparts/images/ourHistory_retina.jpg" alt="">
        </div>
        <div class="content-data">
            <div class="container">
                <h1>Hello</h1>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.querySelector('.btn-toggle').addEventListener('click',function(){
            document.querySelector(".menu.mobile").classList.toggle('visible');
        });
    </script>
</body>
</html>
