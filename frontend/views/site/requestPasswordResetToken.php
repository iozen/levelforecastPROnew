<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">

<section class="position-relative h-100 pt-5 pb-4">

    <!-- Sign up form -->
    <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
            <h1 class="text-center text-xl-start"> <?= Html::encode($this->title) ?></h1>
			<p class="text-center text-xl-start pb-3 mb-3">Please fill out your email. A link to reset password will be sent there.</p>



    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


</div>
</div>
</section>
