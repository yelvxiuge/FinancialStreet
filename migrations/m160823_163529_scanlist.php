<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

class m160823_163529_scanlist extends Migration
{
    public function up()
    {

        $this->createTable('guests',[
            "id" =>Schema ::TYPE_PK,
            "name" => Schema::TYPE_STRING." not null",
            "phone" => Schema::TYPE_BIGINT." not null",
        ]);
    }

    public function down()
    {
        echo "m160823_163529_scanlist cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
