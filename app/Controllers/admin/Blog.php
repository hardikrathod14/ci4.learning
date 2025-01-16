<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModal;
    public function __construct()
    {
        $this->blogModal = new BlogModel();
        helper(['theme_helpers']);
    }
    public function index()
    {
        $data['title'] = "Blogs";
        return view('admin/blog/blogs', $data);
    }

    public function loadBlogs()
    {
        $data['blogs'] = $this->blogModal->findAll();
        return view('admin/blog/blog_data', $data);
    }

    public function save()
    {
        if ($this->request->is('post')) {
            $postData = $this->request->getPost();
            $this->blogModal->save($postData);
            echo json_encode(['type' => 'success', 'message' => 'Added success fully']);
        }
    }
}
