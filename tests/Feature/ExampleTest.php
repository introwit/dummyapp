<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Artisan::call('db:seed --class=DatabaseSeeder');

        $user = User::factory()->hasAccounts(1)->create();

        // This line will result in an exeption when the test runs
        $user->accounts->first()->assignRole('Free Plan');
    }
}
