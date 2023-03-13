<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\AppointmentModel;

class AppointmentController extends BaseController
{
    public function index()
    {           
        // config
        $config = new ConfigModel();
        $data['config']   = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment
        $appointment = new AppointmentModel();
        $data['appointments'] = $appointment->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getResult();

        return view('extranet/appointment/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config']   = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/appointment/create', $data);
    }

    public function store()
    {                  
        $appointment = new AppointmentModel();

        $appointment->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'department_id' => $this->request->getPost('department_id'),
            'name' => $this->request->getPost('name'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'phone_number' => $this->request->getPost('phone_number'),
            'email' => $this->request->getPost('email'),
            'appointment_reason' => $this->request->getPost('appointment_reason'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/appointment'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config']   = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment 
        $appointment = new AppointmentModel();
        $data['appointment'] = $appointment->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/appointment/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config']   = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // appointment     
        $appointment = new AppointmentModel();
        $data['appointment'] = $appointment->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/appointment/edit', $data);
    }

    public function update($id)
    {      
        $appointment = new AppointmentModel();

        $appointment->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'department_id' => $this->request->getPost('department_id'),
            'name' => $this->request->getPost('name'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'phone_number' => $this->request->getPost('phone_number'),
            'email' => $this->request->getPost('email'),
            'appointment_reason' => $this->request->getPost('appointment_reason'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/appointment'));
    }

    public function destroy($id)
    {    
        $appointment = new AppointmentModel();
        $appointment->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/appointment'));
    }
}
