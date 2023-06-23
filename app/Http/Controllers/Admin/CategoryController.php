<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::latest('id')->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' =>'required',
          'image' =>'required|file'
       ]);

        $img_name = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        $category = Category::create([
            'title' => trim($request->title),
            'image' => $img_name
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success','Category added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
      //  return view('admin.categories.show',compact('$category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrfail($id);
        return view('admin.categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);

        $category = Category::find($id);

        $img_name = $category->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$category->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
        }


        $category->update([
            'title' => $request->title,
            'image' => $img_name
        ]);

        return redirect()
            ->route('categories.index')
            ->with('msg', 'Category updated successfully')
            ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        // Category::destroy($id);

        $category = Category::findOrfail($id);
        File::delete(public_path('uploads/'.$category->image));
        $category->delete();


        return redirect()
            ->route('categories.index')
            ->with('msg', 'Category deleted successfully')
            ->with('type', 'danger');
    }
    }

