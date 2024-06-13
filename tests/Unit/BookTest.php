<?php

namespace Tests\Unit;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_if_book_can_be_deleted()
    {
        $book = Book::book_factory()->create();
        $book->delete();
        $this->assertModelMissing($book);
    }

    //masih error foreign violation
    public function test_if_book_can_be_created()
    {
        $book = Book::book_factory()->create();
        $this->assertModelExists($book);
    }

//    public function test_if_book_can_be_updated()
//    {
//
//    }
}
