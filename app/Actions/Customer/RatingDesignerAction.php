<?php

declare(strict_types=1);

namespace App\Actions\Customer;

use App\Http\Requests\Api\Order\StoreRatingDesignerRequest;
use App\Models\Point;

final class RatingDesignerAction{
     
     public function __invoke(StoreRatingDesignerRequest $request)
     {
          $attributes = $request->only(
               (new Point)->getFillable()
          );
          $point=Point::create($attributes);
          
          return $point;
     }
}
