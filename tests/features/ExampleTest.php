<?php


class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Alejo Granados',
            'email' => 'admin@ogilvy.com',
            ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Alejo Granados')
             ->see('admin@ogilvy.com');
    }
}