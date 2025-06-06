<?php

namespace App\Http\Controllers;
use \App\Models\post;

use Illuminate\Http\Request;

class PostController extends Controller
{

            // -create controller-

//    public function index(){
//        return "<h1> Hello </h1>";
//    }
//    public function details(){
//        return "<h1> Hiii </h1>";
//    }

              // -dynamic route parameter-

//    public function details($id){
//        return "<h1> This Is Detail Page no: ".$id." </h1>";
//    }

                    // -Redirect-

//     public function oldUrl(){
//        return redirect('/newUrl');
//     }
//     public function newUrl(){
//         return "<h1> Redirect Successfully</h1>";
//     }

                    // -Named Route-
//    public function oldUrl(){
//        return redirect()->route('newUrl');
//     }
//     public function newUrl(){
//         return "<h1> Redirect Successfully</h1>";
//     }

                      //-Practice for homepage-

//    public function index(){
//        return view('index');
//    }
//    public function detail(){
//        return view('detail');
//    }
//
//    public function index(){
//        $title="Laravel";
//        return view('index',compact('title'));
//    }

                         // -Foreach-

//    public function index(){
//        $title="Laravel";
//        $posts=json_decode(json_encode([
//               ['title'=> 'post 1','content'=>'Content of the post 1'],
//               ['title'=> 'post 2','content'=>'Content of the post 2']
//         ]));
//        return view('index',compact('title','posts'));
//    }

                        // -dynamic url generate-
//
//    public function index(){
//        $title="Laravel";
//        $posts=json_decode(json_encode([
//            ['id'=>1,'title'=> 'post 1','content'=>'Content of the post 1'],
//            ['id'=>2,'title'=> 'post 2','content'=>'Content of the post 2']
//        ]));
//        return view('index',compact('title','posts'));
//    }


                         // -Showing post detail data-


//    public function index()
//    {
//        $title = "Laravel";
//        $posts = $this->getPosts();
//        return view('index', compact('title','posts'));
//    }
//    private function getPosts(){
//        return json_decode(json_encode([
//            ['id'=>1,'title'=> 'post 1','content'=>'Content of the post 1'],
//            ['id'=>2,'title'=> 'post 2','content'=>'Content of the post 2']
//        ]));
//    }
//    public function details($id){
//        $posts = $this->getPosts();
//        $post=collect($posts)->firstWhere('id',$id);
//        return view('detail', compact('post'));
//    }


                            // --Get Postdata From Databasse-- 
    // public function index()
    // {
    //     $title = "Laravel";
    //     $posts = post::all();
    //     return view('index', compact('title','posts'));
    // }
    // private function getPosts(){
    //     return json_decode(json_encode([
    //         ['id'=>1,'title'=> 'post 1','content'=>'Content of the post 1'],
    //         ['id'=>2,'title'=> 'post 2','content'=>'Content of the post 2']
    //     ]));
    // }
    // public function details($id){
    //     $posts = $this->getPosts();
    //     $post=collect($posts)->firstWhere('id',$id);
    //     return view('detail', compact('post'));
    // }

                        //  --Get Post By Id--
    
    // public function index()
    // {
    //     $title = "Laravel";
    //     $posts = post::all();
    //     return view('index', compact('title','posts'));
    // }
    // // private function getPosts(){
    // //     return json_decode(json_encode([
    // //         ['id'=>1,'title'=> 'post 1','content'=>'Content of the post 1'],
    // //         ['id'=>2,'title'=> 'post 2','content'=>'Content of the post 2']
    // //     ]));
    // // }
    // public function details($id){
    //     // $posts = $this->getPosts();
    //     // $post=collect($posts)->firstWhere('id',$id);
    //     $post=post::find($id);
    //     return view('detail', compact('post'));
    // }

                            // --Handling the Error--   
                            
    public function index(Request $request)
    {
        $title = "Laravel";
        // $posts = post::all();
        // $posts=post::paginate(5);
        $query=post::query();
        if($request->has("search") && !empty($request->search)){
           $query->where("title","like","%".$request->search."%")
                ->orWhere("content","like","%".$request->search."%");
        }
        $posts=$query->paginate(5);
        return view('index', compact('title','posts'));
    }
    // private function getPosts(){
    //     return json_decode(json_encode([
    //         ['id'=>1,'title'=> 'post 1','content'=>'Content of the post 1'],
    //         ['id'=>2,'title'=> 'post 2','content'=>'Content of the post 2']
    //     ]));
    // }
    // public function details($id){
    //     // $posts = $this->getPosts();
    //     // $post=collect($posts)->firstWhere('id',$id);
    //     try{
    //           $post=post::findOrFail($id);
    //           return view('detail', compact('post'));
    //     }
    //     catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
    //         return response()->view('errors.404',[],404);
            
    //     }
    // } 
    
    
    //       public function details($slug){
    //     // $posts = $this->getPosts();
    //     // $post=collect($posts)->firstWhere('id',$id);
    //     try{
    //           $post=post::where('slug', $slug)->first();
    //           if(!$post){
    //             throw new \Illuminate\Database\Eloquent\ModelNotFoundException; 
    //           }
    //           return view('detail', compact('post'));
    //     }
    //     catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
    //         return response()->view('errors.404',[],404);
            
    //     }
    // }

                   //show related posts
       public function details($slug){
        // $posts = $this->getPosts();
        // $post=collect($posts)->firstWhere('id',$id);
        try{
              $post=post::where('slug', $slug)->first();
              if(!$post){
                throw new \Illuminate\Database\Eloquent\ModelNotFoundException; 
              }
              $category=$post->category;
              $related_posts=post::where('category_id', $category->id)
                             ->where('id','!=', $post->id)->take(5)->get();  
              return view('detail', compact('post','related_posts'));
        }
        catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response()->view('errors.404',[],404);
            
        }
    }




}
