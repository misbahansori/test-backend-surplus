<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'        => $this->name,
            'description' => $this->description,
            'enable'      => (bool) $this->enable,
            'categories'  => CategoryResource::collection($this->whenLoaded('categories')),
            'images'      => ImageResource::collection($this->whenLoaded('images')),
        ];
    }
}
