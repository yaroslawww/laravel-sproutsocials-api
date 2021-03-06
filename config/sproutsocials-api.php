<?php

return [
    'http' => [
        'api_url'     => env('SPROUTSOCIALS_API_URL', 'https://api.sproutsocial.com'),
        'api_version' => env('SPROUTSOCIALS_API_VERSION', 'v1'),

        'api_token'       => env('SPROUTSOCIALS_ACCESS_TOKEN', ''),

        /* Guzzle request options https://docs.guzzlephp.org/en/stable/request-options.html */
        'request_options' => [],

        'customer_id' => env('SPROUTSOCIALS_DEFAULT_CUSTOMER_ID'),
    ],

    'metrics' => [
        // @see https://api.sproutsocial.com/docs/#twitter-owned-post-metrics
        'post' => [
            'instagram' => [
                'lifetime.impressions',
                'lifetime.impressions_unique',
                'lifetime.video_views',
                'lifetime.reactions',
                'lifetime.likes',
                'lifetime.comments_count',
                'lifetime.saves',
                // 'lifetime.story_taps_back',
                // 'lifetime.story_taps_forward',
                // 'lifetime.story_exits',
            ],
            'linkedin' => [
                'lifetime.impressions',
                'lifetime.reactions',
                'lifetime.comments_count',
                'lifetime.shares_count',
                'lifetime.post_content_clicks',
                'lifetime.video_views',
            ],
            'facebook' => [
                'lifetime.impressions',
                // 'lifetime.impressions_organic',
                // 'lifetime.impressions_viral',
                // 'lifetime.impressions_nonviral',
                // 'lifetime.impressions_paid',
                // 'lifetime.impressions_follower',
                // 'lifetime.impressions_follower_organic',
                // 'lifetime.impressions_follower_paid',
                // 'lifetime.impressions_nonfollower',
                // 'lifetime.impressions_nonfollower_organic',
                // 'lifetime.impressions_nonfollower_paid',
                // 'lifetime.impressions_unique',
                // 'lifetime.impressions_organic_unique',
                // 'lifetime.impressions_viral_unique',
                // 'lifetime.impressions_nonviral_unique',
                // 'lifetime.impressions_paid_unique',
                // 'lifetime.impressions_follower_unique',
                // 'lifetime.impressions_follower_paid_unique',
                'lifetime.reactions',
                'lifetime.likes',
                // 'lifetime.reactions_love',
                // 'lifetime.reactions_haha',
                // 'lifetime.reactions_wow',
                // 'lifetime.reactions_sad',
                // 'lifetime.reactions_angry',
                'lifetime.comments_count',
                'lifetime.shares_count',
                // 'lifetime.question_answers',
                'lifetime.post_content_clicks',
                'lifetime.post_link_clicks',
                // 'lifetime.post_photo_view_clicks',
                // 'lifetime.post_video_play_clicks',
                // 'lifetime.post_content_clicks_other',
                // 'lifetime.negative_feedback',
                'lifetime.engagements_unique',
                // 'lifetime.engagements_follower_unique',
                // 'lifetime.post_activity_unique',
                // 'lifetime.reactions_unique',
                // 'lifetime.comments_count_unique',
                // 'lifetime.shares_count_unique',
                // 'lifetime.question_answers_unique',
                // 'lifetime.post_content_clicks_unique',
                // 'lifetime.post_link_clicks_unique',
                // 'lifetime.post_photo_view_clicks_unique',
                // 'lifetime.post_video_play_clicks_unique',
                // 'lifetime.post_other_clicks_unique',
                // 'lifetime.negative_feedback_unique',
                // 'video_length',
                'lifetime.video_views',
                // 'lifetime.video_views_organic',
                // 'lifetime.video_views_paid',
                // 'lifetime.video_views_autoplay',
                // 'lifetime.video_views_click_to_play',
                // 'lifetime.video_views_sound_on',
                // 'lifetime.video_views_sound_off',
                // 'lifetime.video_views_10s',
                // 'lifetime.video_views_10s_organic',
                // 'lifetime.video_views_10s_paid',
                // 'lifetime.video_views_10s_autoplay',
                // 'lifetime.video_views_10s_click_to_play',
                // 'lifetime.video_views_10s_sound_on',
                // 'lifetime.video_views_10s_sound_off',
                // 'lifetime.video_views_partial',
                // 'lifetime.video_views_partial_organic',
                // 'lifetime.video_views_partial_paid',
                // 'lifetime.video_views_partial_autoplay',
                // 'lifetime.video_views_partial_click_to_play',
                // 'lifetime.video_views_30s_complete',
                // 'lifetime.video_views_30s_complete_organic',
                // 'lifetime.video_views_30s_complete_paid',
                // 'lifetime.video_views_30s_complete_autoplay',
                // 'lifetime.video_views_30s_complete_click_to_play',
                // 'lifetime.video_views_p95',
                // 'lifetime.video_views_p95_organic',
                // 'lifetime.video_views_p95_paid',
                // 'lifetime.video_views_unique',
                // 'lifetime.video_views_organic_unique',
                // 'lifetime.video_views_paid_unique',
                // 'lifetime.video_views_10s_unique',
                // 'lifetime.video_views_30s_complete_unique',
                // 'lifetime.video_views_p95_organic_unique',
                // 'lifetime.video_views_p95_paid_unique',
                // 'lifetime.video_view_time_per_view',
                // 'lifetime.video_view_time',
                // 'lifetime.video_view_time_organic',
                // 'lifetime.video_view_time_paid',
                // 'lifetime.video_ad_break_impressions',
                // 'lifetime.video_ad_break_earnings',
                // 'lifetime.video_ad_break_cost_per_impression',
            ],
            'twitter' => [
                'lifetime.impressions',
                'lifetime.post_media_views',
                'lifetime.video_views',
                'lifetime.reactions',
                'lifetime.likes',
                'lifetime.comments_count',
                'lifetime.shares_count',
                'lifetime.post_content_clicks',
                'lifetime.post_link_clicks',
                // 'lifetime.post_content_clicks_other',
                // 'lifetime.post_media_clicks',
                // 'lifetime.post_hashtag_clicks',
                // 'lifetime.post_detail_expand_clicks',
                // 'lifetime.post_profile_clicks',
                'lifetime.engagements_other',
                // 'lifetime.post_followers_gained',
                // 'lifetime.post_app_engagements',
                // 'lifetime.post_app_installs',
            ],
        ],
    ],
];
