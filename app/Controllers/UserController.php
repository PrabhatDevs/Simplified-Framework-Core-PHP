<?php

namespace App\Controllers;

use Core\Controller;
use Core\Model;

class UserController extends Controller
{
    public function index()
    {
        $model = new Model();
        // sample query to get all users USING dababase
        // $users = $model->rawQuery('SELECT * FROM users');
        // pass the data to the view
        // $this->view('user', ['users' => $users]);

      //*********** SAMPLE *************** */
        $users = [
            ['name' => 'John', 'email' => 'john@gmail.com'],
            ['name' => 'Alice', 'email' => 'alice@gmail.com'],
            ['name' => 'Bob', 'email' => 'bob@gmail.com'],
            ['name' => 'Emma', 'email' => 'emma@gmail.com'],
            ['name' => 'Michael', 'email' => 'michael@gmail.com'],
            ['name' => 'Sarah', 'email' => 'sarah@gmail.com'],
            ['name' => 'David', 'email' => 'david@gmail.com'],
            ['name' => 'Lisa', 'email' => 'lisa@gmail.com'],
            ['name' => 'James', 'email' => 'james@gmail.com'],
            ['name' => 'Emily', 'email' => 'emily@gmail.com'],
    ];
    $this->view('user', ['users' => $users]);

    }
    public function get_example()
    {
        // $model = new Model();
        // $users = $model->rawQuery('SELECT * FROM users');
        // $this->view('example', ['users' => $users]);
    }
    public function post_example()
    {
        //step 1: get the name and email from the post request
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        //Step 2: check if the name and email are not empty
        if ($name === '' || $email === '') {
            //Step 3: set the session variable (if you want to show the error message in the view)
            $_SESSION['status'] = 'Please fill all the fields';
            //Step 4: redirect to the previous page using $_SERVER['HTTP_REFERER']
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $model = new Model();
            //Step 5: insert the data into the database
            $model->rawQuery('INSERT INTO users (name, email) VALUES (:name, :email)');
            $_SESSION['status'] = 'Data inserted successfully';
            //Step 6: redirect to the previous page using $_SERVER['HTTP_REFERER']
            header('Location:' . $_SERVER['HTTP_REFERER']); 
            // OR 
            //Step 7: if you want to redirect to another page then you can use
            header('Location:' . base_url('about'));
            exit();
        }

    }


}