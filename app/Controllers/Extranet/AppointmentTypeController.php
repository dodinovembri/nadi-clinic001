<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\AppointmentTypeModel;

class AppointmentTypeController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment type
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_type'] = $appointment_type->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/appointment_type/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/appointment_type/create', $data);
    }

    public function store()
    {
        $appointment_type = new AppointmentTypeModel();

        $appointment_type->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/appointment_type'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment type
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_type'] = $appointment_type->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/appointment_type/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment type
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_type'] = $appointment_type->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/appointment_type/edit', $data);
    }

    public function update($id)
    {
        $appointment_type = new AppointmentTypeModel();

        $appointment_type->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'icon' => $this->request->getPost('icon'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/appointment_type'));
    }

    public function destroy($id)
    {
        // appointment type
        $appointment_type = new AppointmentTypeModel();
        $appointment_type->delete($id);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/appointment_type'));
    }
}
