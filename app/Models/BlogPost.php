<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class BlogPost extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    public $translatedAttributes = [
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $checkboxes = [
        'published'
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
