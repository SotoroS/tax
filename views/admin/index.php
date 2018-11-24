<?php

use yii\helpers\Html;

?>

<h3>Панель управления</h3>
<hr>

<div class="panel panel-default">
    <ul class="list-group">
        <li class="list-group-item"><?= Html::a('Управления точка', ['/admin/point/index']) ?></li>
        <li class="list-group-item"><?= Html::a('Управления маршрутами', ['/admin/route/index']) ?></li>
        <li class="list-group-item"><?= Html::a('Управления такси', ['/admin/car/index']) ?></li>
    </ul>
</div>
