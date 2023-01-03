<?php

namespace App\Http\Resources\Product;
use App\Models\Model\Review;

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
       // return parent::toArray($request);
       $test=\App\Models\Model\Review::find($this->id);
      // dd($test->star);
       return [
        'name' => $this->name,
        'description' =>$this->detail,
        'price' => $this->price,
        'stock'=> $this->stock,
        'discount'=> $this->discount,
        'rating'=>$test->star?round($test->star,2):'no rating',
       
        'href' =>[
        'reviews'=>route('reviews.index',$this->id)
        ]
       ];
    }
}
