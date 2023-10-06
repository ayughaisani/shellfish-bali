<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserbookingTest extends TestCase
{
    use WithFaker;

    public function test_user_akses_homepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_booking_store()
    {
        $user = User::factory()->create();
        $data = Booking::all();

        $response = $this->actingAs($user)
            ->post(route('/store/booking'), [

                'firstname' => $this->faker->words(3, true),
                'lastname' => $this->faker->words(3, true),
                'start' => $this->faker->date(),
                'end' => $this->faker->date(),
                'participant' => $this->faker->randomNumber(3),
                'country' => $this->faker->words(),
                'email' => $this->faker->freeEmail(),
                'phone' => $this->faker->randomNumber(12, true),
                'message' => $this->faker->sentence(3),
                'destination_id' => $data->destination_id,
                'transportation_id' => $data->destination_id,
            ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('/'));
    }
}
