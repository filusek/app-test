<?php
use yii\helpers\Html;
?>
<p>Wpisałeś następujące informacje:</p>

<ul>
    <li><label>Nazwa</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>