<?php

test('it can render the homepage', function () {
    $this->seed(\Database\Seeders\DatabaseSeeder::class);

    $inactivePost = \App\Models\Post::factory()->inactive()->create();
    $publishedPost = \App\Models\Post::factory()->published()->create();
    $draftPost = \App\Models\Post::factory()->draft()->create();

    $this
        ->get('/')
        ->assertSee('Documentation')
        ->assertSee($inactivePost->title)
        ->assertSee($publishedPost->title)
        ->assertSee($draftPost->title);
});
