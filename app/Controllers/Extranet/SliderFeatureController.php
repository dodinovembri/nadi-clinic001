<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\SliderFeatureModel;

class SliderFeatureController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // slider_feature
        $slider_feature = new SliderFeatureModel();
        $data['slider_features'] = $slider_feature->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/slider_feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();      
        
        return view('extranet/slider_feature/create', $data);
    }

    public function store()
    {
        $slider_feature = new SliderFeatureModel();

        $slider_feature->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/slider-feature'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();                 
        // slider feature
        $slider_feature = new SliderFeatureModel();
        $data['slider_feature'] = $slider_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/slider_feature/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();   
        // slider feature
        $slider_feature = new SliderFeatureModel();
        $data['slider_feature'] = $slider_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/slider_feature/edit', $data);
    }

    public function update($id)
    {
        $slider_feature = new SliderFeatureModel();
        $slider_feature->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/slider-feature'));
    }

    public function destroy($id)
    {
        $slider_feature = new SliderFeatureModel();
        $slider_feature->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/slider-feature'));
    }
}
