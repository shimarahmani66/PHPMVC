<?php
namespace Application\Controllers;
use Application\Model\Article;
use Application\Model\Category;
class Home extends Controller{
    public function index(){
        $category=new Category();
        $categories=$category->all();
        $article=new Article();
        $articles=$article->all();
        return $this->view('App.index',compact('categories','articles'));
    }
    public function category($id){
        $ob_category=new Category();
        $categories=$ob_category->all();
        $ob_category1=new Category();
        $category=$ob_category1->find($id);
        $ob_category2=new Category();
        $articles=$ob_category2->articles($id);
        return $this->view('App.Category',compact('categories','articles','category'));

    }
    public function show($id){
        $category=new Category();
        $categories=$category->all();
        $article=new Article();
        $article=$article->find($id);
        return $this->view('App.Show',compact('categories','article'));
    }
}