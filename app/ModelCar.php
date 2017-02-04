<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
        protected $table = 'models';
       // Add Model
        public static function addModel($request){
        	$model               = new ModelCar();
        	$model->name         =$request->name;
        	$model->year_of_made =$request->date;
            $model->mark_id      =$request->mark;
        	$model->status       =$request->status;
        	$model->save();
        }
        // Update Model
          public static function editModel($request){
        	$model               =ModelCar::find($request->id);
        	$model->name         =$request->name;
        	$model->year_of_made =$request->date;
        	$model->status       =$request->status;
        	$model->save();
        }
 }
