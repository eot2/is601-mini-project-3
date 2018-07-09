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
    public function testCarModelType()
    {
        $car = Car::find(1);
        $this->assertInternalType('string', $car->Model);
    }
    public function testCarYearType()
    {
        $car = Car::find(2);
        $this->assertInternalType('string',$car->Year);
    }
    public function testUpdateCarYear()
    {
        $car = Car::find(2);
        $car->Year = 2000;
        $this->assertTrue($car->save());
    }
    public function testUpdateUserName()
    {
        $user = User::find(3);
        $user->Name = 'Steve Smith';
        $this->assertTrue($user->save());
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
    public function testCarInsert()
    {
        $car = new car();
        $car->Make = 'Toyota';
        $car->Model = 'Corolla';
        $car->Year = 2005;
        $this->assertTrue($car->save());
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
        $user->email = 'grichie@example.net';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->remember_token = str_random(10);

        $this->assertTrue($user->save());
    }
    public function testCarCount()
    {
        $cars= Car::All();
        $carcount = $cars->count();

        $this->assertInternalType(IsType::TYPE_INT,$carcount);
    }
    public function testUserCount()
    {
        $users= User::All();
        $usercount = $users->count();

        $this->assertInternalType(IsType::TYPE_INT,$usercount);
    }
}
