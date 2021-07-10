<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wishlist}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%products}}`
 */
class m210710_123043_create_wishlist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wishlist}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'session_id' => $this->string(100),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-wishlist-user_id}}',
            '{{%wishlist}}',
            'user_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-wishlist-user_id}}',
            '{{%wishlist}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-wishlist-product_id}}',
            '{{%wishlist}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-wishlist-product_id}}',
            '{{%wishlist}}',
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
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-wishlist-user_id}}',
            '{{%wishlist}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-wishlist-user_id}}',
            '{{%wishlist}}'
        );

        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-wishlist-product_id}}',
            '{{%wishlist}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-wishlist-product_id}}',
            '{{%wishlist}}'
        );

        $this->dropTable('{{%wishlist}}');
    }
}
