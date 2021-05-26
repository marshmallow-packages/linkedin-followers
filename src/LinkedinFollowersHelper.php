<?php

namespace MarshmallowPackages\LinkedinFollowers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class LinkedinFollowersHelper
{
    protected $base_path = 'https://www.linkedin.com/pages-extensions/FollowCompany?id=:company_id&counter=bottom';

    protected $id;

    protected $response;

    public function of(int $company_id): self
    {
        $this->id = $company_id;
        return $this;
    }

    public function get(): self
    {
        $this->response = Http::get(
            (string) Str::of($this->base_path)->replace(':company_id', $this->id)
        );

        return $this;
    }

    public function followers():int
    {
        $match = $this->get()->match();
        $result = $match[1][0];
        return intval($result);
    }

    public function match(): array
    {
        preg_match_all($this->regularExpression(), $this->getResponse()->body(), $matches);
        return $matches;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }

    public function regularExpression(): string
    {
        return '/<div class=\"follower-count\"\>(.*?)\<\/div\>/is';
    }
}
