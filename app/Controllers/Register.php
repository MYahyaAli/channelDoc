<?php

namespace App\Controllers;

use Config\App;

class Register extends BaseController
{

    public function index()
    {
        return view('Register.php');  
    }

    
    public function create() 
    {
        $form = $this->request->getPost(); // Gets data from the registration form's post method
        // $validation =  \Config\Services::validation(); // Validation library is loaded
            
            // get the data from the form
            $email = $this->request->getPost('email');
            $model = new \App\Models\userModel;

            // If the validations are successful
            $users = new \App\Entities\User ($this -> request ->getPost());
            $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

            // Inserts account registration information into the database
            $model->insert($users);

            return view("Login/login"); 

            ////////   Setting up the practitioner account profile   ////////

                        // get account type
                        $account_type = $this->request->getPost('type');
                        
                        // check if account type is company, creates a blank profile for it
                        if($account_type == "Practitioner") {
                            
                            // gets data on the just entered company
                            $query1 = $model -> query("SELECT * FROM registrations WHERE email = '$email'"); 
                            $row = $query1 -> getRow();

                            $modelPrac= new \App\Models\practitionerProfileModel;

                            // Gets and uploads information to the profile database
                            $model2 = $modelPrac -> save([
                                'practitioner_acc' => $row -> id,
                                'practitionername' => $row -> firstname,
                                'specification' => '',
                                'practitionerid' => '',
                            ]);

                        }
                        else{
                                echo '
                                <div class="alert2 text-danger">
                                    <strong> ERROR! </strong>
                                    Registeration was not successful! Check your entries!
                                </div>';
                                
                                return view("Register");
                        }

    }
}