<?php


namespace Tests\Unit;

use App\Models\Kategori;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KategoriTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_book_category_can_be_created()
    {
        $kategori = Kategori::kategori_factory()->create();
        $this->assertModelExists($kategori);
    }

    public function test_if_book_category_can_be_deleted()
    {
        $kategori = Kategori::kategori_factory()->create();
        $kategori->delete();
        $this->assertModelMissing($kategori);
    }
}
