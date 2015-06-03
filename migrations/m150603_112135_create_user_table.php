<?php

use yii\db\Schema;
use yii\db\Migration;

class m150603_112135_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
           'id'                 => 'pk',
            'object1'           => Schema::TYPE_SMALLINT,
            'object2'           => Schema::TYPE_SMALLINT,
            'object3'           => Schema::TYPE_SMALLINT,
            'oop_code'          => Schema::TYPE_STRING,
            'oop_name'          => Schema::TYPE_STRING,
            'type_document'     => Schema::TYPE_STRING,
            'is_benefit'        => Schema::TYPE_SMALLINT,
            'is_olymp'          => Schema::TYPE_SMALLINT,
            'is_target'         => Schema::TYPE_SMALLINT,
            'is_enrolled'       => Schema::TYPE_SMALLINT,
            'priority'          => Schema::TYPE_SMALLINT,
            'base_enroll'       => Schema::TYPE_STRING,
            'order'             => Schema::TYPE_STRING,
            'form'              => Schema::TYPE_STRING,
            'level'             => Schema::TYPE_STRING,
            'oop_base'          => Schema::TYPE_STRING,
            'is_expelled'       => Schema::TYPE_SMALLINT,
            'enrollee_code'     => Schema::TYPE_STRING,
            'enrollee_name'     => Schema::TYPE_STRING,
            'total_balls'       => Schema::TYPE_INTEGER,
            'is_concurs_out'    => Schema::TYPE_SMALLINT,
            'is_rec_by_priority'=> Schema::TYPE_SMALLINT,
            'is_rec_by_other'   => Schema::TYPE_SMALLINT
        ]);

        $this->createIndex('Ilevel', 'user', 'level');
        $this->createIndex('IProg', 'user', 'oop_name');
        $this->createIndex('IForm', 'user', 'form');
        $this->createIndex('ITypePriem', 'user', 'oop_base');
        $this->createIndex('IBaseEnroll', 'user', 'base_enroll');

    }

    public function down()
    {
        $this->truncateTable('user');
        $this->dropTable('user');
    }
}
