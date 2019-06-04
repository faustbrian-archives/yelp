<?php

declare(strict_types=1);

/*
 * This file is part of Yelp PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Yelp\API;

use Plients\Http\HttpResponse;

class Reviews extends AbstractAPI
{
    public function reviews(int $id, array $parameters): HttpResponse
    {
        return $this->client->get("businesses/{$id}/reviews", $parameters);
    }
}
