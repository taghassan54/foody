<?php
namespace App\Traits\uploadable;

trait uploadable {
       /**
     * uploadImg Function
     *
     * @param [type] $file
     * @param [type] $path
     * @param [type] $prefix
     * @return void
     */
    public function uploade($file, $path='/uploade', $prefix = "prefix"){
        $public_path = public_path() . $path;
        $imgName = $prefix . '_' . time() . "." . $file->getClientOriginalExtension();
        $file->move($public_path, $imgName);
        return $path . '/' . $imgName;
    }

    public function getImgAttribute($value){
        return $value?$value:'/admin/dist/img/default-150x150.png';
    }

    public function setImgAttribute($value)
    {

        if(request()->hasFile('img')){
            $this->attributes['img']= $this->uploade(request()->file('img'));
        }else{
            $this->attributes['img'] ='/admin/dist/img/default-150x150.png';
          }
    }

}
