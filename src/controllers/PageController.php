<?php namespace Acme\Controllers;

use Acme\Validation\Validator;
use Acme\Models\User;

/**
 * 
 */
class PageController
{
    public function getShowHomePage()
    {
        include __DIR__.'/../../views/home.php';
    }

    public function getShowRegisterPage()
    {
        include __DIR__.'/../../views/register.php';
    }

    public function postShowRegisterPage()
    {
        $validation_data = [
            'first_name' 		=> 'min:3',
            'last_name' 		=> 'min:3',
            'email' 			=> 'email|equalTo:verify_email',
            'verify_email' 		=> 'email',
            'password' 			=> 'min:3|equalTo:verify_password',
            'verify_password'	=> 'min:3',
        ];
        //validate the data
        $validator = new Validator();

        $errors = $validator->isValid($validation_data);
        
        if(sizeof($errors) > 0)
        {
        	$_SESSION['msg'] = $errors;
        }

        $user = new User();
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();
        echo 'Posted!';
        // if validation fails go to back to 
    }

    public function getShowLoginPage()
    {
        include __DIR__.'/../../views/login.php';
    }

    public function getTestDB()
    {
        $user = User::find(1);
        echo $user->first_name;
    }
}
