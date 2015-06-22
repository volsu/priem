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
            <th>Позиция в рейтинге</th>
            <th>ФИО</th>
            <th>Балл 1</th>
            <th>Балл 2</th>
            <th>Балл 3</th>
            <th>Индвидуальные достижения (в т.ч. сочинение)</th>
            <th>Общий балл</th>
            <th>Приоритет по данной ООП</th>
            <th>Проходит по другому приоритету</th>
            <th>Документ об образовании</th>
            <th>Олимпиадник</th>
            <th>Льготник</th>
        </tr>
        <?php
            $i = 1;
            $position = 1;
        ?>
        <?php foreach($gc['users'] as $user):?>
            <tr id="<?=$user->enrollee_code;?>" class="<?= (Rating::isPassByConcurs($user)) ? "green" : "default";?>">
                <td><?=$i;?></td>
                <td class="text-center">
                    <?php if(Rating::isPassByConcurs($user)){
                        echo $position;
                        $position++;
                    }?>
                </td>
                <td><?=$user->enrollee_name;?></td>
                <td class="text-center"><?=$user->object1;?></td>
                <td class="text-center"><?=$user->object2;?></td>
                <td class="text-center"><?=$user->object3;?></td>
                <td class="text-center"><?=$user->ind_achivement;?></td>
                <td class="text-center"><?=$user->total_balls;?></td>
                <td class="text-center"><?=$user->priority;?></td>
                <td class="text-center"><?= ($user->is_rec_by_other) ? 'Да' : 'Нет';?></td>
                <td class="text-center"><?=$user->type_document;?></td>
                <td class="text-center"><?= ($user->is_olymp) ? 'Да' : 'Нет';?></td>
                <td class="text-center"><?= ($user->is_benefit) ? 'Да' : 'Нет';?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>
<?php endforeach;?>
<?php
\yii\helpers\VarDumper::dump($models, 10, true);
?>