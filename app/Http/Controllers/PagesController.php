<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('welcome')->with('books',$books);
    }

    public function viewCategory($id)
    {
        $category = Category::find($id);
        $books = $category->books;
        return view('viewCategory')->with(['books'=>$books,'category'=>$category]);
    }

    public function viewBook($id)
    {
        $book = Book::find($id);
        return view('book')->with('book',$book);
    }

    public function addComment(Request $request,$id)
    {
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);
        $book = Book::findOrFail($id);
        $comment =  new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->book_id = $book->id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect()->back();
        

    }

    

}
