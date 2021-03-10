<?php

use yii\db\Migration;

class m210309_202101_create_table_t00060_funcion extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t00060_funcion}}',
            [
                'Co_Funcion' => $this->primaryKey(),
                'Nb_Funcion' => $this->string(1500)->notNull(),
                'Fe_Inicio' => $this->dateTime()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'Fe_Fin' => $this->dateTime(),
                'St_Activo' => $this->boolean()->notNull()->defaultValue('1'),
                'Co_Auditoria' => $this->bigInteger()->unsigned(),
            ],
            $tableOptions
        );

        $this->addForeignKey(
            'FK_Funcion_Auditoria',
            '{{%t00060_funcion}}',
            ['Co_Auditoria'],
            '{{%t99999_auditoria}}',
            ['Co_Auditoria'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t00060_funcion}}');
    }
}
