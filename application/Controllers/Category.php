<?php
namespace Application\Controllers;
use Application\Model\Article;
use Application\Model\Category as CategoryModel;
class Category extends Controller{
    public function index(){
        $category=new CategoryModel();
        $categories=$category->all();
        return $this->view('Panel.Category.index',compact('categories'));
    }
    public function create(){
        return $this->view('Panel.Category.Create');
        
    }
    public function store(){
        $category=new CategoryModel();
        $category->insert($_POST);
        return $this->redirect('Category');
    }
    public function show(){
        return $this->view('Panel.Category.Show');
    }
    public function edit($id){
        $ob_category=new CategoryModel();
        $category=$ob_category->find($id);
        return $this->view('Panel.Category.Edit',compact('category'));
    }
    public function update($id){        
        $category=new CategoryModel();
        $category->update($id,$_POST);
        return $this->redirect('Category');
    }
    public function destroy($id){
        $category=new CategoryModel();
        $category->delete($id);
        return $this->back();
    }
    
}