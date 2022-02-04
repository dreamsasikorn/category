<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Category;
use App\Models\User;

class IndexCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $User = User::first();
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            "datadetail" => [
                'id' => $User->id,
                'name' => $User->name
            ]
        ];
    }
}
