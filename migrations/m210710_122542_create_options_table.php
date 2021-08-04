<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%options}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%option_groups}}`
 */
class m210710_122542_create_options_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%options}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(45),
            'title_en' => $this->string(45),
            'option_group_id' => $this->integer(11),
            'status' => $this->smallInteger(1),
        ]);

        // creates index for column `option_group_id`
        $this->createIndex(
            '{{%idx-options-option_group_id}}',
            '{{%options}}',
            'option_group_id'
        );

        // add foreign key for table `{{%option_groups}}`
        $this->addForeignKey(
            '{{%fk-options-option_group_id}}',
            '{{%options}}',
            'option_group_id',
            '{{%option_groups}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%option_groups}}`
        $this->dropForeignKey(
            '{{%fk-options-option_group_id}}',
            '{{%options}}'
        );

        // drops index for column `option_group_id`
        $this->dropIndex(
            '{{%idx-options-option_group_id}}',
            '{{%options}}'
        );

        $this->dropTable('{{%options}}');
    }
}
