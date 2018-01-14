<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 13:56
 */
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;
?>
<?php //echo '<pre>';
//    var_dump($model);
?>
<h1>Test</h1>
<?php if(Yii::$app->session->hasFlash('success')): ?>
	<?php echo Yii::$app->session->getFlash('success') ?>
<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('error')): ?>
	<?php echo Yii::$app->session->getFlash('error') ?>
<?php endif; ?>

<?php $form = ActiveForm::begin() ?>
    <?php echo $form->field($model, 'name')->label('Имя') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'text')->textarea() ?>
<?php echo Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>



<?php ActiveForm::end() ?>


