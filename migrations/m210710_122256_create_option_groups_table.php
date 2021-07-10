<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%option_groups}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%categories}}`
 */
class m210710_122256_create_option_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%option_groups}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(45),
            'category_id' => $this->integer(11),
            'status' => $this->smallInteger(1),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-option_groups-category_id}}',
            '{{%option_groups}}',
            'category_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-option_groups-category_id}}',
            '{{%option_groups}}',
            'category_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%categories}}`
        $this->dropForeignKey(
            '{{%fk-option_groups-category_id}}',
            '{{%option_groups}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-option_groups-category_id}}',
            '{{%option_groups}}'
        );

        $this->dropTable('{{%option_groups}}');
    }
}
