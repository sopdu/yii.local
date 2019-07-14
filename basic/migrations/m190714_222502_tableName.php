<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m190714_222502_tableName
 */
class m190714_222502_tableName extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp(){
        $this->createTable('name', [
            //'id'    =>  \yii\db\Schema::TYPE_PK,
            'id'    =>  Schema::TYPE_PK,
            'name'  =>  Schema::TYPE_STRING.'(255) NOT NULL',
            'age'   =>  Schema::TYPE_INTEGER.'(255) NOT NULL',

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()    {
        $this->dropTable('name');

        //echo "m190714_222502_tableName cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190714_222502_tableName cannot be reverted.\n";

        return false;
    }
    */
}
