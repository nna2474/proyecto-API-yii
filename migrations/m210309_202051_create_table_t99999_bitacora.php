<?php

use yii\db\Migration;

class m210309_202051_create_table_t99999_bitacora extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t99999_bitacora}}',
            [
                'Co_Bitacora' => $this->bigPrimaryKey()->unsigned(),
                'Co_Bitacora_Previo' => $this->bigInteger()->unsigned()->notNull(),
                'Co_Usuario' => $this->bigInteger()->unsigned()->notNull(),
                'Fe_Ins' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            ],
            $tableOptions
        );

        $this->addForeignKey(
            'FK_Bitacora_Bitacora',
            '{{%t99999_bitacora}}',
            ['Co_Bitacora_Previo'],
            '{{%t99999_bitacora}}',
            ['Co_Bitacora'],
            'RESTRICT',
            'RESTRICT'
        );
        $this->addForeignKey(
            'FK_Bitacora_Usuario',
            '{{%t99999_bitacora}}',
            ['Co_Usuario'],
            '{{%t00100_usuario}}',
            ['Co_Usuario'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t99999_bitacora}}');
    }
}
