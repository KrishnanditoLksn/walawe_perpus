<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //buat model kategori terlebih dahulu
        $kategori = Kategori::kategori_factory()->create();
        return [
            'judul' => $this->faker->sentence,
            'nama_penulis' => $this->faker->name,
            'isbn' => $this->faker->unique()->isbn13(),
            'penerbit' => $this->faker->company,
            'tahun_terbit' => $this->faker->year,
            'id_kategori_buku' => $kategori->id,
        ];
    }
}
