<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\TestimonialModel;

class TestimonialController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // testimonial
        $testimonial = new TestimonialModel();
        $data['testimonials'] = $testimonial->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/testimonial/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/testimonial/create', $data);
    }

    public function store()
    {
        $testimonial = new TestimonialModel();

        $testimonial->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'testimonial' => $this->request->getPost('testimonial'),
            'tester' => $this->request->getPost('tester'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/testimonial'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // testimonial
        $testimonial = new TestimonialModel();
        $data['testimonial'] = $testimonial->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/testimonial/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // testimonial
        $testimonial = new TestimonialModel();
        $data['testimonial'] = $testimonial->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/testimonial/edit', $data);
    }

    public function update($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        $testimonial = new TestimonialModel();
        $testimonial->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'testimonial' => $this->request->getPost('testimonial'),
            'tester' => $this->request->getPost('tester'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/testimonial'));
    }

    public function destroy($id)
    {
        $testimonial = new TestimonialModel();
        $testimonial->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/testimonial'));
    }
}
