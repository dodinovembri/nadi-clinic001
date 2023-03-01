<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\SliderFeatureModel;

class SliderFeatureController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // slider_feature
        $slider_feature = new SliderFeatureModel();
        $data['slider_features'] = $slider_feature->get()->getResult();

        return view('extranet/slider_feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        
        return view('extranet/slider_feature/create', $data);
    }

    public function store()
    {
        $slider_feature = new SliderFeatureModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/slider_features/', $image_name);

        $slider_feature->insert([
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
        return redirect()->to(base_url('extranet/slider_feature_feature'));
    }

    public function show($id)
    {
        $slider_feature = new SliderFeatureModel();
        $data['slider_feature'] = $slider_feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/slider_feature_feature/show', $data);
    }

    public function edit($id)
    {
        $slider_feature = new SliderFeatureModel();
        $data['slider_feature'] = $slider_feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/slider_feature_feature/edit', $data);
    }

    public function update($id)
    {
        $slider_feature = new SliderFeatureModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/slider_features/', $image_name);

            $slider_feature->update($id, [
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
            $slider_feature->update($id, [
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
        return redirect()->to(base_url('extranet/slider_feature_feature'));
    }

    public function destroy($id)
    {
        $slider_feature = new SliderFeatureModel();
        $slider_feature->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/slider_feature_feature'));
    }
}
