<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use App\Models\Story;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach (Genre::$genreList as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }

        Story::create([
            "title" => "Title 1",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 2",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 3",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 4",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 5",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 6",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 7",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);

        Story::create([
            "title" => "Title 8",
            "cover" => config('story.cover_default'),
            "genre_id" => fake()->numberBetween(1, 7),
            "synopsis" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores non, qui rem nulla saepe et exercitationem nisi neque, dignissimos repellendus totam, enim obcaecati. Voluptas hic odio exercitationem, molestiae corporis amet provident dignissimos molestiae corporis amet provident dignissimos lorems",
            "content" =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quae maiores voluptas aspernatur? Velit quae, eius
                voluptate deleniti dolorem eveniet excepturi similique incidunt ipsum blanditiis hic ducimus voluptates amet optio
                itaque modi. Facere deleniti eius ex aspernatur cum delectus sequi officiis, quidem tenetur sed voluptatem reprehenderit
                incidunt dolorem sapiente voluptates facilis repudiandae vero numquam qui nisi ab fugiat nemo harum tempore. Soluta
                repudiandae saepe assumenda ea nemo reprehenderit sed ullam id placeat suscipit consectetur neque asperiores dolore odit
                fugiat quaerat veniam earum adipisci, temporibus rerum! Dolore impedit aliquam deserunt iusto pariatur quasi, velit,
                libero ipsum quia, expedita quo recusandae a.</p>
            ",
            "created_at" => fake()->dateTime()
        ]);
    }
}
