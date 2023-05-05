<?php

use yii\db\Migration;

/**
 * Class m230505_040257_inventory
 */
class m230505_040257_inventory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230505_040257_inventory cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('inventory', [
            'id' => $this->primaryKey(),
            'name' => $this->string(), //string() integer() text()
            'description' => $this->text(),
            'created_by' => $this->integer()
        ]);
    }

    public function down()
    {
        echo "m230505_040257_inventory cannot be reverted.\n";

        return false;
    }

}
