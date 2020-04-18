<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

echo 'It is ttest page';
?>


<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php $this->head();?>
</head>
<body>
    <?php $this->beginBody(); ?>
    <h3>sad</h3>
    <?php  $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>