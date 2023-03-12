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
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // laboratory_feature
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_features'] = $laboratory_feature->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/laboratory_feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/laboratory_feature/create', $data);
    }

    public function store()
    {
        $laboratory_feature = new LaboratoryFeatureModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/laboratory_feature/', $image_name);

        $laboratory_feature->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'icon' => $image_name,
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/laboratory-feature'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // laboratory feature
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_feature'] = $laboratory_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/laboratory_feature/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // laboratory feature
        $laboratory_feature = new LaboratoryFeatureModel();
        $data['laboratory_feature'] = $laboratory_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/laboratory_feature/edit', $data);
    }

    public function update($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/laboratory_feature/', $image_name);
            $laboratory_feature->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'icon' => $image_name
            ]);
        }

        $laboratory_feature->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/laboratory-feature'));
    }

    public function destroy($id)
    {
        $laboratory_feature = new LaboratoryFeatureModel();
        $laboratory_feature->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/laboratory-feature'));
    }
}
