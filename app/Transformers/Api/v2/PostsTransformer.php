<?php

declare(strict_types=1);

namespace App\Transformers\Api\v2;

use App\Models\Blog\Post;
use League\Fractal\TransformerAbstract;

class PostsTransformer extends TransformerAbstract
{
    public function transform(Post $post) : array
    {
        return [
            'author' => $post->author->getName(),
            'title' => $post->getTitle(),
            'headline' => $post->getHeadline(),
            'post' => $post->getPost(),
            'slug' => $post->getSlug(),
            'publishedAt' => $post->getPublishedAt(),
        ];
    }
}