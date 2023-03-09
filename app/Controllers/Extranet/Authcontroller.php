<?php

namespace App\Controllers\Extranet;

class AuthController extends BaseController
{
    public function login($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // config
        $config = $db->table("clinic001_" . $trial_access_name . "_config");
        $data['config']   = $config->get()->getFirstRow();
        // trial name
        $data['trial_name'] = $trial_name;
        $data['is_production'] = $is_production;

        return view('extranet/auth/login', $data);
    }

    public function auth($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        $session = session();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // get post variable
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // user
        $user = $db->table("clinic001_" . $trial_access_name . "_users");
        $data = $user->where('email', $email)->where('role_code', 0)->get()->getFirstRow();
        if ($data) {
            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data->id,
                    'firstname' => $data->firstname,
                    'lastname' => $data->lastname,
                    'email' => $data->email,
                    'role_code' => $data->role_code,
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to(base_url($trial_name . '/extranet'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url($trial_name . '/ext-login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url($trial_name . '/ext-login'));
        }
    }

    public function logout($trial_name = null)
    {
        session()->destroy();
        return redirect()->to(base_url($trial_name . '/ext-login'));
    }
}
