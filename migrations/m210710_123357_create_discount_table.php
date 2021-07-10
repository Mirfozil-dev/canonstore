<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%discount}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 */
class m210710_123357_create_discount_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%discount}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(11),
            'discount_price' => $this->string(100),
            'status' => $this->smallInteger(1),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-discount-product_id}}',
            '{{%discount}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-discount-product_id}}',
            '{{%discount}}',
            'product_id',
            '{{%products}}',
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
            '{{%fk-discount-product_id}}',
            '{{%discount}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-discount-product_id}}',
            '{{%discount}}'
        );

        $this->dropTable('{{%discount}}');
    }
}
