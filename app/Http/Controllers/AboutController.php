<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller {

    public function addAboutInfo() {
        return view('admin.about.add.addAboutInfoContent');
    }

    public function saveAboutInfo(Request $request) {

        $titleImage = $request->file('titleImage');
        $name = $titleImage->getClientOriginalName();
        $uploadPath = 'public/admin/TitleImage/';
        $titleImage->move($uploadPath, $name);
        $titleImageUrl = $uploadPath . $name;

        $teamMemberImage = $request->file('teamMemberImage');
        $name1 = $teamMemberImage->getClientOriginalName();
        $uploadPath = 'public/admin/TemMemberImage/';
        $teamMemberImage->move($uploadPath, $name1);
        $teamMemberImageUrl = $uploadPath . $name1;

        $about = new About();
        $about->heading = $request->heading;
        $about->titleImage = $titleImageUrl;
        $about->title = $request->title;
        $about->titleDescription = $request->titleDescription;
        $about->teamMemberImage = $teamMemberImageUrl;
        $about->teamMemberName = $request->teamMemberName;
        $about->teamMemberDescription = $request->teamMemberDescription;
        $about->publicationStatus = $request->publicationStatus;
        $about->save();

        return redirect()->back()->with('message', 'Company Information Save Successfully');
    }

    public function manageAboutInfo() {
        $abouts = About::paginate(5);
        return view('admin.about.manage.aboutManageContent', ['abouts' => $abouts]);
    }

    public function editAboutInfo($id) {
        $aboutById = About::where('id', $id)->first();
        return view('admin.about.edit.editAboutContent', ['aboutById' => $aboutById]);
    }

    public function updateAboutInfo(Request $request) {

        $titleImageUrl = $this->titleImageExistStatus($request);
        $teamMemberImageUrl = $this->teamMemberImageExistStatus($request);

        $about = About::find($request->aboutId);
        $about->heading = $request->heading;
        $about->titleImage = $titleImageUrl;
        $about->title = $request->title;
        $about->titleDescription = $request->titleDescription;
        $about->teamMemberImage = $teamMemberImageUrl;
        $about->teamMemberName = $request->teamMemberName;
        $about->teamMemberDescription = $request->teamMemberDescription;
        $about->publicationStatus = $request->publicationStatus;
        $about->save();
        
        return redirect('/manage/aboutInfo')->with('message','About Info Update Successfully');                 
    }
    
    private function titleImageExistStatus($request){
        
        $aboutById = About::where('id',$request->aboutId)->first();

        $titleImage = $request->file('titleImage');
        if ($titleImage) {
            unlink($aboutById->titleImage);
            $name = $titleImage->getClientOriginalName();
            $uploadPath = 'public/admin/TitleImage/';
            $titleImage->move($uploadPath, $name);
            $titleImageUrl = $uploadPath . $name;
        } else {
            $titleImageUrl = $aboutById->titleImage;
        }
        return $titleImageUrl;
    }
    
    private function teamMemberImageExistStatus($request){
        
        $aboutById = About::where('id',$request->aboutId)->first();
        
        $teamMemberImage = $request->file('teamMemberImage');
        if ($teamMemberImage) {
            unlink($aboutById->teamMemberImage);
            $name1 = $teamMemberImage->getClientOriginalName();
            $uploadPath = 'public/admin/TemMemberImage/';
            $teamMemberImage->move($uploadPath, $name1);
            $teamMemberImageUrl = $uploadPath . $name1;
        } else {
            $teamMemberImageUrl = $aboutById->teamMemberImage;
        }
        return $teamMemberImageUrl;
    }
        
    public function deleteAboutInfo($id){
        $aboutById = About::where('id',$id)->first();
        $aboutById->delete();
        return redirect()
                ->back()
                ->with('message','About Info Delete Successfully');
    }

}
