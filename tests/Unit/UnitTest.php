<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use App\User;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelType()
    {
        $this->assertInternalType('string', 'Yaris');
    }

    public function testYearType()
    {
        $this->assertInternalType('int', 2002);
    }
    public function testCarCount()
    {
        $this->assertCount(1,['Toyota']);
    }
    public function testCarMake()
    {
        $this->assertContains('Ford',['Ford','Honda','Toyota']);
    }
    public function testUserCount()
    {
        $this->assertCount(1,['Samuel']);
    }

}
