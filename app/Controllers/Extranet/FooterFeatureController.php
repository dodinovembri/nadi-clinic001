<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\FooterFeatureModel;

class FooterFeatureController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_features'] = $footer_feature->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/footer_feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/footer_feature/create', $data);
    }

    public function store()
    {
        $footer_feature = new FooterFeatureModel();

        $footer_feature->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/footer-feature'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_feature'] = $footer_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/footer_feature/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // footer feature
        $footer_feature = new FooterFeatureModel();
        $data['footer_feature'] = $footer_feature->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/footer_feature/edit', $data);
    }

    public function update($id)
    {
        $footer_feature = new FooterFeatureModel();

        $footer_feature->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/footer-feature'));
    }

    public function destroy($id)
    {
        $footer_feature = new FooterFeatureModel();
        $footer_feature->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/footer-feature'));
    }
}
