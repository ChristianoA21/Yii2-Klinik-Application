<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-pasien-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Pasien::find()->all(), 'id_pasien', 'nama_pasien'),
        ['prompt' => 'Pilih Pasien']
    ) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_obat')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Obat::find()->all(), 'id_obat', 'nama_obat'),
        ['prompt' => 'Pilih Obat']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
