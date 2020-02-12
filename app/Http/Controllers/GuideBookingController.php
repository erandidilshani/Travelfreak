<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\GuideBooking;
use App\Guides;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\GuideBookingRequest;

class GuideBookingController extends Controller
{

    public function index2($id){
        $guide = Guides::find($id);
        return view('tourist.booking_form.guide_booking',compact('guide'));
    }
    

    
    /**
     * 
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function create(GuideBookingRequest $request)
    {

      /*  $this -> validate($request,[
            'start_date' =>'required|date|afer:tomorrow',
            'end_date' =>'required|date|after:start_date',
            'district' =>'required',
            'nop' =>'min:1|max:20|numeric',
            'note' =>'max:255',
        ]);  */

        $booking =new GuideBooking;
        $booking->tourist_id = Auth::user()->id;
        $booking->guide_id = $request->guide_id;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->district = $request->district;
        $booking->nop = $request->nop;
        $booking->note =$request->note;
        $booking->book_flag =0;
        $booking->finiesd_flag =0;

        $booking->save();

        $num = $request->guide_id;
        
        return redirect()->route('status_guide', [$num]);
       
        
    }

}
