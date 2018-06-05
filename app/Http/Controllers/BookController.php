<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.book',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.bookadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book= new Book();
        $book->title=$request->get('title');
        $book->author=$request->get('author');
        $book->isbn=$request->get('isbn');
        $book->published=$request->get('published');
				$book->is_active='Y';
        $book->save();

        return redirect('book')->with('success', 'Buku berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			$book = Book::select('*')
    					->where('id_book', $id)
    					->first();
			return view('book.bookedit',compact('book','id_book'));
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
			$book= Book::where('id_book', $id)
							->update([
								'title' => $request->get('title'),
								'author' => $request->get('author'),
								'isbn' => $request->get('isbn'),
								'published' => $request->get('published'),
								'is_active' =>'Y'
							]);

			return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$book = Book::where('id_book', $id)->delete();
			return redirect('book')->with('success','Buku berhasil dihapus');
    }
}
