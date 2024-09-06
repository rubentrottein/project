<?php
namespace App\Entity;

use AllowDynamicProperties;

#[AllowDynamicProperties] class Article
{

    /**
     * @return array
     *
    public function getArticles()
    {

    }

    /*
    public function __construct(
        private HttpClientInterface $client
    ) {
    }
    public function fetchGitHubInformation(): array
    {
        $response = $this->client->request(
            'GET',
            'http://localhost:3999/api/school/articles'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $content;
    }
    */

}
