<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Klink adalah tempat dimana semua orang bisa berobat dengan atau tanpa BPJS.
    </p>

    <code><?= __FILE__ ?></code>
</div>
