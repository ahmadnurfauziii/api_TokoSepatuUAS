<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            // 'limit' => $this->limit,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'tags' => $this->tags,
            'categories_id' => $this->categories_id,
            // 'price_from' => $this->price_from,
            // 'price_to' => $this->price_to,
        ];
    }

    // public function with($request){
    //     return [
    //         'version' => '1.0.0',
    //         'author_url' => url('https://www.nazmulrobin.com'),
    //     ];
    // }
}