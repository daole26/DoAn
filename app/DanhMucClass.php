<?php 
namespace App;
class DanhMucClass{
	public static function getDanhMuc()
	{
		$danhmuc = danh_muc::where('parent_id',null)->get();
        for($i=0;$i<count($danhmuc);$i++){
            $danhmuc[$i]['child'] = danh_muc::where('parent_id',$danhmuc[$i]->id)->get();
        }
        return $danhmuc;
	}
}
?>