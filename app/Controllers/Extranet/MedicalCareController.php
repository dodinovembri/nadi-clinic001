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
        $data['config'] = $config->get()->getFirstRow();
        // medical_care
        $medical_care = new MedicalCareModel();
        $data['medical_cares'] = $medical_care->get()->getResult();

        return view('extranet/medical_care/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        
        return view('extranet/medical_care/create', $data);
    }

    public function store()
    {
        $medical_care = new MedicalCareModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/medical_cares/', $image_name);

        $medical_care->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'text1' => $this->request->getPost('text1'),
            'text2' => $this->request->getPost('text2'),
            'text3' => $this->request->getPost('text3'),
            'text4' => $this->request->getPost('text4'),
            'text5' => $this->request->getPost('text5'),
            'text_button' => $this->request->getPost('text_button'),
            'button_link' => $this->request->getPost('button_link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/medical_care'));
    }

    public function show($id)
    {
        $medical_care = new MedicalCareModel();
        $data['medical_care'] = $medical_care->where('id', $id)->get()->getFirstRow();

        return view('extranet/medical_care/show', $data);
    }

    public function edit($id)
    {
        $medical_care = new MedicalCareModel();
        $data['medical_care'] = $medical_care->where('id', $id)->get()->getFirstRow();

        return view('extranet/medical_care/edit', $data);
    }

    public function update($id)
    {
        $medical_care = new MedicalCareModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/medical_cares/', $image_name);

            $medical_care->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text3' => $this->request->getPost('text3'),
                'text4' => $this->request->getPost('text4'),
                'text5' => $this->request->getPost('text5'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $medical_care->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'name' => $this->request->getPost('name'),
                'text1' => $this->request->getPost('text1'),
                'text2' => $this->request->getPost('text2'),
                'text3' => $this->request->getPost('text3'),
                'text4' => $this->request->getPost('text4'),
                'text5' => $this->request->getPost('text5'),
                'text_button' => $this->request->getPost('text_button'),
                'button_link' => $this->request->getPost('button_link'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/medical_care'));
    }

    public function destroy($id)
    {
        $medical_care = new MedicalCareModel();
        $medical_care->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/medical_care'));
    }
}