<?php

use yii\db\Migration;

/**
 * Class m210321_132507_audit_plugin_table
 */
class m210321_132507_audit_plugin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
        //Create our first version of the tbl_auditentry table
        //upgrade it from here if we ever need to. This was done so
        $this->createTable('tbl_audit_entry',
            [
                'audit_entry_id' => $this->primaryKey(),
                'audit_entry_timestamp' => $this->string()->notNull(),
                'audit_entry_model_name' => $this->string()->notNull(),
                'audit_entry_operation' => $this->string()->notNull(),
                'audit_entry_field_name' => $this->string(),
                'audit_entry_old_value' => $this->text(),
                'audit_entry_new_value' => $this->text(),
                'audit_entry_user_id' => $this->string(),
                'audit_entry_ip' => $this->string(),
            ],
            $tableOptions
        );

        //Indexing
        $this->createIndex('idx_audit_entry_user_id', 'tbl_audit_entry', 'audit_entry_user_id');
        $this->createIndex('idx_audit_entry_model_name', 'tbl_audit_entry', 'audit_entry_model_name');
        $this->createIndex('idx_audit_entry_operation', 'tbl_audit_entry', 'audit_entry_operation');
        $this->createIndex('idx_audit_entry_ip', 'tbl_audit_entry', 'audit_entry_ip');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210321_132507_audit_plugin_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210321_132507_audit_plugin_table cannot be reverted.\n";

        return false;
    }
    */
}
