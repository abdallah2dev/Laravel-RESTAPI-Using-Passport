<?php

namespace Task\Transformers;

use Task\Post;
use Task\Transformers\UserTransformer;

class PostTransformer extends \League\Fractal\TransformerAbstract {

    protected $availableIncludes = ['user'];
    // protected $defaultIncludes = ['user'];

    public function transform(Post $post) {
        return [
            'id' => $post->id,
            'title' => $post->title,
            'created_at' => $post->created_at->toDateTimeString(),
            'created_at_human' => $post->created_at->diffForHumans()
        ];
    }

    public function includeUser(Post $post) {
        return $this->item($post->user, new UserTransformer);
    }
}