<?php

namespace App\Controllers\Extranet;
use App\Models\UserModel;
use App\Models\ConfigModel;

class Authcontroller extends BaseController
{
    public function register()
    {
        return view('extranet/auth/login');
    }

    public function login()
    {
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/auth/login', $data);
    }

    public function save()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return base_url('/admin/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }

    public function auth()
    {
        $db = \Config\Database::connect();
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->where('role_code', 0)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $client_config = $db->table("clinic001_client_config");
                $data_client_config = $client_config->where('domain_live_url', base_url())->get()->getFirstRow();
                $ses_data = [
                    'id'       => $data['id'],
                    'firstname'     => $data['firstname'],
                    'lastname'     => $data['lastname'],
                    'email'    => $data['email'],
                    'role_code' => $data['role_code'],
                    'trial_access_name' => $data_client_config->trial_access_name,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('extranet'));
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('ext-login'));
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('ext-login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('ext-login'));
    }
}
