<?php

namespace App\Http\Resources\Blueprint;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlueprintResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                  => $this->id,
            'name'                => $this->name,
            'target_audience'     => $this->target_audience,
            'tone'                => $this->tone,
            'max_characters'      => $this->max_characters,
            'max_hashtags'        => $this->max_hashtags,
            'forbidden_words'     => $this->forbidden_words ?? [],
            'style_notes'         => $this->style_notes,
            'generated_posts_count' => $this->whenCounted('generatedPosts'),
            'created_at'          => $this->created_at?->toIso8601String(),
            'updated_at'          => $this->updated_at?->toIso8601String(),
        ];
    }
}
