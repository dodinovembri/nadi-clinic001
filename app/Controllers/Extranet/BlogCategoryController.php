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
        $data['config'] = $config->get()->getFirstRow();
        // blog_category
        $blog_category = new BlogCategoryModel();
        $data['blog_categories'] = $blog_category->get()->getResult();

        return view('extranet/blog_category/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        
        return view('extranet/blog_category/create', $data);
    }

    public function store()
    {
        $blog_category = new BlogCategoryModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/blog_categorys/', $image_name);

        $blog_category->insert([
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
        return redirect()->to(base_url('extranet/blog_category'));
    }

    public function show($id)
    {
        $blog_category = new BlogCategoryModel();
        $data['blog_category'] = $blog_category->where('id', $id)->get()->getFirstRow();

        return view('extranet/blog_category/show', $data);
    }

    public function edit($id)
    {
        $blog_category = new BlogCategoryModel();
        $data['blog_category'] = $blog_category->where('id', $id)->get()->getFirstRow();

        return view('extranet/blog_category/edit', $data);
    }

    public function update($id)
    {
        $blog_category = new BlogCategoryModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/blog_categorys/', $image_name);

            $blog_category->update($id, [
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
            $blog_category->update($id, [
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
        return redirect()->to(base_url('extranet/blog_category'));
    }

    public function destroy($id)
    {
        $blog_category = new BlogCategoryModel();
        $blog_category->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/blog_category'));
    }
}
