<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('AdminPanel.blog');
    }

    public function addBlogs(Request $request){
		try {
			$data['blogTitle'] = $request->post('blogTitle');
			$data['blogSlug'] = $request->post('blogSlug');
			$data['blogDescription'] = $request->post('blogDescription');
			$data['blogCategory_id'] = $request->post('blogCategory_id');
			$data['blogTags'] = $request->post('blogTags');
			$data['blogKeywords'] = $request->post('blogKeywords');
			$data['blogMetaTitle'] = $request->post('blogMetaTitle');
			$data['blogMetaDescription'] = $request->post('blogMetaDescription');
			$data['blogMetaKeywords'] = $request->post('blogMetaKeywords');
			$data['blogStatus'] = $request->post('blogStatus');

			if ($request->hasFile('blogFeaturedImg')) {
				$image = $request->file('blogFeaturedImg');
				$imageName = "images/blog_images/" . time() . '.' . $image->getClientOriginalExtension();

				$image->move(public_path('images/blog_images/'), $imageName);

				$data['blogFeaturedImg'] = $imageName;
			}
	
			DB::beginTransaction();
			$blogId = DB::table('blog')->insertGetId($data);
			DB::commit();
	
			return redirect()->route('admin.blog')->with('status', 'Blog Added Successfully');
		} catch (\Exception $e) {
			DB::rollback();
			\Log::error('Blog Insertion Error: ' . $e->getMessage());
			return response()->json(['status' => 500, 'message' => 'Blog Adding Unsuccessful!!!', 'error' => $e->getMessage()]);
		}
	}
	
}
