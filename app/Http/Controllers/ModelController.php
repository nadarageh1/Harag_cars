<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModelRequest;
use App\ModelCar;
use App\Mark;

class ModelController extends Controller
{
        /**
     * Show All Admin In this Page 
     *
     */
     public function showModels()
    {
         $models =ModelCar::all();
         return view('admins.models.show-models')->with('models',$models); 

    }
     /**
     * Show All Admin In this Page 
     *
     */
     public function addModel()
     {
        $marks =Mark::all(); 
       return view('admins.models.add-model')->with('marks',$marks);
     }
    /**
     * Post Add MOdel 
     *
     */
     public function postAddModel(ModelRequest $request)
    {
      ModelCar::addModel($request);
      return redirect('Admins/AllModels');
    }

      /**
     * Show this model
     *
     */
     public function showModel($id)
    {
         $model =ModelCar::find($id); 
         $marks =Mark::all(); 
         return view('admins.models.show-model')->with('model',$model)->
         with('marks',$marks);   
    }
    
     /**
     * Edit This model 
     *
     */
     public function editModel($id)
    {
         $model =ModelCar::find($id); 
         $marks =Mark::all();  
         return view('admins.models.edit-model')->
         with('model',$model)->with('marks',$marks);
    }

    /**
     * Edit Model 
     *
     */

     public function postEditModel(ModelRequest $request,$id)
    {
        ModelCar::editModel($request);
        return redirect('Admins/AllModels');
    }

      /**
     * Delete This Model 
     *
     */
     public function deleteModel($id)
    {
        $model =ModelCar::find($id);
        $model->delete();
        return redirect('Admins/AllModels');
    }
}
