<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookshelf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data['books'] = Book::with('bookshelf')->get();
        return view('books.index', $data);
    }

    public function create()
    {
        $data['bookshelves'] = Bookshelf::pluck('name', 'id');
        return view('books.create', $data);
    }

    public function store(Request $request)
    {
        $valiated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:150',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'publisher' => 'required|max:100',
            'city' => 'required|max:75',
            'qty' => 'required|numeric',
            'bookshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->storeAs(
                'public/cover_buku',
                'cover_buku_' . time() . '.' . $request->file('cover')->extension()
            );
            $valiated['cover'] = basename($path);
        }

        Book::create($valiated);

        $notificaton = array(
            'message' => 'Buku berhasil ditambahkan! :D',
            'allert-type' => 'success'
        );

        if ($request->save == true) {
            return redirect()->route('book')->with($notificaton);
        } else
            return redirect()->route('book.create')->with($notificaton);
    }

    public function edit(string $id)
    {
        $data['book'] = Book::findOrFail($id);
        $data['bookshelves'] = Bookshelf::pluck('name', 'id');

        return view('books.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $valiated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:150',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'publisher' => 'required|max:100',
            'city' => 'required|max:75',
            'qty' => 'required|numeric',
            'bookshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            if ($book->cover != null) {
                Storage::delete('/public/cover_buku/' . $request->old_cover);
            }

            $path = $request->file('cover')->storeAs(
                '/public/cover_buku',
                'cover_buku_' . time() . '.' . $request->file('cover')->extension()
            );

            $valiated['cover'] = basename($path);
        }

        Book::where('id', $id)->update($valiated);

        $notificaton = array(
            'message' => 'Data buku berhasil diperbahharui',
            'alert-type' => 'success'
        );

        return redirect()->route('book')->with($notificaton);
    }

    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        Storage::delete('public/cover_buku/' . $book->cover);

        $book->delete();

        $notificaton = array(
            'message' => 'Buku telah berhasil dihapus',
            'alert-type' => 'warning'
        );

        return redirect()->route('book')->with($notificaton);
    }
}
