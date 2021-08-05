<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_carousel}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%categories}}`
 */
class m210805_153130_create_product_carousel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_carousel}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(11),
            'products_count' => $this->smallInteger(2),
            'status' => $this->smallInteger(2),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-product_carousel-category_id}}',
            '{{%product_carousel}}',
            'category_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-product_carousel-category_id}}',
            '{{%product_carousel}}',
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
            '{{%fk-product_carousel-category_id}}',
            '{{%product_carousel}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-product_carousel-category_id}}',
            '{{%product_carousel}}'
        );

        $this->dropTable('{{%product_carousel}}');
    }
}
