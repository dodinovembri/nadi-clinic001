<?php

namespace App\Controllers\Extranet;

use App\Models\ClientModel;
use App\Models\ConfigModel;
use App\Models\AboutModel;

class AboutController extends BaseController
{
    public function index($trial_name = null)
    {
        // client
        $client_model = new ClientModel();
        $client = $client_model->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client->is_production == 1) {
            $is_production = 1;
            $client_id = $client->id;
        } else {
            if ($trial_name != null) {
                $trial_access_name = $trial_name;
            } else {
                $trial_access_name = "default";
            }
            $client = $client_model->where("domain_live_url", base_url())->where('trial_access_name', $trial_access_name)->get()->getFirstRow();
            $client_id = $client->id;
            $is_production = 0;
        }
        // define trial or prod
        $data['trial_name'] = $trial_name;
        $data['is_production'] = $is_production;        
        // config
        $config_model = new ConfigModel();
        $data['config']   = $config_model->where('client_id', $client_id)->get()->getFirstRow();
        // about
        $about_model = new AboutModel();
        $data['about']   = $about_model->where('client_id', $client_id)->get()->getFirstRow();

        return view('extranet/about/index', $data);
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
        $about = $db->table("clinic001_" . $trial_access_name . "_about");
        $image1 = $this->request->getFile('image1');
        if ($image1 != '') {
            $image1_name = $image1->getRandomName();
            $image1->move('assets/images/about/', $image1_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image1' => $image1_name
            ]);
        }

        $image2 = $this->request->getFile('image2');
        if ($image2 != '') {
            $image2_name = $image2->getRandomName();
            $image2->move('assets/images/about/', $image2_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image2' => $image2_name
            ]);
        }

        $image3 = $this->request->getFile('image3');
        if ($image3 != '') {
            $image3_name = $image3->getRandomName();
            $image3->move('assets/images/about/', $image2_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image3' => $image2_name
            ]);
        }

        $image4 = $this->request->getFile('image4');
        if ($image4 != '') {
            $image4_name = $image4->getRandomName();
            $image4->move('assets/images/about/', $image4_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image4' => $image4_name
            ]);
        }

        $image5 = $this->request->getFile('image5');
        if ($image5 != '') {
            $image5_name = $image5->getRandomName();
            $image5->move('assets/images/about/', $image5_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image5' => $image5_name
            ]);
        }

        $image6 = $this->request->getFile('image6');
        if ($image6 != '') {
            $image6_name = $image6->getRandomName();
            $image6->move('assets/images/about/', $image6_name);

            $about->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image6' => $image6_name
            ]);
        }

        $about->update($id, [
            'title'   => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'motto' => $this->request->getPost('motto'),
            'motto_by' => $this->request->getPost('motto_by'),
            'our_feature' => $this->request->getPost('our_feature'),
            'our_feature_by' => $this->request->getPost('our_feature_by'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/about'));
    }
}
