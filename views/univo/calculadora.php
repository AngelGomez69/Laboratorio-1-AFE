<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
if (isset($respuesta)) {
    echo Html::tag('div', Html::encode($respuesta), ['class' => 'alert alert-warning']);
}
?>

<div class="row">
    <div class="container">
        <?php $formulario = ActiveForm::begin(); ?>

        <?= $formulario->field($model, 'valor_a') ?>
        <?= $formulario->field($model, 'valor_b') ?>
        <?= $formulario->field($model, 'operador')->dropdownList([
                'Suma' => 'Suma', 
                'Resta' => 'Resta',
                'Multiplicacion' => 'Multiplicacion', 
                'Division' => 'Division'
            ]
        ); ?>

        <div class="form-group">
            <?= Html::submitButton('Aceptar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>