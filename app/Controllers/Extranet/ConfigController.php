<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\ConfigAboutModel;

class ConfigController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        $config_about = new ConfigAboutModel();
        $data['config_about'] = $config_about->get()->getFirstRow();

        return view('extranet/config/index', $data);
    }

    public function update($id)
    {
        $config = new ConfigModel();

        $frontend_logo = $this->request->getFile('frontend_logo');
        if ($frontend_logo != '') {
            $frontend_logo_name = $frontend_logo->getRandomName();
            $frontend_logo->move('assets/images/logo/', $frontend_logo_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'frontend_logo_name' => $frontend_logo_name
            ]);
        }

        $extranet_logo = $this->request->getFile('extranet_logo');
        if ($extranet_logo != '') {
            $extranet_logo_name = $extranet_logo->getRandomName();
            $extranet_logo->move('assets/images/logo/', $extranet_logo_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'extranet_logo_name' => $extranet_logo_name
            ]);
        }

        $config->update($id, [
            'title'   => $this->request->getPost('title'),
            'keyword' => $this->request->getPost('keyword'),
            'text1_status' => $this->request->getPost('text1_status'),
            'text1_text' => $this->request->getPost('text1_text'),
            'text2_status' => $this->request->getPost('text2_status'),
            'text2_text' => $this->request->getPost('text2_text'),
            'phone' => $this->request->getPost('phone'),
            'header_top_status' => $this->request->getPost('header_top_status'),
            'header_middle_status' => $this->request->getPost('header_middle_status'),
            'guarantee_status' => $this->request->getPost('guarantee_status'),
            'promotion_status' => $this->request->getPost('promotion_status'),
            'product_new_arrival_status' => $this->request->getPost('product_new_arrival_status'),
            'support_status' => $this->request->getPost('support_status'),
            'blog_status' => $this->request->getPost('blog_status'),
            'brand_status' => $this->request->getPost('brand_status'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'working_day' => $this->request->getPost('working_day'),
            'description' => $this->request->getPost('description'),
            'copyright' => $this->request->getPost('copyright'),
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/config'));
    }
}
