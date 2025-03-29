<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\blog;
use App\Models\Category;
use App\Models\seo;
use App\Models\media;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;



class BlogController extends Controller
{


    
     public function index()
    {          
        $blogs= blog::latest()->paginate(5);
        $categories = Category::get();
        return view('backend.admin.blogs.index',compact('blogs','categories'));    
    }

public function createBlog(Request $request)
{
    // dd($request->all());
    // $request->validate([
    //     'title' => 'required',
    //     'short_description' => 'required',
    //     'description' => 'required',
    //     'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     'category_id' => 'required',
    //     'meta_title' => 'required',
    //     'meta_description' => 'required',
    //     'meta_keyword' => 'required',
    //     'status' => 'required',
    // ]);

    $input = $request->all();

    if ($image = $request->file('featured_image')) {
        $destinationPath = 'images/blogs/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['featured_image'] = $profileImage;
    }
    blog::create($input);

    return response()->json(['status' => true, 'message' => 'Blog created Successfully'],200);
}

public function updateBlog(Request $request, $id)
{
    // dd($request->all());
    $blog = Blog::findOrFail($id);
    if (!$blog) {
        return back()->with('error', 'Something went wrong..');
    }

    $input = $request->all();

    if ($image = $request->file('featured_image')) {
        $destinationPath = 'images/blogs/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['featured_image'] = $profileImage;
    }

    $blog->update($input);

    return back()->with('success', 'Blog updated successfully');
}


public function deleteBlog($id){
        // dd($id);
    $blog=blog::find($id);
    if ($blog) {
        $blog->delete();
        return response()->json(['success' => true, 'message' => 'Delete Successfully']);
    } else {
        return response()->json(['success' => false, 'message' => 'Order not found'], 404);
    }
}





}