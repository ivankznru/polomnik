<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Excursion;
use App\Models\ReviewexcurRating;
use Illuminate\Http\Request;

class ExcursionController extends Controller
{
    public function index(Request $request)
    {

          $discounts = Discount::get();

        $queryExcursion= Excursion::query();

        $excursions = $queryExcursion->get();

        return view('front.excursions.excursion',compact('excursions','discounts'));
    }

    public function single_book($id)
    {
        $avgStar = ReviewexcurRating::where('excursion_id', $id)->pluck('star_rating')->avg();
        $avgStar1 = round($avgStar);
        $reviewCount = ReviewexcurRating::where('excursion_id', $id)->pluck('excursion_id')->count();
        $single_excursion_data = Excursion::with('discounts', 'durations')->where('id', $id)->first();



        $c_daysOfWeekDisabled = array('0','1','2','3','4','5','6','7');
        foreach ($single_excursion_data->whatdays as $whatday) {
        if($whatday->whatday == 0){$c_daysOfWeekDisabled = array ('0');}
        else {  unset($c_daysOfWeekDisabled[$whatday->whatday]);
}
          $calinder_daysOfWeekHighlighted[] = $whatday->whatday;
        }
        $c_daysOfWeekDisabled = implode(',',$c_daysOfWeekDisabled);
       $c_daysOfWeekHighlighted  = implode(',', $calinder_daysOfWeekHighlighted);

        $c_startDate = date('d.m.Y', strtotime($single_excursion_data->startDateExcursion));
        $c_finishDate = date('d.m.Y', strtotime($single_excursion_data->finishDateExcursion));


        return view('front.excursions.excursion_detail', compact('single_excursion_data','avgStar','avgStar1','reviewCount','c_daysOfWeekHighlighted','c_daysOfWeekDisabled','c_finishDate','c_startDate'));
    }

    public function reviewexcurstore(Request $request){
        $review = new ReviewexcurRating();
        $review->excursion_id = $request->excursion_id;
        $review->name    = $request->name;
        $review->email   = $request->email;
        $review->phone   = $request->phone;
        $review->comments= $request->comment;
        $review->star_rating = $request->rating;
        $review->save();
        return redirect()->back()->with('flash_msg_success','Ваш отзыв был опубликован,');
    }
}
