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
        return  $path . '/' . $imgName;
    }


}
