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
        $data['config'] = $config->get()->getFirstRow();
        // appointment_type
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_types'] = $appointment_type->get()->getResult();

        return view('extranet/appointment_type/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
                      
        return view('extranet/appointment_type/create', $data);
    }

    public function store()
    {
        $appointment_type = new AppointmentTypeModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/appointment_types/', $image_name);

        $appointment_type->insert([
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
        return redirect()->to(base_url('extranet/appointment_type'));
    }

    public function show($id)
    {
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_type'] = $appointment_type->where('id', $id)->get()->getFirstRow();

        return view('extranet/appointment_type/show', $data);
    }

    public function edit($id)
    {
        $appointment_type = new AppointmentTypeModel();
        $data['appointment_type'] = $appointment_type->where('id', $id)->get()->getFirstRow();

        return view('extranet/appointment_type/edit', $data);
    }

    public function update($id)
    {
        $appointment_type = new AppointmentTypeModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/appointment_types/', $image_name);

            $appointment_type->update($id, [
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
            $appointment_type->update($id, [
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
        return redirect()->to(base_url('extranet/appointment_type'));
    }

    public function destroy($id)
    {
        $appointment_type = new AppointmentTypeModel();
        $appointment_type->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/appointment_type'));
    }
}
