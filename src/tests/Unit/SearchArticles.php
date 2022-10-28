<?php

namespace Tests\Unit;

/* use PHPUnit\Framework\TestCase; */

Use Tests\TestCase;

class SearchArticles extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function search_unit_test()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
