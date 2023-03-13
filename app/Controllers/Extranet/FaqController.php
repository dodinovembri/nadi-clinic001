<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\FaqModel;

class FaqController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // faq
        $faq = new FaqModel();
        $data['faqs'] = $faq->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/faq/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/faq/create', $data);
    }

    public function store()
    {
        $faq = new FaqModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/faqs/', $image_name);

        $faq->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'image' => $image_name,
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/faq'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // faq
        $faq = new FaqModel();
        $data['faq'] = $faq->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/faq/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // faq
        $faq = new FaqModel();
        $data['faq'] = $faq->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/faq/edit', $data);
    }

    public function update($id)
    {
        $faq = new FaqModel();
        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/faq/', $image_name);
            $faq->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }

        $faq->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/faq'));
    }

    public function destroy($id)
    {
        $faq = new FaqModel();
        $faq->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/faq'));
    }
}
