<?php
namespace App\Traits\uploadable;
use Illuminate\Support\Facades\Storage;

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
       /*  $path = $file->storeAs('public/avatars',$imgName); */
        $file->move($public_path, $imgName);
        return $path . '/' . $imgName;
    }

    /**
     *
     *
     */
    public function getImgAttribute($value){
        return $value ? $value:'/admin/dist/img/default-150x150.png';
    }

    /**
     *
     */
    public function setImgAttribute($value)
    {
        // dd(get_class($this) );
        if(request()->hasFile('img')){
            $this->attributes['img']= $this->uploade(request()->file('img'));
        }else{
            if(!empty($this->img)){
                $this->attributes['img'] =$this->img;
            }else{
                $this->attributes['img'] ='/admin/dist/img/default-150x150.png';
            }
          }
    }


    public function getFileExtAttribute(){
        $ext=explode('.',$this->img);
          return end($ext);
    }

}
