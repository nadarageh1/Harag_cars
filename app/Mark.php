<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;

class Mark extends Model
{
     protected $table = 'marks';
      // Add Mark
        public static function addMark($request){
        $image = date('Y-m-d-H:i:s') . "-" . $request->image->getClientOriginalName();
        $path = 'mark_image/' . $image;
        Image::make($request->image->getRealPath())->save($path);
        	$mark               = new Mark();
        	$mark->name         =$request->name;
            $mark->mark_pic     =$path;
        	$mark->status       =$request->status;
        	$mark->save();
        }
        // Update Mark
          public static function editMark($request){
        	$mark               =Mark::find($request->id);
        	$mark->name         =$request->name;
            if($request->image==""){
                 $mark->mark_pic     =$mark->mark_pic ;
             }
             else{
            $image = date('Y-m-d-H:i:s') . "-" . $request->image->getClientOriginalName();
            $path = 'mark_image/' . $image;
            Image::make($request->image->getRealPath())->save($path);
             $mark->mark_pic =   $path;
             }
        	$mark->status       =$request->status;
        	$mark->save();
        }
}
