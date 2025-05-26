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
            'capital' => $this->capital,
            'flag' => $this->flag,
            'map' => $this->map,
            'total_population' => $this->total_population,
            'demonym' => $this->demonym,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'numeric_code' => $this->numeric_code,
            'continent' => new ContinentResource($this->continent),
            'languajes' => LanguajeResource::collection($this->languajes),
            'religions' => ReligionResource::collection($this->religions),
            'currencies' => CurrencyResource::collection($this->currencies),
            'map' => ImageResource::collection($this->images),
            'description' => $this->description,
        ];
    }
}
