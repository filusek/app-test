<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%country}}`.
 */
class m221006_141112_add_updated_at_column_to_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%country}}', 'updated_at', $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'));
        //$this->addColumn('{{%country}}', 'timex', $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%country}}', 'timex');
    }
}
