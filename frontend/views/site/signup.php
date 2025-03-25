<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;

?>



<div class="site-signup">

<section class="position-relative h-100 pt-5 pb-4">

    <!-- Sign up form -->
    <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
        <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
            <h1 class="text-center text-xl-start">Create Account</h1>
			<p class="text-center text-xl-start pb-3 mb-3">Already have an account? <a href="<?= Url::to(['site/login'])?>">Sign in here.</a></p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


</div>
</div>
</section>


