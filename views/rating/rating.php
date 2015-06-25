<?php
use app\components\Rating;
?>
<div class="row">
    <div class="col-lg-offset-6 pull-right">
        <form class="form-inline">
            <div class="form-group">
                <label for="searchterm">Найти себя</label>
                <input type="text" class="form-control" id="searchterm" placeholder="Например, иванов">
                <a id="findme" href="#" class="btn btn-default">Найти</a>
            </div>
        </form>
    </div>
</div>
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
            <th>Приоритет в данной конкурсной группе</th>
            <th>Проходит по другому приоритету</th>
            <th>Документ об образовании</th>
            <th>Олимпиадник</th>
            <th>Особые права</th>
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
$js = <<<EOD
$(document).ready(function(){

    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
        return function( elem ) {
            return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
        };
    });

    $('#findme').click(function(e){
        e.preventDefault();
        var searchTerm = $('#searchterm').val();
        if(searchTerm){
            $("tr").removeClass("found");
            $("td:contains("+searchTerm+")").parent('tr').addClass("found");
        }else{
            $("tr").removeClass("found");
        }
    });
});
EOD;
$this->registerJs($js, \yii\web\View::POS_END);