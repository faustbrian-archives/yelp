<?php

/*
 * This file is part of Yelp PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Yelp\Api;

use BrianFaust\Unified\AbstractApi;

class Search extends AbstractApi
{
    public function search(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('search');

        return $this->hydrateOne($response);
    }

    public function searchByPhone(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('phone_search');

        return $this->hydrateOne($response);
    }

    public function getBusiness($businessId, array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('business/'.$businessId);

        return $this->hydrateOne($response);
    }
}
