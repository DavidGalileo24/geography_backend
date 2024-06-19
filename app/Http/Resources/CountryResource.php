<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'total_population' => $this->total_population,
            'capital' => $this->capital,
            'continent' => ContinentResource::collection($this->continent),
            'languaje' => LanguajeResource::collection($this->languaje),
            'religion' => ReligionResource::collection($this->religion),
            'currency' => CurrencyResource::collection($this->currency)
        ];
    }
}
