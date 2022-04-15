<?php

namespace App\Controllers;

class PractitionerDetails extends BaseController
{
    public function index()
    {
        return view('Practitoner/PractitionerDetails');
    }

    public function create(){

        $model = new \App\Models\userModel;
        $users = new \App\Entities\PractitionerProfile ($this -> request ->getPost());

        $model->insert($users);

        
        $file =$this->request->getFile('myfile');
        if ($file->isValid()&& !$file->hasMoved()) {
            $file->move('./uploads/DoctorCertification',$file->getClientName());
        }

        echo '
                                <div class="alert2 text-success">
                                    <strong> SUCCESS ! </strong>
                                    Data added successfully! <br>
                                    Wait for Admin Approval to <strong> Access </strong> the complete system.
                                </div>';

        return view('PractitonerDetail/index');
    }

}
