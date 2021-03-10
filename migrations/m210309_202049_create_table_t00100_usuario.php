<?php

use yii\db\Migration;

class m210309_202049_create_table_t00100_usuario extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t00100_usuario}}',
            [
                'Co_Usuario' => $this->bigPrimaryKey()->unsigned(),
                'Nb_Usuario' => $this->char(100)->notNull(),
                'Tx_Email' => $this->string(500)->notNull(),
                'Nu_Movil' => $this->char(20),
                'Tx_Clave' => $this->char(100)->notNull(),
                'Tx_Patron' => $this->char(20),
                'Nu_Intentos' => $this->integer()->notNull()->defaultValue('0'),
                'Fe_Recuperacion' => $this->dateTime(),
                'St_Bloqueo' => $this->boolean()->defaultValue('0'),
                'St_Activo' => $this->boolean()->notNull()->defaultValue('1'),
                'Co_Auditoria' => $this->bigInteger()->unsigned(),
            ],
            $tableOptions
        );

        $this->createIndex('Uk_Usuario_Tx_Email', '{{%t00100_usuario}}', ['Tx_Email'], true);
        $this->createIndex('Uk_Usuario_Nb_Usuario', '{{%t00100_usuario}}', ['Nb_Usuario'], true);

        $this->addForeignKey(
            'FK_Usuario_Auditoria',
            '{{%t00100_usuario}}',
            ['Co_Auditoria'],
            '{{%t99999_auditoria}}',
            ['Co_Auditoria'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t00100_usuario}}');
    }
}
