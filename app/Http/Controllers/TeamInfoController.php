<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamInfo;

class TeamInfoController extends Controller {

    public function addTeamInfo() {
        return view('admin.about.team.addTeamInfoContent');
    }

    public function saveTeamInfo(Request $request) {

        $teamMemberImage = $request->file('teamMemberImage');
        $name = $teamMemberImage->getClientOriginalName();
        $uploadPath = 'public/admin/TeamMemberImage/';
        $teamMemberImage->move($uploadPath, $name);
        $teamMemberImageUrl = $uploadPath . $name;

        $teamInfo = new TeamInfo();
        $teamInfo->teamMemberImage = $teamMemberImageUrl;
        $teamInfo->teamMemberName = $request->teamMemberName;
        $teamInfo->teamMemberDescription = $request->teamMemberDescription;
        $teamInfo->publicationStatus = $request->publicationStatus;
        $teamInfo->save();

        return redirect()->back()->with('message', 'Team Info Save Succesfully');
    }

    public function manageTeamInfo() {
        $allTeamInfo = TeamInfo::paginate(5);
        return view('admin.about.team.manageTeamInfoContent', ['allTeamInfo' => $allTeamInfo]);
    }

    public function editTeamInfo($id) {
        $teamInfoById = TeamInfo::where('id', $id)->first();
        return view('admin.about.team.editTeamInfoContent', ['teamInfoById' => $teamInfoById]);
    }

    public function updateTeamInfo(Request $request) {
        /*
          $recieveTeamInfo = TeamInfo::where('id', $request->teamInfoId)->first();
          $oldTeamMemberImage = $request->file('teamMemberImage');
          if ($oldTeamMemberImage) {
          unlink($recieveTeamInfo->teamMemberImage);
          // $newTeamMemberImage = $request->file('teamMemberImage');
          $name = $newTeamMemberImage->getClientOriginalName();
          $uploadPath = 'public/admin/TeamMemberImage/';
          $newTeamMemberImage->move($uploadPath, $name);
          $newTeamMemberImageUrl = $uploadPath . $name;
          } else {
          $newTeamMemberImageUrl = $recieveTeamInfo->teamMemberImage;
          }
          //return $newTeamMemberImageUrl;
         */
        $imageUrl = $this->imageExistStatus($request);
        $updateTeamInfo = TeamInfo::find($request->teamInfoId);
        $updateTeamInfo->teamMemberImage = $imageUrl;
        $updateTeamInfo->teamMemberName = $request->teamMemberName;
        $updateTeamInfo->teamMemberDescription = $request->teamMemberDescription;
        $updateTeamInfo->publicationStatus = $request->publicationStatus;
        $updateTeamInfo->save();

        return redirect('/manage/teamInfo')->with('message','Team info update successfully');
    }

    private function imageExistStatus($request) {
        $teamInfoById = TeamInfo::where('id', $request->teamInfoId)->first();
        $teamMemberImage = $request->file('teamMemberImage');
        if ($teamMemberImage) {
            unlink($teamInfoById->teamMemberImage);
            $name = $teamMemberImage->getClientOriginalName();
            $uploadPath = 'public/admin/TeamMemberImage/';
            $teamMemberImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $teamInfoById->teamMemberImage;
        }
        return $imageUrl;
    }
    
    public function deleteTeamInfo($id){
        $deleteTeamInfoByID = TeamInfo::where('id',$id)->first();
        $deleteTeamInfoByID->delete();
        return redirect()->back()->with('message','Delete Team Info Successfully');
    } 

}
