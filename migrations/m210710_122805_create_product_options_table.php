<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_options}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 * - `{{%options}}`
 */
class m210710_122805_create_product_options_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_options}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(11),
            'option_id' => $this->integer(11),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-product_options-product_id}}',
            '{{%product_options}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-product_options-product_id}}',
            '{{%product_options}}',
            'product_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );

        // creates index for column `option_id`
        $this->createIndex(
            '{{%idx-product_options-option_id}}',
            '{{%product_options}}',
            'option_id'
        );

        // add foreign key for table `{{%options}}`
        $this->addForeignKey(
            '{{%fk-product_options-option_id}}',
            '{{%product_options}}',
            'option_id',
            '{{%options}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-product_options-product_id}}',
            '{{%product_options}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-product_options-product_id}}',
            '{{%product_options}}'
        );

        // drops foreign key for table `{{%options}}`
        $this->dropForeignKey(
            '{{%fk-product_options-option_id}}',
            '{{%product_options}}'
        );

        // drops index for column `option_id`
        $this->dropIndex(
            '{{%idx-product_options-option_id}}',
            '{{%product_options}}'
        );

        $this->dropTable('{{%product_options}}');
    }
}
