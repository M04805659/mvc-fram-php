<?php
    /** @var $model  \app\models\ContactForm */
    /** @var $this  \app\core\View */
    $this->title = 'Contact';
?>

<h1>Contact us</h1>

<?php $form = \app\core\form\Form::begin('', 'post'); ?>
    <?php echo $form->field($model, 'subject'); ?>
    <?php echo $form->field($model, 'email')->emailField(); ?>
    <?php echo new \app\core\form\TextAreaField($model, 'body')?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?=  \app\core\form\Form::end(); ?>