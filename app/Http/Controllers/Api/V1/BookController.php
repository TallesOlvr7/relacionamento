<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(BookCreateRequest $bookCreateRequest)
    {
        $book = Book::create($bookCreateRequest->only('name'));
        $bookGenres = $bookCreateRequest->input('genres');
        foreach($bookGenres as $genre){
            $book->genres()->attach($genre);
        }

    }

    public function index()
    {
        return Book::with('genres')->get();
    }
}
