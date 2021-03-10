<?php

use yii\db\Migration;

class m210309_202103_create_table_t00070_funcion_servicio extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%t00070_funcion_servicio}}',
            [
                'Co_Funcion_Servicio' => $this->primaryKey(),
                'Co_Funcion' => $this->integer()->notNull(),
                'Co_Servicio_Inicio' => $this->integer()->notNull(),
                'Co_Servicio_Fin' => $this->integer()->notNull(),
                'St_Opcional' => $this->boolean()->notNull()->defaultValue('1'),
                'Nu_Orden' => $this->integer()->notNull()->defaultValue('1'),
                'Ti_Minimo' => $this->integer()->notNull()->defaultValue('0'),
                'Ti_Maximo' => $this->integer(),
                'St_Activo' => $this->boolean()->notNull()->defaultValue('1'),
                'Co_Auditoria' => $this->bigInteger()->unsigned(),
            ],
            $tableOptions
        );

        $this->addForeignKey(
            'FK_FuncionServicio_Auditoria',
            '{{%t00070_funcion_servicio}}',
            ['Co_Auditoria'],
            '{{%t99999_auditoria}}',
            ['Co_Auditoria'],
            'RESTRICT',
            'RESTRICT'
        );
        $this->addForeignKey(
            'FK_FuncionServicio_Funcion',
            '{{%t00070_funcion_servicio}}',
            ['Co_Funcion'],
            '{{%t00060_funcion}}',
            ['Co_Funcion'],
            'RESTRICT',
            'RESTRICT'
        );
        $this->addForeignKey(
            'FK_FuncionServicio_Servicio_Fin',
            '{{%t00070_funcion_servicio}}',
            ['Co_Servicio_Fin'],
            '{{%t00040_servicio}}',
            ['Co_Servicio'],
            'RESTRICT',
            'RESTRICT'
        );
        $this->addForeignKey(
            'FK_FuncionServicio_Servicio_Inicio',
            '{{%t00070_funcion_servicio}}',
            ['Co_Servicio_Inicio'],
            '{{%t00040_servicio}}',
            ['Co_Servicio'],
            'RESTRICT',
            'RESTRICT'
        );
    }

    public function down()
    {
        $this->dropTable('{{%t00070_funcion_servicio}}');
    }
}
