<?php

require 'UserModules/UserModule.php';

class UserController
{
    public $userModule;

    public  function __construct()
    {
        $this->userModule = new UserModule();
    }

    // gets the all datas from $_POST and sends to module
    public function create($datas,$files)
    {
        $this->userModule->insert($datas,$files);
//        header('location:/listPage');
//        echo "<script> alert('inserted Successfully') </script>";
    }

    // edit functionality
    public function edit($id)
    {
       $productOne = $this->userModule->viewOneProduct($id);
       require 'Views/edit.view.php';
    }

    // delete functionality
    public function delete($id)
    {
        $this->userModule->deleteOneProduct($id);
        header('location:/listPage');
    }

    // update functionality
    public function update($values,$img)
    {
        $this->userModule->updateOneProduct($values,$img);
        header('location:/listPage');
    }

    // list of all Products functionality
    public function lists()
    {
       $listsOfProducts = $this->userModule->getAllProducts();
       require 'Views/listPage.php';
    }

    // when the localhost hits this function will runs first
    public function index()
    {
        require 'Views/form.view.php';
    }
}