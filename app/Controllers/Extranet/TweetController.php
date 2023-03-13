<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\TweetModel;

class TweetController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // tweet
        $tweet = new TweetModel();
        $data['tweets'] = $tweet->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/tweet/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/tweet/create', $data);
    }

    public function store()
    {
        $tweet = new TweetModel();

        $tweet->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/tweet'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // tweet
        $tweet = new TweetModel();
        $data['tweet'] = $tweet->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/tweet/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // tweet
        $tweet = new TweetModel();
        $data['tweet'] = $tweet->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/tweet/edit', $data);
    }

    public function update($id)
    {
        $tweet = new TweetModel();

        $tweet->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'date' => $this->request->getPost('date'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/tweet'));
    }

    public function destroy($id)
    {
        $tweet = new TweetModel();
        $tweet->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/tweet'));
    }
}
