<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class HomeSliderController extends Controller {

    public function addHomeSliderInfo() {
        return view('admin.homeSlider.addHomeSliderContent');
    }

    public function saveHomeSliderInfo(Request $request) {

        $bgImage = $request->file('bgImage');
        $name = $bgImage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/HomeSliderImage/';
        $bgImage->move($uploadPath, $name);
        $bgImageUrl = $uploadPath . $name;

        $sliderImage = $request->file('sliderImage');
        $name = $sliderImage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/Sliderimage/';
        $sliderImage->move($uploadPath, $name);
        $sliderImageUrl = $uploadPath . $name;

        $homeSlider = new HomeSlider();
        $homeSlider->bgImage = $bgImageUrl;
        $homeSlider->title = $request->title;
        $homeSlider->titleDescription = $request->titleDescription;
        $homeSlider->sliderImage = $sliderImageUrl;
        $homeSlider->publicationStatus = $request->publicationStatus;
        $homeSlider->save();

        return redirect()->back()->with('message', 'Save Home Slider Info Successfully');
    }

    public function manageHomeSliderInfo() {
        $homeSliderInfos = HomeSlider::paginate(3);
        return view('admin.homeSlider.manageHomeSliderContent', ['homeSliderInfos' => $homeSliderInfos]);
    }

    public function editHomeSliderInfo($id) {
        $homeSliderInfoById = HomeSlider::where('id', $id)->first();
        return view('admin.homeSlider.editHomeSliderContent', ['homeSliderInfoById' => $homeSliderInfoById]);
    }

    public function updateHomeSliderInfo(Request $request) {
        
        $bgImageUrl = $this->exitStatusHomeSliderBgImage($request);
        $sliderImageUrl = $this->exitStatusHomeSliderImage($request);
        
        $updateHomeSlider = HomeSlider::find($request->homeSliderId);
        $updateHomeSlider->bgImage = $bgImageUrl;
        $updateHomeSlider->title = $request->title;
        $updateHomeSlider->titleDescription = $request->titleDescription;
        $updateHomeSlider->sliderImage = $sliderImageUrl;
        $updateHomeSlider->publicationStatus = $request->publicationStatus;
        $updateHomeSlider->save();

        return redirect('/manage/homeSliderInfo')->with('message', 'Update Home Slider Info Successfully');
    }

    private function exitStatusHomeSliderBgImage($request) {
         $recHomeSliderId = HomeSlider::where('id', $request->homeSliderId)->first(); 

        $bgImage = $request->file('bgImage');
        if ($bgImage) {
            //unlink($recHomeSliderId->bgImage);
            $name = $bgImage->getClientOriginalName();
            $uploadPath = 'public/frontEnd/HomeSliderImage/';
            $bgImage->move($uploadPath, $name);
            $bgImageUrl = $uploadPath . $name;
        } else {
            $bgImageUrl = $recHomeSliderId->bgImage;
        }
        return $bgImageUrl;
    }
    
    private function exitStatusHomeSliderImage($request) {
        $recHomeSliderId = HomeSlider::where('id', $request->homeSliderId)->first();

        $sliderImage = $request->file('sliderImage');
        if ($sliderImage) {
            //unlink($recHomeSliderId->sliderImage);
            $name = $sliderImage->getClientOriginalName();
            $uploadPath = 'public/frontEnd/Sliderimage/';
            $sliderImage->move($uploadPath, $name);
            $sliderImageUrl = $uploadPath . $name;
        } else {
            $sliderImageUrl = $recHomeSliderId->sliderImage;
        }
        return $sliderImageUrl;
    }
    
    public function deleteHomeSliderInfo($id){
        $sliderInfoById = HomeSlider::where('id',$id)->first();
        $sliderInfoById->delete();
        
        return redirect('/manage/homeSliderInfo')->with('message', 'Delete Home Slider Info Successfully');
    }

}
