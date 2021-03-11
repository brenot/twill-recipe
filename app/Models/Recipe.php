<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Recipe extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'description',
        'owner',
        'publish_start_date',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'food_shot' => [
            'HP_feature' => [
                [
                    'name' => 'HP_feature',
                    'ratio' => 120 / 64,
                ],
            ],
            'article_feature' => [
                [
                    'name' => 'article_feature',
                    'ratio' => 120 / 50,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 750 / 520,
                ],
            ],
            'phone' => [
                [
                    'name' => 'phone',
                    'ratio' => 470 / 400,
                ],
            ],


        ],
    ];
}
