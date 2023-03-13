<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\BenefitModel;

class BenefitController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // benefit
        $benefit = new BenefitModel();
        $data['benefits'] = $benefit->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/benefit/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/benefit/create', $data);
    }

    public function store()
    {
        $benefit = new BenefitModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/benefit/', $image_name);

        $benefit->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'image' => $image_name,
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/benefit'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();    
        // benefit   
        $benefit = new BenefitModel();
        $data['benefit'] = $benefit->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/benefit/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();  
        // benfit    
        $benefit = new BenefitModel();
        $data['benefit'] = $benefit->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/benefit/edit', $data);
    }

    public function update($id)
    {
        $benefit = new BenefitModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/clinic/', $image_name);
            $benefit->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }

        $benefit->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);        

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/benefit'));
    }

    public function destroy($id)
    {
        $benefit = new BenefitModel();
        $benefit->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/benefit'));
    }
}
