<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarkRequest;
use App\Mark;
use File;

class MarkController extends Controller
{
    /**
     * Show All Marks In this Page 
     *
     */
     public function showMarks()
    {
        $marks =Mark::all();
         return view('admins.marks.show-marks')->with('marks',$marks); 

    }
     /**
     * Add New Mark
     *
     */
     public function addMark()
    {
       return view('admins.marks.add-mark'); 
    }
    /**
     * Post Add Mark 
     *
     */
     public function postAddMark(MarkRequest $request)
    {
      Mark::addMark($request);
       return redirect('Admins/AllMarks');

    }

      /**
     * Show information of this  Mark In this Page 
     *
     */
     public function showMark($id)
    {
        $mark =Mark::find($id); 
         return view('admins.marks.show-mark')->with('mark',$mark);   
    }
    
     /**
     * Edite Mark
     *
     */
     public function editMark($id)
    {
         $mark =Mark::find($id); 
         return view('admins.marks.edit-mark')->with('mark',$mark);
    }

    /**
     * Post Edit This Mark
     *
     */

     public function postEditMark(MarkRequest $request,$id)
    {
        Mark::editMark($request);
        return redirect('Admins/AllMarks');
    }

      /**
     * Delete This Mark From Site 
     *
     */
     public function deleteMark($id)
    {
        $mark =Mark::find($id);
        $mark->delete();
        File::delete($mark->mark_pic);
        return redirect('Admins/AllMarks');
    }
}
