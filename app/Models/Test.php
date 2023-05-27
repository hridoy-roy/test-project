<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Test extends Model
{
    use Sushi;

    protected array $rows = [
        [
            "id" => 1,
            "name" => "Besnik",
            "thumbnail" => "https://serpapi.com/searches/64723f32477c0efc7bb75808/images/e13fb8a70df795598ef41296f028f05c5e163d0299df7b9ecf81e6aef84e61ee.jpeg",
            "preview_images" => '["https://serpapi.com/searches/64723f32477c0efc7bb75808/images/e13fb8a70df795598ef41296f028f05c5e163d0299df7b9ecf81e6aef84e61ee.jpeg","https://serpapi.com/searches/64723f32477c0efc7bb75808/images/e13fb8a70df795598ef41296f028f05c5e163d0299df7b9ecf81e6aef84e61ee.jpeg","https://serpapi.com/searches/64723f32477c0efc7bb75808/images/e13fb8a70df795598ef41296f028f05c5e163d0299df7b9ecf81e6aef84e61ee.jpeg"]',
            "categories" => '["Demo","Demo1"]',
        ],
    ];
}
