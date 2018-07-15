<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use Illuminate\Http\Response;
class ConfigController extends Controller{
    private $config=null;       
    public function __construct(Config $config){
         $this->config=$config;      
    }
    public function index(){
        $keyword='';
        if(request('title')){
            $keyword=request('title');
        }
        $list=Config::orderBy('id', 'DESC')->where(function($query) use($keyword){
            $query->where('title','like',"%$keyword%");
        }) ->paginate(3);
        return view('config.index',['list'=>$list]);
    }
    public function add(){
      return view('config.add');  
    }
    public function edit($id){
        $info=Config::find($id);
        return view('config.edit');
    }
    public function doPost(Request $request){
        $ret=$this->config->validate($request->all());
        if($ret!==true){
            return ['status'=>0,'message'=>$ret];
        }else{
            if($this->config->store($request))
            return ['status'=>1,'message'=>'添加成功！'];
            else 
            return ['status'=>0,'message'=>'添加失败！'];
        }
    }
    public function delete($id){
      $ret= Config::destroy($id);
      if($ret){
          
      }
    }
}