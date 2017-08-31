<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories ;//khai bao de su dung model  categories

class ControllerCategories extends Controller
{
   
    public function index()
    {
        //
        $categories = Categories::all();
        return $categories;
    }

   
    public function show($id)
    {
        //
        // echo "lay thong tin dua theo id";
        $categories = Categories::find($id);
        return $categories;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      //  echo "update".$id;
        // truoc khi update can phai tim sau do them ghi overwire
        $categories = Categories::find($id);
        $categories->name = $request->input('name');
        $categories->keywords = $request->input('keywords');
        $categories->save();

        return response($categories,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // echo "destroy".$id;
        //xoa thi thuc hien tim va xoa no di dua vao id
        $categories = Categories::find($id);
        $categories->delete();
    }
}
