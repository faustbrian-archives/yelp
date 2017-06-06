<?php

/*
 * This file is part of Yelp PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Yelp;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://api.yelp.com/v2/',
        'headers' => [
           'User-Agent' => 'BrianFaust/Yelp',
           'Accept' => 'application/json',
        ],
        'auth' => 'oauth',
    ];

    protected function getHandler()
    {
        return \BrianFaust\Http\Handlers\OAuth1::class;
    }
}
