<?php

use Tests\TestCase;

class ViewsTest extends TestCase
{
    /* @test */
    public function test_a_login_view_can_be_rendered(): void
    {
        $view = $this->view('login', ['title' => 'login']);
        $view->assertSee('login');
    }

    public function test_a_peminjaman_view_can_be_rendered():void{
        $view = $this->view('peminjaman' , ['title'=>'Peminjaman']);
        $view->assertSee('Peminjaman');
    }
}
