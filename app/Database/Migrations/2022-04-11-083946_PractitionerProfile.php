<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PractitionerProfile extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id'=>[
            'type'=>'INT',
            'constraint'=>5,
            'unsigned'=>true,
            'auto_increment'=>true
        ],
        //userID
        'practitioner_acc'=>[
            'type'=>'VARCHAR',
            'constraint'=>255,
        ],
        'firstname'=>[
            'type'=>'VARCHAR',
            'constraint'=>255
        ],
        'specification'=>[
            'type'=>'VARCHAR',
            'constraint'=>255
        ],
        'practitionerid'=>[
            'type'=>'VARCHAR',
            'constraint'=>255,
            'unique'=>true
        ],
       
    ]);

    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('PractitionerProfile');
}
    public function down()
    {
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('PractitionerProfile');
    }
}