<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $data = blog::where('user_id', $user_id)->orderBy('created_at','desc')->get();

        // Return the blogs to the view or perform any other desired actions.
        return view('blog.indexBlog', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->check()) {
            return view('blog.create');
        }
        else {
            return view('auth.login');
        } 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|max:1000',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        
        $request->image->move(public_path('images'), $newImageName);
        blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $newImageName,
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blogs')->with('message', 'Your post has been added successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
        {
            $blog = blog::findOrFail($id);
            return view('blog.show', compact('blog'));
        }
    

    public function getBlogsByUserId($user_id)
        {
            $user_id = Auth::id();
            $blogs = blog::where('user_id', $user_id)->get();

            // Return the blogs to the view or perform any other desired actions.
            return view('pages.blog', ['blogs' => $blogs]);
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = blog::where('id','=',$id)->first();
        return view('blog.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $title = $request->input('title');
        $content = $request->input('content');
    
        $blog = Blog::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Handle image upload if it exists in the request
            $image = $request->file('image');
            $newImageName = uniqid() . '-' . $request->title . '.' . $image->extension();
            $image->move(public_path('images'), $newImageName);
            $blog->image = $newImageName;
        }
    
        $blog->title = $title;
        $blog->content = $content;
        $blog->save();
    
        return redirect('blogs')->with('message', 'Post has been updated successfully');
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $blogPost = blog::find($id);

    if ($blogPost) {
        $blogPost->delete();
        // Optionally, you can add a success flash message or perform other actions.
    }

    // Redirect back to the blog listing page or any other appropriate page.
    return redirect('blogs')->with('message', 'Post has been deleted successfully');
    }
}
