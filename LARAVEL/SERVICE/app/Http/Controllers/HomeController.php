<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $categoires = Categories::all();
        return $categoires;
    }
    private function check($data){
        if (!$data) {
            return 'Not found';
        }
    }
    public function show($keywords,$id=''){
       //dua keywords lay id
       $dataCate = DB::table('categories') ->select('id')->where('keywords',$keywords)->first();
        if (empty($dataCate)) {
              return  'Not found';
        }
        // lqy danh sach
        $dataRow = DB::table('types')-> select('*')->where('cate_id', $dataCate->id)->get()->toArray();
            if ($id!='') {
                 foreach ($dataRow as $item) {
                    if($item ->id == $id){
                          $dataRow = Types::find($id);
                           
                    }
                  
                }

             }
     
       // var_dump($dataRow);
       return response($dataRow,'201');
       // return $categoires;
    }


}
