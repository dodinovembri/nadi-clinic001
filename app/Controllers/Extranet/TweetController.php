<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\TweetModel;

class TweetController extends BaseController
{
    public function index($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // trial name
        $data['trial_name'] = $trial_name; 
        $data['is_production'] = $is_production;         
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // tweet
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->get()->getResult();

        return view('extranet/tweet/index', $data);
    }

    public function create($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // trial name
        $data['trial_name'] = $trial_name; 
        $data['is_production'] = $is_production;         
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        
        return view('extranet/tweet/create', $data);
    }

    public function store($trial_name = null)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        $tweet = new TweetModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/tweets/', $image_name);

        $tweet->insert([
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
        return redirect()->to(base_url('extranet/tweet'));
    }

    public function show($trial_name = null, $id)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // trial name
        $data['trial_name'] = $trial_name; 
        $data['is_production'] = $is_production;         
        $tweet = new TweetModel();
        $data['tweet'] = $tweet->where('id', $id)->get()->getFirstRow();

        return view('extranet/tweet/show', $data);
    }

    public function edit($trial_name = null, $id)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        // trial name
        $data['trial_name'] = $trial_name; 
        $data['is_production'] = $is_production;         
        $tweet = new TweetModel();
        $data['tweet'] = $tweet->where('id', $id)->get()->getFirstRow();

        return view('extranet/tweet/edit', $data);
    }

    public function update($trial_name = null, $id)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        $tweet = new TweetModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/tweets/', $image_name);

            $tweet->update($id, [
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
            $tweet->update($id, [
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
        return redirect()->to(base_url('extranet/tweet'));
    }

    public function destroy($trial_name = null, $id)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
            $is_production = 1;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $is_production = 0;
        }
        $tweet = new TweetModel();
        $tweet->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/tweet'));
    }
}
