<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        // blog
        $blog = new BlogModel();
        $data['blogs'] = $blog->where('client_id', session()->get('client_id'))->get()->getResult();

        return view('extranet/blog/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow();
        
        return view('extranet/blog/create', $data);
    }

    public function store()
    {
        $blog = new BlogModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/blog/', $image_name);

        $blog->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'client_id' => session()->get('client_id'),
            'blog_category_id' => $this->request->getPost('blog_category_id'),
            'date' => $this->request->getPost('date'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $image_name,
            'creator_name' => $this->request->getPost('creator_name'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('extranet/blog'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow(); 
        // blog     
        $blog = new BlogModel();
        $data['blog'] = $blog->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/blog/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->where('client_id', session()->get('client_id'))->where('status', 1)->get()->getFirstRow(); 
        // blog        
        $blog = new BlogModel();
        $data['blog'] = $blog->where('id', $id)->where('client_id', session()->get('client_id'))->get()->getFirstRow();

        return view('extranet/blog/edit', $data);
    }

    public function update($id)
    {
        $blog = new BlogModel();
        
        // image
        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/medical_care/', $image_name);
            $blog->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'image' => $image_name
            ]);
        }          

        $blog->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'blog_category_id' => $this->request->getPost('blog_category_id'),
            'date' => $this->request->getPost('date'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'creator_name' => $this->request->getPost('creator_name'),
            'status' => $this->request->getPost('status')
        ]);
        
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('extranet/blog'));
    }

    public function destroy($id)
    {
        $blog = new BlogModel();
        $blog->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('extranet/blog'));
    }
}
