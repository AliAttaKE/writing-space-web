<?php

namespace App\Http\Controllers\Backend\CmsWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsWebsite;
use App\Models\Subject;
use App\Models\Paper_Format;
use App\Models\Term_of_paper;
use App\Models\WordCount;
use App\Models\Pricing;
use App\Models\Addons;

use App\Models\Paper;

class CmsWebsiteController extends Controller
{


    public function index()
    {
      
        $cmsPages = CmsWebsite::all();

        
        return view('cms_pages.index', compact('cmsPages'));
        
       
    }

    public function create()
    {
        return view('cms_pages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:cms_websites,slug',
            'heading_one' => 'nullable|string|max:255',
            'content_one' => 'nullable|string',
            'heading_two' => 'nullable|string|max:255',
            'content_two' => 'nullable|string',
            'heading_three' => 'nullable|string|max:255',
            'content_three' => 'nullable|string',
            'heading_four' => 'nullable|string|max:255',
            'content_four' => 'nullable|string',
            'status' => 'required|boolean',
        ]);
    
        CmsWebsite::create($validatedData);
    
        return redirect()->route('admin.cms_pages.index')->with('success', 'Page created successfully.');
    }
    
    public function edit(CmsWebsite $cmsPage)
    {
        return view('cms_pages.edit', compact('cmsPage'));
    }

    public function show($slug)
    {
        // Find the CmsWebsite page by slug
        $cmsPage = CmsWebsite::where('slug', $slug)->firstOrFail();

        $papers = Paper::latest()->get();
        $pricing = Pricing::orderBy('id', 'desc')->get();
        $Addons = Addons::orderBy('id', 'desc')->first();
    
        // Pass the page to the view
        return view('cms_pages.show', compact('cmsPage','papers','pricing','Addons'));
    }
    
    
    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:cms_websites,slug,' . $id,
            'heading_one' => 'nullable|string|max:255',
            'content_one' => 'nullable|string',
            'heading_two' => 'nullable|string|max:255',
            'content_two' => 'nullable|string',
            'heading_three' => 'nullable|string|max:255',
            'content_three' => 'nullable|string',
            'heading_four' => 'nullable|string|max:255',
            'content_four' => 'nullable|string',
            'status' => 'required|boolean',
        ]);
    
        $cmsWebsite = CmsWebsite::findOrFail($id);
        $cmsWebsite->update($validated);
    
        return redirect()->route('admin.cms_pages.index')->with('success', 'CMS Page updated successfully!');
    }
    
    

    public function destroy(CmsWebsite $cmsPage)
    {
        $cmsPage->delete();
        return redirect()->route('admin.cms_pages.index')->with('success', 'Page deleted successfully!');
    }
}
