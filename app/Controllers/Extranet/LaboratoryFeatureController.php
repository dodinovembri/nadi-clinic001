<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\LaboratoryFeatureModel;

class LaboratoryFeatureController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // laboratory_feature
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_features'] = $laboratory_feature->get()->getResult();

        return view('extranet/laboratory_feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        
        return view('extranet/laboratory_feature/create', $data);
    }

    public function store()
    {
        $laboratory_feature = new LaboratoryFeatureModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/laboratory_features/', $image_name);

        $laboratory_feature->insert([
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
        return redirect()->to(base_url('extranet/laboratory_feature'));
    }

    public function show($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_feature'] = $laboratory_feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/laboratory_feature/show', $data);
    }

    public function edit($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_feature'] = $laboratory_feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/laboratory_feature/edit', $data);
    }

    public function update($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/laboratory_features/', $image_name);

            $laboratory_feature->update($id, [
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
            $laboratory_feature->update($id, [
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
        return redirect()->to(base_url('extranet/laboratory_feature'));
    }

    public function destroy($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();
        $laboratory_feature->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/laboratory_feature'));
    }
}
