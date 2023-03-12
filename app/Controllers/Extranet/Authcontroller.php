<?php

namespace App\Controllers\Extranet;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login($trial_name = null)
    {
        return view('extranet/auth/login');
    }

    public function auth()
    {
        // get post variable
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // user
        $user = new UserModel();
        $user_data = $user->where('email', $email)->where('role_code', 0)->where('status', 1)->get()->getFirstRow();
        if ($user_data) {
            $pass = $user_data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $user_data->id,
                    'name' => $user_data->name,
                    'email' => $user_data->email,
                    'user_image' => $user_data->image,
                    'role_code' => $user_data->role_code,
                    'client_id' => $user_data->client_id,
                    'logged_in' => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to(base_url('extranet'));
            } else {
                session()->setFlashdata('info', 'Wrong Password');
                return redirect()->to(base_url('ext-login'));
            }
        } else {
            session()->setFlashdata('info', 'Email not Found');
            return redirect()->to(base_url('ext-login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('ext-login'));
    }
}
