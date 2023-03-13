<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // user
        $user = new UserModel();
        $data['users'] = $user->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/user/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/user/create', $data);
    }

    public function store()
    {
        $user = new UserModel();
        $user = $user->where('email', $this->request->getPost('email'))->where('client_id', session()->get('client_id'))->get()->getFirstRow();
        if ($user) {
            session()->setFlashdata('info', 'User dengan email ini sudah tersedia');
            return redirect()->to(base_url('extranet/user'));
        } else {
            $image = $this->request->getFile('image');
            $image_name = $image->getRandomName();
            $image->move('assets/images/user/', $image_name);

            $user->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'client_id' => session()->get('client_id'),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'image' => $image_name,
                'role_code' => $this->request->getPost('role_code'),
                'status' => $this->request->getPost('status')
            ]);

            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('extranet/user'));
        }
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // user
        $user = new UserModel();
        $data['user'] = $user->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/user/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // user
        $user = new UserModel();
        $data['user'] = $user->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/user/edit', $data);
    }

    public function update($id)
    {
        $user = new UserModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/user/', $image_name);
            $user->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }

        $user->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'role_code' => $this->request->getPost('role_code'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/user'));
    }

    public function destroy($id)
    {
        $user = new UserModel();
        $user->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/user'));
    }
}
