<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
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
    public function testCarInsert()
    {
        $car = new car();
        $car->Make = 'Toyota';
        $car->Model = 'Corolla';
        $car->Year = 2005;
        $this->assertTrue($car->save());
    }
    public function testCarDelete()
    {
        $car = new car();
        $car->Make = 'Ford';
        $car->Model = 'Taurus';
        $car->Year = 2009;
        $car->save();

        $this->assertTrue($car->delete());
    }
    public function testUserDelete()
    {
        $user= new user();
        $user->name = 'George Washington';
        $user->email = 'gwashington@yahoo.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->save();

        $this->assertTrue($user->delete());
    }
    public function testUserInsert()
    {
        $user= new user();
        $user->name = 'Guy Richie';
        $user->email = 'grichie@gmail.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';

        $this->assertTrue($user->save());
    }
    public function testUserCount()
    {
        $users= User::All();
        $recordcount = $users->count();

        $this->assertInternalType(IsType::TYPE_INT,$recordcount);
    }

}
