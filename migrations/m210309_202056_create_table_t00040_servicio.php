<?php

use yii\db\Migration;

class m210309_202056_create_table_t00040_servicio extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t00040_servicio}}',
            [
                'Co_Servicio' => $this->primaryKey(),
                'Nb_Servicio' => $this->string(1500)->notNull(),
                'Co_App_Id' => $this->string(1500)->notNull(),
                'Co_URL' => $this->string(2500)->notNull(),
                'Co_Password' => $this->string(500)->notNull(),
                'Co_Inquilino' => $this->string(2500)->notNull(),
                'Co_IP' => $this->char(40),
                'St_Activo' => $this->boolean()->notNull()->defaultValue('1'),
                'Co_Auditoria' => $this->bigInteger()->unsigned(),
            ],
            $tableOptions
        );

        $this->addForeignKey(
            'FK_Servicio_Auditoria',
            '{{%t00040_servicio}}',
            ['Co_Auditoria'],
            '{{%t99999_auditoria}}',
            ['Co_Auditoria'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t00040_servicio}}');
    }
}
