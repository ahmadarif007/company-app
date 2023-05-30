<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller {

    public function addBlogInfo() {
        return view('admin.blog.addBlogInfo');
    }

    public function saveBlogInfo(Request $request) {

        $blogImage = $request->file('blogImage');
        $name = $blogImage->getClientOriginalName();
        $uploadPath = 'public/frontEnd/Blogimage/';
        $blogImage->move($uploadPath, $name);
        $blogImageUrl = $uploadPath . $name;

        $blog = new Blog();
        $blog->blogImage = $blogImageUrl;
        $blog->blogTitle = $request->blogTitle;
        $blog->blogDescription = $request->blogDescription;
        $blog->publicationStatus = $request->publicationStatus;
        $blog->save();

        return redirect()->back()->with('message', 'Blog info save successfully');
    }

    public function manageBlogInfo() {
        $allBlogInfo = Blog::paginate(3);
        return view('admin.blog.maanageBlogInfo', ['allBlogInfo' => $allBlogInfo]);
    }

    public function editBlogInfo($id) {
        $blogInfoById = Blog::where('id', $id)->first();
        return view('admin.blog.editBlogInfo', ['blogInfoById' => $blogInfoById]);
    }

    public function updateBlogInfo(Request $request) {

        $recBlogInfo = Blog::where('id', $request->blogId)->first();
        $blogImage = $request->file('blogImage');
        if ($blogImage) {
            $name = $blogImage->getClientOriginalName();
            $uploadPath = 'public/frontEnd/Blogimage/';
            $blogImage->move($uploadPath, $name);
            $blogImageUrl = $uploadPath . $name;
        } else {
            $blogImageUrl = $recBlogInfo->blogImage;
        }
        //$blogImageUrl = $this->imgExitStatus($request);

        $updateBlogInfo = Blog::find($request->blogId);
        $updateBlogInfo->blogImage = $blogImageUrl;
        $updateBlogInfo->blogTitle = $request->blogTitle;
        $updateBlogInfo->blogDescription = $request->blogDescription;
        $updateBlogInfo->publicationStatus = $request->publicationStatus;
        $updateBlogInfo->save();

        return redirect('/manage/blogInfo')->with('message', 'Bolg Info Update Successfully');
    }

    private function imgExitStatus($request) {
        $recBlogInfo = Blog::where('id', $request->blogId)->first();

        $blogImage = $request->file('blogImage');
        if ($blogImage) {
            //unlink($recBlogInfo->blogImage);
            $name = $blogImage->getClientOriginalName();
            $uploadPath = 'public/frontEnd/Blogimage/';
            $blogImage->move($uploadPath, $name);
            $blogImageUrl = $uploadPath . $name;
        } else {
            $blogImageUrl = $recBlogInfo->blogImage;
        }
        return $blogImageUrl;
    }
    
    public function deleteBlogInfo($id){
        $blogInfoById = Blog::where('id',$id)->first();
        $blogInfoById->delete(); 
        return redirect('/manage/blogInfo')->with('message', 'Bolg Info Delete Successfully');
    }

}
