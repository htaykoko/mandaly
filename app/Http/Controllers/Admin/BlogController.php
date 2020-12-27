<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy("id", "desc")->paginate(20);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialists = Specialist::all();

        return view('admin.blogs.create', compact('specialists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->validated();

        $data['created_by'] = auth()->user()->id;

        $data['updated_by'] = auth()->user()->id;

        unset($data['date']); //delete licence_expired_date array value

        $data['date'] = date("Y-m-d", strtotime($request->date)); //set value again

        $blog = Blog::create($data);

        if (!empty($data['title_image'])) {
            $file = $data['title_image'];

            $file_name = time() . '.' . $file->getClientOriginalExtension();

            $data['title_image'] = $file_name;

            $data['path'] = $file->storeAs('public/blogs/' . $blog->id, $file_name);

            $blog->update($data);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Ok, Successfully inserted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $specialists = Specialist::all();

        return view('admin.blogs.edit', compact('blog', 'specialists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->validated();

        $data['updated_by'] = auth()->user()->id;

        unset($data['date']); //delete licence_expired_date array value

        $data['date'] = date("Y-m-d", strtotime($request->date)); //set value again

        $blog->update($data); //update the record

        if (!empty($data['title_image'])) {
            $file = "public/blogs/" . $blog->id . "/" . $blog->title_image; //get existing file path

            Storage::delete($file); //delete existing file

            $file = $data['title_image'];

            $file_name = time() . '.' . $file->getClientOriginalExtension(); //change file name

            $data['title_image'] = $file_name;

            $data['path'] = $file->storeAs('public/blogs/' . $blog->id, $file_name); //upload file to the server

            $blog->update($data);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Ok, Successfully inserted.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $folder = 'public/blogs/' . $blog->id;

        Storage::deleteDirectory($folder);; //delete existing file

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Ok, Successfully Deleted.');
    }
}
