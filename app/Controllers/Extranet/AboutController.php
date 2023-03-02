<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\AboutModel;

class AboutController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // about
        $about = new AboutModel();
        $data['about'] = $about->get()->getFirstRow();

        return view('extranet/about/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/about/create', $data);
    }

    public function store()
    {
        $about = new AboutModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/abouts/', $image_name);

        $about->insert([
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
        return redirect()->to(base_url('extranet/about'));
    }

    public function show($id)
    {
        $about = new AboutModel();
        $data['about'] = $about->where('id', $id)->get()->getFirstRow();

        return view('extranet/about/show', $data);
    }

    public function edit($id)
    {
        $about = new AboutModel();
        $data['about'] = $about->where('id', $id)->get()->getFirstRow();

        return view('extranet/about/edit', $data);
    }

    public function update($id)
    {
        $about = new AboutModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/abouts/', $image_name);

            $about->update($id, [
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
            $about->update($id, [
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
        return redirect()->to(base_url('extranet/about'));
    }

    public function destroy($id)
    {
        $about = new AboutModel();
        $about->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/about'));
    }
}
