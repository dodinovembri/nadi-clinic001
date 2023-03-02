<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;

class ConfigController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/config/index', $data);
    }

    public function update($id)
    {
        $config = new ConfigModel();

        $logo = $this->request->getFile('logo');
        if ($logo != '') {
            $logo_name = $logo->getRandomName();
            $logo->move('assets/images/logo/', $logo_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'logo' => $logo_name
            ]);
        }

        $favicon = $this->request->getFile('favicon');
        if ($favicon != '') {
            $favicon_name = $favicon->getRandomName();
            $favicon->move('assets/images/logo/', $favicon_name);

            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'favicon' => $favicon_name
            ]);
        }

        $config->update($id, [
            'logo_text'   => $this->request->getPost('logo_text'),
            'monday_friday_opening_hours' => $this->request->getPost('monday_friday_opening_hours'),
            'saturday_opening_hours' => $this->request->getPost('saturday_opening_hours'),
            'sunday_opening_hours' => $this->request->getPost('sunday_opening_hours'),
            'name' => $this->request->getPost('name'),
            'short_description' => $this->request->getPost('short_description'),
            'address' => $this->request->getPost('address'),
            'copyright' => $this->request->getPost('copyright'),
            'url_map' => $this->request->getPost('url_map'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'make_appointment_description' => $this->request->getPost('make_appointment_description'),
            'keyword' => $this->request->getPost('keyword'),
            'description' => $this->request->getPost('description'),
            'facebook_url' => $this->request->getPost('facebook_url'),
            'googleplus_url' => $this->request->getPost('googleplus_url'),
            'mail_url' => $this->request->getPost('mail_url'),
            'forrst_url' => $this->request->getPost('forrst_url'),
            'twitter_url' => $this->request->getPost('twitter_url'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/config'));
    }
}
