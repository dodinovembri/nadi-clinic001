<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\AboutModel;

class ConfigController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        // about
        $about = new AboutModel();
        $data['about']   = $about->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/config/index', $data);
    }

    public function update($id)
    {
        // config
        $config = new ConfigModel();

        // logo
        $logo = $this->request->getFile('logo');
        if ($logo != '') {
            $logo_name = $logo->getRandomName();
            $logo->move('assets/images/logo/', $logo_name);
            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'logo' => $logo_name
            ]);
        }

        // favicon
        $favicon = $this->request->getFile('favicon');
        if ($favicon != '') {
            $favicon_name = $favicon->getRandomName();
            $favicon->move('assets/images/favicon/', $favicon_name);
            $config->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'favicon' => $favicon_name
            ]);
        }

        $config->update($id, [
            'modified_at'   => $this->request->getPost('modified_at'),
            'logo_text'   => $this->request->getPost('logo_text'),
            'monday_friday_opening_hours'   => $this->request->getPost('monday_friday_opening_hours'),
            'saturday_opening_hours'   => $this->request->getPost('saturday_opening_hours'),
            'sunday_opening_hours'   => $this->request->getPost('sunday_opening_hours'),
            'name'   => $this->request->getPost('name'),
            'short_description'   => $this->request->getPost('short_description'),
            'address'   => $this->request->getPost('address'),
            'copyright'   => $this->request->getPost('copyright'),
            'url_map'   => $this->request->getPost('url_map'),
            'latitude'   => $this->request->getPost('latitude'),
            'longitude'   => $this->request->getPost('longitude'),
            'make_appointment_description'   => $this->request->getPost('make_appointment_description'),
            'keyword'   => $this->request->getPost('keyword'),
            'description'   => $this->request->getPost('description'),
            'facebook_url'   => $this->request->getPost('facebook_url'),
            'googleplus_url'   => $this->request->getPost('googleplus_url'),
            'mail_url'   => $this->request->getPost('mail_url'),
            'forrst_url'   => $this->request->getPost('forrst_url'),
            'twitter_url'   => $this->request->getPost('twitter_url'),
            'phone'   => $this->request->getPost('phone'),
            'email'   => $this->request->getPost('email')
        ]);

        // about
        $about = new AboutModel();
        $image1 = $this->request->getFile('image1');
        if ($image1 != '') {
            $image1_name = $image1->getRandomName();
            $image1->move('assets/images/about/', $image1_name);

            $about->update($this->request->getPost('about_id'), [
                'modified_at' => date('Y-m-d H:i:s'),
                'image1' => $image1_name
            ]);
        }

        $image2 = $this->request->getFile('image2');
        if ($image2 != '') {
            $image2_name = $image2->getRandomName();
            $image2->move('assets/images/about/', $image2_name);

            $about->update($this->request->getPost('about_id'), [
                'modified_at' => date('Y-m-d H:i:s'),
                'image2' => $image2_name
            ]);
        }

        $image3 = $this->request->getFile('image3');
        if ($image3 != '') {
            $image3_name = $image3->getRandomName();
            $image3->move('assets/images/about/', $image2_name);

            $about->update($this->request->getPost('about_id'), [
                'modified_at' => date('Y-m-d H:i:s'),
                'image3' => $image3_name
            ]);
        }

        $about->update($this->request->getPost('about_id'), [
            'title'   => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'motto' => $this->request->getPost('motto'),
            'motto_by' => $this->request->getPost('motto_by'),
            'our_feature' => $this->request->getPost('our_feature'),
            'our_feature_by' => $this->request->getPost('our_feature_by'),
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/config'));
    }
}
