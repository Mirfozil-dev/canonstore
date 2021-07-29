<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carousel}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 */
class m210729_151816_create_carousel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carousel}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(45),
            'body' => $this->string(100),
            'product_id' => $this->integer(11),
            'img' => $this->string(255),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-carousel-product_id}}',
            '{{%carousel}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-carousel-product_id}}',
            '{{%carousel}}',
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
            '{{%fk-carousel-product_id}}',
            '{{%carousel}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-carousel-product_id}}',
            '{{%carousel}}'
        );

        $this->dropTable('{{%carousel}}');
    }
}
