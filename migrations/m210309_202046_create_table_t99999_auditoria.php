<?php

use yii\db\Migration;

class m210309_202046_create_table_t99999_auditoria extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t99999_auditoria}}',
            [
                'Co_Auditoria' => $this->bigPrimaryKey()->unsigned(),
                'Nb_Tabla' => $this->char(255)->notNull(),
                'Co_Fila' => $this->bigInteger()->unsigned(),
                'Co_Tipo_Operacion' => $this->string(10)->notNull(),
                'Tx_Sentencia' => $this->string(5000)->notNull(),
                'Tx_Error' => $this->string(5000),
                'Co_Auditoria_Auditoria' => $this->bigInteger()->unsigned(),
                'Co_Usuario' => $this->bigInteger()->unsigned()->notNull(),
                'Co_MAC' => $this->char(),
                'Co_IP' => $this->char(40),
                'Fe_Ins' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'St_Error' => $this->boolean()->notNull()->defaultValue('0'),
            ],
            $tableOptions
        );

        $this->addForeignKey(
            'FK_Auditoria_Auditoria',
            '{{%t99999_auditoria}}',
            ['Co_Auditoria_Auditoria'],
            '{{%t99999_auditoria}}',
            ['Co_Auditoria'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t99999_auditoria}}');
    }
}
