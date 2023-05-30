<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class CompanyInfoController extends Controller {

    public function addCompany() {
        return view('admin.about.company.addCompanyInfoContent');
    }

    public function saveCompany(Request $request) {
        $titleImage = $request->file('titleImage');
        $name = $titleImage->getClientOriginalName();
        $uploadPath = 'public/admin/CompanyImage/';
        $titleImage->move($uploadPath, $name);
        $titleImageUrl = $uploadPath . $name;

        $companyInfo = new CompanyInfo();
        $companyInfo->heading = $request->heading;
        $companyInfo->titleImage = $titleImageUrl;
        $companyInfo->title = $request->title;
        $companyInfo->titleDescription = $request->titleDescription;
        $companyInfo->publicationStatus = $request->publicationStatus;
        $companyInfo->save();

        return redirect()->back()->with('message', 'Company Information Save Successfully');
    }

    public function manageCompany() {
        $companyInfos = CompanyInfo::all();
        return view('admin.about.company.manageCompanyContent', ['companyInfos' => $companyInfos]);
    }

    public function editCompanyInfo($id) {
        $companyInfoById = CompanyInfo::where('id', $id)->first();
        return view('admin.about.company.editCompanyContent', ['companyInfoById' => $companyInfoById]);
    }

    public function updateCompanyInfo(Request $request) {
        $companyEditInfo = CompanyInfo::where('id', $request->companyInfoId)->first();
        
        $titleImage = $request->file('titleImage');
        if ($titleImage) {
            unlink($companyEditInfo->titleImage);
            $name = $titleImage->getClientOriginalName();
            $uploadPath = 'public/admin/CompanyImage/';
            $titleImage->move($uploadPath, $name);
            $titleImageUrl = $uploadPath . $name; 
            //return $titleImageUrl;
        }  else {
            $titleImageUrl = $companyEditInfo->titleImage;
        }

        $companyInfo = CompanyInfo::find($request->companyInfoId);
        $companyInfo->heading = $request->heading;
        $companyInfo->titleImage = $titleImageUrl;
        $companyInfo->title = $request->title;
        $companyInfo->titleDescription = $request->titleDescription;
        $companyInfo->publicationStatus = $request->publicationStatus;
        $companyInfo->save();
        
        return redirect('/manage/company')->with('message','Company Info Updated Successfully');
    }
    
    public function deleteCompanyInfo($id){
        $deleteCompanyInfoByID = CompanyInfo::where('id',$id)->first();
        $deleteCompanyInfoByID->delete();
        return redirect()
                ->back()
                ->with('message','Delete Company Info Successfully');
    }

} 
