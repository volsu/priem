<?php
use app\components\Rating;
?>
<?php foreach($models as $gc):?>
    <h2><?=$gc['view'];?></h2>
    <h4><b>План приема: </b><?=$gc['plan']?></h4>
    <h4><b>Дата обновления: </b><?=$gc['data']?></h4>
    <table class="table" style="overflow-x: scroll">
        <tr>
            <th>#</th>
            <th>ФИО</th>
            <th>Балл 1</th>
            <th>Балл 2</th>
            <th>Балл 3</th>
            <th>Общий балл</th>
            <th>Приоритет по данной ООП</th>
            <th>Документ об образовании</th>
            <th>Олимпиадник</th>
            <th>Льготник</th>
            <th>Целевик</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($gc['users'] as $user):?>
            <tr id="<?=$user->enrollee_code;?>" class="<?=Rating::isPassByConcurs($user);?>">
                <td><?=$i;?></td>
                <td><?=$user->enrollee_name;?></td>
                <td><?=$user->object1;?></td>
                <td><?=$user->object2;?></td>
                <td><?=$user->object3;?></td>
                <td><?=$user->total_balls;?></td>
                <td><?=$user->priority;?></td>
                <td><?=$user->type_document;?></td>
                <td><?= ($user->is_olymp) ? 'Да' : 'Нет';?></td>
                <td><?= ($user->is_benefit) ? 'Да' : 'Нет';?></td>
                <td><?= ($user->is_target) ? 'Да' : 'Нет';?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>
<?php endforeach;?>
<?php
\yii\helpers\VarDumper::dump($models, 10, true);
?>