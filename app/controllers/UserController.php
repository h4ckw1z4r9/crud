<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UserController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function view() {
        $data['users'] = $this->UserModel->all();
        $this->call->view('users/view', $data);
    }

    public function create() {
        if($this->io->method() == 'post') {
            $username = $this->io->post('username');//$_POST['username]
            $email = $this->io->post('email');

            $data = [
                'username' => $username,
                'email' => $email
            ];
            if($this->UserModel->insert($data)) {
                redirect();
            } else {
                echo 'Something went wrong.';
            }
        } else {
            $this->call->view('users/create');
        }
    }

    public function update($id) {
        $users = $this->UserModel->find($id);

        if($this->io->method() == 'post') {
            $username = $this->io->post('username');//$_POST['username]
            $email = $this->io->post('email');

            $data = [
                'username' => $username,
                'email' => $email
            ];
            if($this->UserModel->update($users['id'], $data)) {
                redirect();
            } else {
                echo 'Something went wrong.';
            }
        } else {
            $data['user'] = $users;
            $this->call->view('users/update', $data);
        }
    }

    function delete($id) {
        if($this->UserModel->delete($id)) {
            redirect();
        }
    }
}