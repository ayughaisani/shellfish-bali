<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_registrasi_dapat_ditampilkan()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_admin_dapat_melakukan_register()
    {
        $response = $this->post('/register', [
            'name' => 'Shellfish',
            'email' => 'shellfish@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }

    public function test_login_dapat_ditampilkan()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_admin_dapat_melakukan_autentikasi_login()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }

    public function test_admin_login_dengan_password_yang_salah()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
