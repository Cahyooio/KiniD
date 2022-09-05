<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSimilarity()
    {
        $response = $this->get('/dev/pearson-correlation');

        $response->assertSee('product_id_1');
        $response->assertSee('product_id_2');
        $response->assertStatus(200);
    }

    public function testWeightedSum()
    {
        $response = $this->get('/dev/prediction');

        $response->assertSee('user_id');
        $response->assertSee('product_id');
        $response->assertStatus(200);
    }

    public function testRating()
    {
        $response = $this->post('/rating');

        $response->assertStatus(302);
    }
    
    public function testOrder()
    {
        $response = $this->post('/checkout');

        $response->assertStatus(302);
    }
    
}
