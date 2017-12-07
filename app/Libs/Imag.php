<?php

namespace App\Libs;
use Image;
class Imag {

    public function url($puth,$directory=null,$name=null){
		if(!$puth==null){
			if($directory==null){
				$dir=public_path().'uploads';
			}
			else{
				$dir=public_path().$directory;
			}
			if($name==null){
				$filename=date('y_m_d_h_i_s').'.jpg';
			}
			$pic_small='s_'.$filename;
			$img=Image::make($puth);
			$img->save($dir.$filename);
			$img->resize(200,null,function($constraint){
				$constraint->aspectRatio();
			});
			$pic_small='s_'.$filename;
			$img->save($dir.$pic_small);
			return $filename;
		}else{
			return false;
		}
	}
    
}