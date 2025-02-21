<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'imageUrl' => $this->image_url, // Convert snake_case to camelCase
            'githubLink' => $this->github_link, // Convert snake_case to camelCase
            'liveDemoLink' => $this->live_demo_link, // Convert snake_case to camelCase
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}

