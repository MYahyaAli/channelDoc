<?php
    namespace App\Models;

    class practitionerProfileModel extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'PractitionerProfile'; // Give the table name

        protected $allowedFields=['practitioner_acc', 'practitionername', 'specification', 'practitionerid'];

        protected $returnType = 'App\Entities\User';

    }
?>