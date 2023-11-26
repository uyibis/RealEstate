<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        'user_id' => $this->user_id,
//        'property_id' => $this->property_id,
        'property_type' => $this->property_type,
       /* 'is_published' => $this->is_published,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,*/
        'listing' => $this->whenLoaded('apartment_listing', function () {
            return [
                'id' => $this->apartment_listing->id,
                'title' => $this->apartment_listing->title,
                'description' => $this->apartment_listing->description,
                'price' => $this->apartment_listing->price,
                'kitchen' => $this->apartment_listing->kitchen,
                'city' => $this->apartment_listing->city,
                'country' => $this->apartment_listing->country,
                'area' => $this->apartment_listing->area,
                'media' => $this->apartment_listing->media,
                'realtor_id' => $this->apartment_listing->realtor_id,
              /*'is_published' => $this->apartment_listing->is_published,
                'created_at' => $this->apartment_listing->created_at,
                'updated_at' => $this->apartment_listing->updated_at,*/
            ];
        }),
    ];
    }
}
