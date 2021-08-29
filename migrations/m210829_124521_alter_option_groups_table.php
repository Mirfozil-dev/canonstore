<?php

use yii\db\Migration;

/**
 * Class m210829_124521_alter_option_groups_table
 */
class m210829_124521_alter_option_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey(
            '{{%fk-option_groups-category_id}}',
            '{{%option_groups}}'
        );
        $this->dropIndex(
            '{{%idx-option_groups-category_id}}',
            '{{%option_groups}}'
        );
        $this->dropColumn('option_groups', 'category_id');
        $this->addColumn('option_groups', 'categories', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210829_124521_alter_option_groups_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210829_124521_alter_option_groups_table cannot be reverted.\n";

        return false;
    }
    */
}
