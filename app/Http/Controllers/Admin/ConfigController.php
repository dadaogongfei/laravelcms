<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ConfigController extends Controller{
    public function index(){
        echo 'hello';
    }
    public function add(){
      return view('admin.config.add');  
    }
    public function edit(){
        
    }
    public function delete(){
        
    }
}