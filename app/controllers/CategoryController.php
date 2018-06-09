<?php
class CategoryController extends HomeController {
    public function __construct()
    {
        parent::__construct();
    }

    public function categoryList() {
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('catModel');
        $data['cat'] = $catModel->catList($table);
        $this->load->view('categories/category', $data);
    }

    public function catById() {
        $data = array();
        $table = 'category';
        $id = 39;
        $catModel = $this->load->model('catModel');
        $data['catById'] = $catModel->catById($table, $id);
        $this->load->view('categories/catById', $data);
    }

    public function addCategory() {
        $this->load->view('categories/addCategory');
    }

    public function insertCategory() {
        $table = 'category';
        $name = $_POST['name'];
        $title = $_POST['title'];
        if ($name == '' || $title == '') {
            $messageData['msg'] = "<div class='alert alert-danger'>The fields can't Be Empty</div>";
            $this->load->view('categories/addCategory', $messageData);
        } else {
            $data = array(
                'name' => $name,
                'title' => $title
            );
            $catModel = $this->load->model('catModel');
            $result = $catModel->insertCat($table, $data);
            $messageData = array();
            if ($result == 1) {
                $messageData['msg'] = "<div class='alert alert-success '>Category Added Successfully</div>";
            } else {
                $messageData['msg'] = "<div class='alert alert-danger '>Category not Added</div>";
            }
            $this->load->view('categories/addCategory', $messageData);
        }
    }

    public function updateCategoryView() {
        $table = 'category';
        $id = 1;
        $catModel = $this->load->model('catModel');
        $data = array();
        $data['catById'] = $catModel->catById($table, $id);
        $this->load->view('categories/catUpdate', $data);
    }

    public function updateCat() {
        $table = 'category';
        $id    = $_POST['id'];
        $name  = $_POST['name'];
        $title = $_POST['title'];
        $cond  = "id=$id";
        $data  = array(
          'name'  => $name,
          'title' => $title
        );
        $catModel = $this->load->model('catModel');
        $result =  $catModel->catUpdate($table, $data, $cond);
        if ($result == 1) {
            $messageData['msg'] = "<div class='alert alert-success '>Category Updated Successfully</div>";
        } else {
            $messageData['msg'] = "<div class='alert alert-danger '>Category not Updated</div>";
        }
        $this->load->view('categories/catUpdate', $messageData);
    }

    public function deleteCatById() {
        $table = 'category';
        $cond = 'id=2';
        $limit = 1;
        $catModel = $this->load->model('catModel');
        $catModel->catDelete($table, $cond, $limit);
    }
}