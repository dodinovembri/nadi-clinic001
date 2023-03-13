<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\DepartmentModel;

class DepartmentController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // department
        $department = new DepartmentModel();
        $data['departments'] = $department->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/department/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/department/create', $data);
    }

    public function store()
    {
        $department = new DepartmentModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/department/', $image_name);

        $department->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/department'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();  
        // department     
        $department = new DepartmentModel();
        $data['department'] = $department->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/department/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();    
        // department   
        $department = new DepartmentModel();
        $data['department'] = $department->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/department/edit', $data);
    }

    public function update($id)
    {
        $department = new DepartmentModel();

        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/department/', $image_name);
            $department->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }

        $department->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/department'));
    }

    public function destroy($id)
    {
        $department = new DepartmentModel();
        $department->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/department'));
    }
}
