<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">


<section class="position-relative h-100 pt-5 pb-4">

    <!-- Sign up form -->
    <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
            <h1 class="text-center text-xl-start">Login</h1>
			<p class="text-center text-xl-start pb-3 mb-3">
Please fill out the following fields to login:</p>




    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


</div>
</div>
</section>

