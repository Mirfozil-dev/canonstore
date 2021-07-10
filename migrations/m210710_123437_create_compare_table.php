<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%compare}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%products}}`
 */
class m210710_123437_create_compare_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%compare}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'session_id' => $this->string(100),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-compare-user_id}}',
            '{{%compare}}',
            'user_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-compare-user_id}}',
            '{{%compare}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-compare-product_id}}',
            '{{%compare}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-compare-product_id}}',
            '{{%compare}}',
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
            '{{%fk-compare-user_id}}',
            '{{%compare}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-compare-user_id}}',
            '{{%compare}}'
        );

        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-compare-product_id}}',
            '{{%compare}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-compare-product_id}}',
            '{{%compare}}'
        );

        $this->dropTable('{{%compare}}');
    }
}
