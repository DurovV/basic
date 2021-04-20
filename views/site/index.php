<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: DeepSkyBlue;">
    <div class="site-index" style="">

    <div class="body-content">
        <div style="background-image: url(yii/web/1.jpeg);">
            <div class="" style="justify-content: center; text-align: center; background-color: rgba(0, 0, 0, 0.53); color: white;padding-top: 1vh;padding-bottom: 10vh;">
                
                <h2 style="margin-top: 6rem;margin-bottom: 3rem;">Carshering</h2>
                <h3 style="margin-bottom: 10rem;">Как твоя только лучше!</h3>
                <h3>Начните знакомство с Carshering</h3>
                <h3>прямо сейчас!</h3>
                <a href="login.php">
                    
                </a>
                <a href="<?=Yii::$app->urlManager->createUrl(["site/login"])?>">
                    <button style="background-color: blue; border:1px solid black; border-radius: 5px; font-size: 18px; color: white; padding-left: 2rem; padding-right: 2rem;margin-top: 2rem; ">
                        Начать
                    </button>
                </a>


            </div>
        </div>

    </div>
</div>

</body>
</html>

