<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Http\Controllers\BookingController;
use App\Models\Booking;
use App\Models\User;
use Faker\Factory;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    // public function test_booking_store(): void
    // {
    //     $response = $this->call('POST', '/store/booking', [
    //         'firstname' => 'Ilham Syafaat',
    //         'lastname' => 'dava',
    //         'start' => '29/09/2023',
    //         'end' => '30/09/2023',
    //         'participant' => '4',
    //         'country' => 'Indonesia',
    //         'email' => 'user@gmail.com',
    //         'phone' => '+6285245678761',
    //         'message' => 'Halo',
    //         'destination_id' => 'Ubud',
    //         'transportation_id' => 'Avanza',
    //     ]);

    //     // dd($response);
    //     // $this->assertTrue(true);
    //     $response->assertStatus($response->status(), 200);
    // }
    public function test_booking_store()
    {

    $user = factory(User::class)->create();
    $booking = factory(Booking::class)->create();

    $response = $this->actingAs($user)
        ->post(route('product.store'), [

        'firstname', 'lastname' => $this->faker->words(3, true),
        'cat' => $category->id,
        'quantity' => $this->faker->randomNumber(3),
        'buy_price' => $this->faker->randomNumber(6),
        'sell_price' => $this->faker->randomNumber(6),
    ]);

    //Tuntutan status 302, yang berarti redirect status code.
    $response->assertStatus(302);

    //Tuntutan bahwa abis melakukan POST URL akan dialihkan ke URL product atau routenya adalah product.index
    $response->assertRedirect(route('product.index'));
}
}
