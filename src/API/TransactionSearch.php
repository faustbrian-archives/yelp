<?php

/*
 * This file is part of Yelp PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Yelp\API;

use BrianFaust\Http\HttpResponse;

class TransactionSearch extends AbstractAPI
{
    public function search(string $transactionType, array $parameters): HttpResponse
    {
        return $this->client->get("transactions/{$transactionType}/search", $parameters);
    }
}
