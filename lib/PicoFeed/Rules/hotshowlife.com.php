<?php
return [
    'grabber' => [
        '%.*%' => [
            'test_url' => 'https://hotshowlife.com/top-10-chempionov-produktov-po-szhiganiyu-kalorij/',
            'body' => [
                '//div[@class="entry-content"]',
            ],
            'strip' => [
                '//script',
                '//form',
                '//style',
                '//div[@class="ads2"]',
                '//div[@class="mistape_caption"]',
                '//div[contains(@class, "et_social_media_hidden")]',
                '//div[contains(@class, "et_social_inline_bottom")]',
                '//div[contains(@class, "avatar")]',
                '//ul[contains(@class, "entry-tags")]',
                '//div[contains(@class, "entry-meta")]',
            ],
        ],
    ],
];
