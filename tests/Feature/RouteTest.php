<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */
    public function it_checks_the_peminjaman_route(): void
    {
        $response = $this->get('/peminjaman');
        $response->assertStatus(200);
    }

    /** @test */
    public function it_checks_the_daftarbuku_route(): void
    {
        $response = $this->get('/daftarbuku');
        $response->assertStatus(200);
    }

    public function it_checks_the_login_route(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    // public  function it_checks_the_daftarbuku_post_route(): void
    // {
    //     $response = $this->post('/daftarbuku' , ['title'=>'Laporan']);
    //     $response->assertStatus(200);
    // }
}
