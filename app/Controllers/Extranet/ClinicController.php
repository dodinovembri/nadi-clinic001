<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\ClinicModel;

class ClinicController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // clinic
        $clinic = new ClinicModel();
        $data['clinics'] = $clinic->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/clinic/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/clinic/create', $data);
    }

    public function store()
    {
        $clinic = new ClinicModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/clinic/', $image_name);

        $clinic->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'image' => $image_name,
            'name' => $this->request->getPost('name'),
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/clinic'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // clinic     
        $clinic = new ClinicModel();
        $data['clinic'] = $clinic->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/clinic/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // clinic       
        $clinic = new ClinicModel();
        $data['clinic'] = $clinic->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/clinic/edit', $data);
    }

    public function update($id)
    {
        $clinic = new ClinicModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/clinic/', $image_name);
            $clinic->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }

        $clinic->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'title' => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/clinic'));
    }

    public function destroy($id)
    {
        $clinic = new ClinicModel();
        $clinic->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/clinic'));
    }
}
