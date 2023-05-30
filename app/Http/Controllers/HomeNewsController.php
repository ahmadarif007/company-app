<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeNews;

class HomeNewsController extends Controller {

    public function addHomeNewsInfo() {
        return view('admin.homeNews.addHomeNewsContent');
    }

    public function saveHomeNewsInfo(Request $request) {

        $newsImage = $request->file('newsImage');
        $name = $newsImage->getClientOriginalName();
        $uploadPath = 'public/admin/Newsimage/';
        $newsImage->move($uploadPath, $name);
        $newsImageUrl = $uploadPath . $name;

        $homeNews = new HomeNews();
        $homeNews->newsImage = $newsImageUrl;
        $homeNews->title = $request->title;
        $homeNews->titleDescription = $request->titleDescription;
        $homeNews->publicationStatus = $request->publicationStatus;
        $homeNews->save();

        return redirect()->back()->with('message', 'Save Home News Info Successfully');
    }

    public function manageHomeNewsInfo() {
        $homeNewsInfos = HomeNews::paginate(3);
        return view('admin.homeNews.manageHomeNewsContent', ['homeNewsInfos' => $homeNewsInfos]);
    }

    public function editHomeNewsInfo($id) {
        $homeNewsInfoById = HomeNews::where('id', $id)->first();
        return view('admin.homeNews.editHomeNewsContent', ['homeNewsInfoById' => $homeNewsInfoById]);
    }

    public function updateHomeNewsInfo(Request $request) {

        $newsImageUrl = $this->exitStatusHomeNewsImage($request);

        $updateHomeNews = HomeNews::find($request->homeNewsId);
        $updateHomeNews->newsImage = $newsImageUrl;
        $updateHomeNews->title = $request->title;
        $updateHomeNews->titleDescription = $request->titleDescription;
        $updateHomeNews->publicationStatus = $request->publicationStatus;
        $updateHomeNews->save();

        return redirect('/manage/homeNewsInfo')->with('message', 'Update Home News Info Successfully');
    }

    private function exitStatusHomeNewsImage($request) {
        $recHomeNewsId = HomeNews::where('id', $request->homeNewsId)->first();

        $newsImage = $request->file('newsImage');
        if ($newsImage) {
            //unlink($recHomeSliderId->bgImage);
            $name = $newsImage->getClientOriginalName();
            $uploadPath = 'public/admin/Newsimage/';
            $newsImage->move($uploadPath, $name);
            $newsImageUrl = $uploadPath . $name;
        } else {
            $newsImageUrl = $recHomeNewsId->newsImage;
        }
        return $newsImageUrl;
    }
    
    public function deleteHomeNewsInfo($id){
        $newsInfoById = HomeNews::where('id',$id)->first();
        $newsInfoById->delete();
        
        return redirect('/manage/homeNewsInfo')->with('message', 'Delete Home News Info Successfully');
    }

}
