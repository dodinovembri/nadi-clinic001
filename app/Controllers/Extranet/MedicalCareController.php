<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\MedicalCareModel;

class MedicalCareController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // medical_care
        $medical_care = new MedicalCareModel();
        $data['medical_cares'] = $medical_care->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/medical_care/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/medical_care/create', $data);
    }

    public function store()
    {
        $medical_care = new MedicalCareModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/medical_care/', $image_name);

        $medical_care->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'icon' => $image_name,
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/medical_care'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // medical care        
        $medical_care = new MedicalCareModel();
        $data['medical_care'] = $medical_care->where('client_id', session()->get('client_id'))->where('id', $id)->get()->getFirstRow();

        return view('extranet/medical_care/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // medical care       
        $medical_care = new MedicalCareModel();
        $data['medical_care'] = $medical_care->where('client_id', session()->get('client_id'))->where('id', $id)->get()->getFirstRow();

        return view('extranet/medical_care/edit', $data);
    }

    public function update($id)
    {
        $medical_care = new MedicalCareModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/medical_care/', $image_name);
            $medical_care->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }  

        $medical_care->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/medical_care'));
    }

    public function destroy($id)
    {
        $medical_care = new MedicalCareModel();
        $medical_care->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/medical_care'));
    }
}
