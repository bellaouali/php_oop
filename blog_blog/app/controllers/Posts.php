<?php 
class Posts extends Controller{

    public function __construct()
    {
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    public function index(){

        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }

    public function add(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
            ];

            if(empty($data['title']) || empty($data['body'])){
                echo "<script>alert('Please Enter Your Posts Is Empty');</script>";
                echo "<script>window.location.href = 'add';</script>";
            }else{
                $this->postModel->addPost($data);
                echo "<script>alert('Your Posts Is Added thinks');</script>";
                echo "<script>window.location.href = 'posts';</script>";
            }
        }
        $this->view('posts/add');
    }

    public function show($id){

        $post = $this->postModel->PostId($id);
        $user = $this->userModel->UserId($post->user_id);

        $data = [
            'post' => $post,
            'user' => $user
        ];

        $this->view('posts/show', $data);
    }

     public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
            ];

            if(empty($data['title']) || empty($data['body'])){
                echo "<script>alert('Your Posts Is Empty Try Againe');</script>";
                echo "<script>window.location.href = 'posts';</script>";
            }else{
                $this->postModel->updatePost($data);
                echo "<script>alert('Your Posts Is Edit thinks');</script>";
                echo "<script>window.location.href = 'posts';</script>";
            }

        }else{

            $post = $this->postModel->PostId($id);
            if($post->user_id <> $_SESSION['user_id']){
                redirect('posts');
            }
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body
            ];
            $this->view('posts/edit', $data);
        }
    }

    public function delete($id){
        if($this->postModel->deletePost($id)){
            redirect('posts');
        }
    }
}                            
                        