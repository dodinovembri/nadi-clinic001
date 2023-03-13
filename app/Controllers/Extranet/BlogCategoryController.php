<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\BlogCategoryModel;

class BlogCategoryController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // blog_category
        $blog_category = new BlogCategoryModel();
        $data['blog_categories'] = $blog_category->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/blog_category/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();

        return view('extranet/blog_category/create', $data);
    }

    public function store()
    {
        $blog_category = new BlogCategoryModel();

        $blog_category->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'name' => $this->request->getPost('name'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/blog_category'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // blog category   
        $blog_category = new BlogCategoryModel();
        $data['blog_category'] = $blog_category->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/blog_category/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        //blog category       
        $blog_category = new BlogCategoryModel();
        $data['blog_category'] = $blog_category->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/blog_category/edit', $data);
    }

    public function update($id)
    {
        $blog_category = new BlogCategoryModel();

        $blog_category->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'name' => $this->request->getPost('name'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/blog_category'));
    }

    public function destroy($id)
    {
        $blog_category = new BlogCategoryModel();
        $blog_category->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/blog_category'));
    }
}
