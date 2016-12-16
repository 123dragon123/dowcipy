<?php

class Joke
{
    const URL = 'http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list';

    public function getJokes () {

        $jokes = json_decode(
            $this->http->request('GET', self::URL)->getBody(),
            true
        );

        return $jokes[array_rand($jokes)]['content'];
    }

    public function all() {
        $jokes = json_decode(
            $this->http->request('GET', self::URL)->getBody(),
            true
        );

        return $jokes;
    }

    public function __construct($http)
    {
        $this->http = $http;
    }
}
