<?php

use yii\db\Schema;
use yii\db\Migration;

class m150603_112135_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
           'id'                 => 'pk',
            'object1'           => Schema::TYPE_SMALLINT, //Предмет1
            'object2'           => Schema::TYPE_SMALLINT, //Предмет2
            'object3'           => Schema::TYPE_SMALLINT, //Предмет3
            'ind_achivement'    => Schema::TYPE_SMALLINT, //СуммаБалловПоИД
            'type_document'     => Schema::TYPE_STRING, //ВидДокумента
            'is_benefit'        => Schema::TYPE_SMALLINT, //Льготник
            'is_olymp'          => Schema::TYPE_SMALLINT, //Олимпиадник
            'is_target'         => Schema::TYPE_SMALLINT, //Целевик
            'is_enrolled'       => Schema::TYPE_SMALLINT, //Зачислен
            'priority'          => Schema::TYPE_SMALLINT, //Приоритет
            'order'             => Schema::TYPE_STRING, //Приказ
            'oop_base'          => Schema::TYPE_STRING, //НаБазеОбразовательнойПрограммы
            'is_expelled'       => Schema::TYPE_SMALLINT, //Отчислен
            'enrollee_code'     => Schema::TYPE_STRING, //ФизическоеЛицо.Код
            'enrollee_name'     => Schema::TYPE_STRING, //ФизическоеЛицо.Наименование
            'total_balls'       => Schema::TYPE_INTEGER, //СуммаБалловПоПредметам
            'is_concurs_out'    => Schema::TYPE_SMALLINT, //ВыбылИзКонкурса
            'is_rec_by_priority'=> Schema::TYPE_SMALLINT, //РекомендованПоПриоритету
            'is_rec_by_other'   => Schema::TYPE_SMALLINT, //РекомендованПоДругомуПриоритету
            'agreement_enroll'  => Schema::TYPE_SMALLINT, //СогласиеНаЗачисление
            'cg_code'           => Schema::TYPE_STRING, //КонкурснаяГруппа.Код
            'cg_view'           => Schema::TYPE_STRING, //КонкурснаяГруппа.Представление
            'cg_form'           => Schema::TYPE_STRING, //КонкурснаяГруппа.ФормаОбучения
            'cg_oop_code'       => Schema::TYPE_STRING, //КонкурснаяГруппа.Специальность.Код
            'cg_oop_name'       => Schema::TYPE_STRING, //КонкурснаяГруппа.Специальность.Наименование
            'cg_level'          => Schema::TYPE_STRING, //КонкурснаяГруппа.УровеньПодготовки
            'cg_base'           => Schema::TYPE_STRING, //КонкурснаяГруппа.ОснованиеПоступления
            'cg_unique_right'   => Schema::TYPE_SMALLINT, //КонкурснаяГруппа.ПриемЛицИмеющихОсобоеПраво
            'stat_plan'         => Schema::TYPE_INTEGER, //ЦифрыПриема.ПланПриема
            'stat_quota'        => Schema::TYPE_INTEGER, //ЦифрыПриема.Квота
            'date_update'       => Schema::TYPE_TIMESTAMP.' NOT NULL DEFAULT CURRENT_TIMESTAMP', //Время добавления данных
        ]);

        $this->createIndex('Ilevel', 'user', 'cg_level');
        $this->createIndex('IProg', 'user', 'cg_oop_name');
        $this->createIndex('IForm', 'user', 'cg_form');
        $this->createIndex('ITypePriem', 'user', 'cg_base');
        $this->createIndex('IUniqRight', 'user', 'cg_unique_right');
    }

    public function down()
    {
        $this->truncateTable('user');
        $this->dropTable('user');
    }
}
