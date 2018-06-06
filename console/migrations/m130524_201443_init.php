<?php

use yii\db\Migration;

class m130524_201443_init extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}','description',$this->text());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'description');
    }
}
