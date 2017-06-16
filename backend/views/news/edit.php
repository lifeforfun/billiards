<?php
/* @var $this yii\web\View */
/* @var $model \common\models\News */
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
            'action' => Url::to(['news/edit', ['id' => $model->id]])
        ]
    ]
)
?>
    <div class="form-group">
        <label for="title">标题</label>
        <input type="text" class="form-control" value="<?=$model->title?>" id="title"/>
    </div>
    <div class="form-group">
        <label for="dateline">发布日期</label>
        <input type="text" class="form-control" id="dateline" value="<?=$model->dateline?>" />
    </div>
    <?= $form->field($model, 'cover')->fileInput(['id' => 'cover']) ?>
    <p class="help-block">
        上传750*425左右的尺寸
        <?php if ($model->cover): ?>
            <a href="<?= $model->getCover()?>" target="_blank">查看</a>
        <?php endif; ?>
    </p>
    <div class="form-group">
        <label for="tag">标签</label>
        <input type="text" class="form-control" id="tag" <?=$model->getTag()?> />
    </div>
<?php ActiveForm::end() ?>