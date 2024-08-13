<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserModelTest extends TestCase
{
    use RefreshDatabase;

    public function testDatabaseQuery()
    {
        $user = User::factory()->create(['name' => 'Test User']);
        $foundUser = User::where('name', 'Test User')->first();
        $this->assertEquals($user->id, $foundUser->id);
    }

    public function testInvalidQuery()
    {
        $foundUser = User::where('name', 'Nonexistent User')->first();
        $this->assertNull($foundUser);
    }
}
