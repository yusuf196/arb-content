<?php

namespace App\Http\Controllers;
use App\Catagory;
use App\Post;
use App\PostComment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=DB::table('posts')
         ->join('users','posts.user_id','users.id')
         ->join('catagorys','posts.catagoty_id','catagorys.id')
         ->join('postComments','posts.id','postComments.post_id')
         ->select('posts.*', 'users.name as userName','catagorys.cat_name',DB::raw("count(postComments.post_id) as count"))
         ->groupBy('posts.id')
         ->get();

        
        
        return view ('front.blog_2',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $qustions=Catagory::all();
        $arr=Array('qustions'=>$qustions);
    return view('front.addBlog',$arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'title'=>'required|max:500',
                'body'=>'required',
                'catname'=>'required',
                 'select_file'=>'required'

            ]);
            $post=new Post();
            $image = $request->file('select_file');
           
            // Make a image name based on user name and current timestamp
            $name = str_slug(Auth::user()->name.'_'.time().'.'.$image->getClientOriginalExtension());
            // Define folder path
            $folder = 'images/Posts';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder .'/'. $name;
            // Upload image
            $image->move(public_path('images/Posts'), $name);
            // Set user profile image path in database to filePath
            $post->image=$filePath;
          
            $post->title=$request->input('title');
            $post->desc_post=$request->input('body');
            $post->catagoty_id=$request->input('catname');
            
            $post->user_id = Auth::user()->id;
            $post->save();

            return redirect('/blog');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Post::find($id)){
        $post=Post::where('posts.id','=',$id)
        ->join('users','posts.user_id','users.id')
        ->join('catagorys','posts.catagoty_id','catagorys.id')
        ->select('posts.*', 'users.name as userName','users.disc as userDesc','users.image_user','catagorys.cat_name')
        ->get();
        $comments=PostComment::where('postComments.post_id','=',$id)
        ->join('users','postComments.user_id','users.id')
        ->select('postComments.*', 'users.name','users.image_user')
        ->get();

       return view('front.singl_post',['post'=>$post[0],'comments'=>$comments]);}
       else{return redirect('blog');}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post=Post::find($id);
       $qustions=Catagory::all();
       $arr=Array('qustions'=>$qustions);
       return view('front.editBlog',['post'=>$post,'qustions'=>$qustions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $post=Post::find($id);
       if($request->input('title')!=null){
           $post->title=$request->input('title');
       }
       if($request->input('body')!=null){$post->desc_post=$request->input('body');}
       if($request->file('select_file')!=null){
        $image = $request->file('select_file');
           
        // Make a image name based on user name and current timestamp
        $name = str_slug(Auth::user()->name.'_'.time().'.'.$image->getClientOriginalExtension());
        // Define folder path
        $folder = 'images/Posts';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder .'/'. $name;
        // Upload image
        $image->move(public_path('images/Posts'), $name);
        // Set user profile image path in database to filePath
        $post->image=$filePath;

       }
       $post->save();
       return redirect('/viewPost/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id','=',$id)->delete();
        
        return redirect('/blog');
    }

    public function blogComment(Request $request,$id)
    {
        $postComment=new PostComment();
        $postComment->commentstext_post=$request->input("postComment");
        $postComment->post_id=$id;
        $postComment->user_id=Auth::user()->id;
        $postComment->save();
        return redirect('/viewPost/'.$id);


    }

    public function deletePostComment($id){

        if(PostComment::find($id)){

         PostComment::where('id','=',$id)->delete();
         return redirect('viewPost/'.$id);
        }
    }
}
