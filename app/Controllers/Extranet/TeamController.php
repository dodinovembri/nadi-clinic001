<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\TeamModel;
use App\Models\DepartmentModel;

class TeamController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // team
        $team = new TeamModel();
        $data['teams'] = $team->where('client_id', session()->get('client_id'))->get()->getResult();     

        return view('extranet/team/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // department
        $department = new DepartmentModel();
        $data['departments'] = $department->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getResult();

        return view('extranet/team/create', $data);
    }

    public function store()
    {
        $team = new TeamModel();

        $image1 = $this->request->getFile('image1');
        $image1_name = $image1->getRandomName();
        $image1->move('assets/images/team/', $image1_name);

        $image2 = $this->request->getFile('image2');
        $image2_name = $image2->getRandomName();
        $image2->move('assets/images/team/', $image2_name);    
        
        $image3 = $this->request->getFile('image3');
        $image3_name = $image3->getRandomName();
        $image3->move('assets/images/team/', $image3_name);            

        $team->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'department_id' => $this->request->getPost('department_id'),
            'name' => $this->request->getPost('name'),
            'short_description' => $this->request->getPost('short_description'),
            'speciality' => $this->request->getPost('speciality'),
            'degres' => $this->request->getPost('degres'),
            'training' => $this->request->getPost('training'),
            'office' => $this->request->getPost('office'),
            'work_days' => $this->request->getPost('work_days'),
            'image1' => $image1_name,
            'image2' => $image2_name,
            'image3' => $image3_name,
            'facebook_url' => $this->request->getPost('facebook_url'),
            'googleplus_url' => $this->request->getPost('googleplus_url'),
            'mail_url' => $this->request->getPost('mail_url'),
            'forrst_url' => $this->request->getPost('forrst_url'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/team'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // team       
        $team = new TeamModel();
        $data['team'] = $team->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/team/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // team       
        $team = new TeamModel();
        $data['team'] = $team->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/team/edit', $data);
    }

    public function update($id)
    {
        $team = new TeamModel();

        // image 1
        $image1 = $this->request->getFile('image1');
        if ($image1 != '') {
            $image1_name = $image1->getRandomName();
            $image1->move('assets/images/team/', $image1_name);
            $team->update($id, [
                'image1' => $image1_name
            ]);
        }

        // image 2
        $image2 = $this->request->getFile('image2');
        if ($image2 != '') {
            $image2_name = $image2->getRandomName();
            $image2->move('assets/images/team/', $image2_name);
            $team->update($id, [
                'image2' => $image2_name
            ]);
        } 
        
        // image 3
        $image3 = $this->request->getFile('image3');
        if ($image3 != '') {
            $image3_name = $image3->getRandomName();
            $image3->move('assets/images/team/', $image3_name);
            $team->update($id, [
                'image3' => $image3_name
            ]);
        } 

        $team->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'short_description' => $this->request->getPost('short_description'),
            'speciality' => $this->request->getPost('speciality'),
            'degres' => $this->request->getPost('degres'),
            'training' => $this->request->getPost('training'),
            'office' => $this->request->getPost('office'),
            'work_days' => $this->request->getPost('work_days'),
            'facebook_url' => $this->request->getPost('facebook_url'),
            'googleplus_url' => $this->request->getPost('googleplus_url'),
            'mail_url' => $this->request->getPost('mail_url'),
            'forrst_url' => $this->request->getPost('forrst_url'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/team'));
    }

    public function destroy($id)
    {
        $team = new TeamModel();
        $team->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/team'));
    }
}
