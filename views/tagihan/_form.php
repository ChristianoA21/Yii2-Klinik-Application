<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tagihan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'id_pasien')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Pasien::find()->all(), 'id_pasien', 'nama_pasien'),
        ['prompt' => 'Pilih Pasien']
    ) ?>

     <?= $form->field($model, 'id_tp')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\TindakanPasien::find()->all(), 'id_tp', 'tindakan'),
        ['prompt' => 'Pilih Tindakan']
    ) ?>

     <?= $form->field($model, 'id_obat')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Obat::find()->all(), 'id_obat', 'nama_obat'),
        ['prompt' => 'Pilih Obat']
    ) ?>

    <?= $form->field($model, 'total_pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
