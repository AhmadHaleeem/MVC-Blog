<?php
class AdminController extends HomeController {
    public function __construct()
    {
        parent::__construct();
        Session::checkSession();
    }

    public function home() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/home');
        $this->load->view('admin/footer');
    }



    public function addCategory() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/addCategory');
        $this->load->view('admin/footer');
    }

    public function insertCategory() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $table = 'category';
        $name  = $_POST['name'];
        $title = $_POST['title'];
        if (!empty($name) && !empty($title)) {
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
            $url =  BASE_URL . '/AdminController/categoryList?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
            $this->load->view('admin/addCategory', $messageData);
            $this->load->view('admin/footer');
        } else {
            $messageData['msg'] = "<div class='alert alert-info '>Fields can't be empty</div>";
            $url =  BASE_URL . '/AdminController/addCategory?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
        }
    }

    public function categoryList() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('catModel');
        $data['allCats'] = $catModel->catList($table);
        $this->load->view('admin/categoryList', $data);
        $this->load->view('admin/footer');
    }

    public function editCategory($id = NULL) {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $table = 'category';
        $catModel = $this->load->model('catModel');
        $data['catById'] = $catModel->catById($table, $id);

        $this->load->view('admin/editCat', $data);
        $this->load->view('admin/footer');
    }


    public function updateCat($id = NULL) {
        $table = 'category';
        $name  = $_POST['name'];
        $title = $_POST['title'];
        $cond  = "id= $id";
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
        $url =  BASE_URL . '/AdminController/categoryList?msg=' . urlencode(serialize($messageData));
        header('Location:' . $url);
    }

    public function deleteCategory($id = NULL ) {
        $table = 'category';
        $cond  = "id=$id";
        $limit = 1;
        $catModel = $this->load->model('catModel');
        $result = $catModel->catDelete($table, $cond, $limit);
        if ($result == 1) {
            $messageData['msg'] = "<div class='alert alert-success '>Category Deleted Successfully</div>";
        } else {
            $messageData['msg'] = "<div class='alert alert-danger '>Category not Deleted</div>";
        }
        $url =  BASE_URL . '/AdminController/categoryList?msg=' . urlencode(serialize($messageData));
        header('Location:' . $url);
    }

    public function addArticle() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $tableCategory = 'category';
        $catModel = $this->load->model('catModel');
        $data['allCats'] = $catModel->catList($tableCategory);
        $this->load->view('admin/addPost', $data);
        $this->load->view('admin/footer');
    }

    public function articleList() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $data = array();

        $tablePost = 'post';
        $tableCategory = 'category';
        $limit = 100;
        $postModel = $this->load->model('PostModel');
        $data['allPosts'] = $postModel->getAllPosts($tablePost, $limit);
        $catModel = $this->load->model('catModel');
        $data['allCats'] = $catModel->catList($tableCategory);
        $this->load->view('admin/postList', $data);
        $this->load->view('admin/footer');
    }

    public function addNewPost() {
        $table = 'post';
        $title     = $_POST['title'];
        $content   = $_POST['content'];
        $category  = $_POST['category'];
        if (!empty($title) && !empty($content)) {
            $data = array(
                'title'    => $title,
                'content'  => $content,
                'cat'      => $category,
            );
            $postModel = $this->load->model('PostModel');
            $result = $postModel->insertPost($table, $data);
            $messageData = array();
            if ($result == 1) {
                $messageData['msg'] = "<div class='alert alert-success '>Post Added Successfully</div>";
            } else {
                $messageData['msg'] = "<div class='alert alert-danger '>Post not Added</div>";
            }
            $url =  BASE_URL . '/AdminController/articleList?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
            $this->load->view('admin/addPost', $messageData);
            $this->load->view('admin/footer');
        } else {
            $messageData['msg'] = "<div class='alert alert-info '>Fields can't be empty</div>";
            $url =  BASE_URL . '/AdminController/addArticle?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
        }
    }

    public function editArticle($id = NULL) {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $tablePost     = 'post';
        $tableCategory = 'category';

        $catModel = $this->load->model('catModel');
        $data['allCats'] = $catModel->catList($tableCategory);

        $postModel = $this->load->model('PostModel');
        $data['postByID'] = $postModel->postById($tablePost, $id);
        $this->load->view('admin/editPost', $data);
        $this->load->view('admin/footer');
    }

    public function updatePost($id) {
        $table = 'post';
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category  = $_POST['category'];
        $cond  = "id = $id";
        $data  = array(
            'title' => $title,
            'content'  => $content,
            'cat' => $category,
        );
        $postModel = $this->load->model('PostModel');
        $result    =  $postModel->postUpdate($table, $data, $cond);
        if ($result == 1) {
            $messageData['msg'] = "<div class='alert alert-success '>Post Updated Successfully</div>";
        } else {
            $messageData['msg'] = "<div class='alert alert-danger '>Post not Updated</div>";
        }
        $url =  BASE_URL . '/AdminController/articleList?msg=' . urlencode(serialize($messageData));
        header('Location:' . $url);
    }

    public function deleteArticle($id = NULL ) {
        $table = 'post';
        $cond  = "id=$id";
        $limit = 1;
        $postModel = $this->load->model('PostModel');
        $result = $postModel->postDelete($table, $cond, $limit);
        if ($result == 1) {
            $messageData['msg'] = "<div class='alert alert-success '>Post Deleted Successfully</div>";
        } else {
            $messageData['msg'] = "<div class='alert alert-danger '>Post not Deleted</div>";
        }
        $url =  BASE_URL . '/AdminController/articleList?msg=' . urlencode(serialize($messageData));
        header('Location:' . $url);
    }

    public function uioption() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/ui');
        $this->load->view('admin/footer');
    }

    public function changeUi($id) {
        $table = 'tbl_ui';
        $color = $_POST['color'];
        $cond  = "id = $id";
        if (!empty($color)) {
            $data = array(
                'color'  => $color,
            );
            $uiModel = $this->load->model('uiModel');
            $result = $uiModel->updateOption($table, $data, $cond);
            $messageData = array();
            if ($result == 1) {
                $messageData['msg'] = "<div class='alert alert-success '>Color Updated Successfully</div>";
            } else {
                $messageData['msg'] = "<div class='alert alert-danger '>Color not Updated</div>";
            }
            $url =  BASE_URL . '/AdminController/uioption?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
        } else {
            $messageData['msg'] = "<div class='alert alert-info '>Fields can't be empty</div>";
            $url =  BASE_URL . '/AdminController/uioption?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
        }
    }
}