<?php

declare(strict_types=1);

namespace App\Actions\Designs;

use App\Http\Requests\Api\Design\StoreLikedDesignRequest;
use App\Models\LikeDesign;
use Illuminate\Support\Facades\Auth;

final class AddLikeToDesignAction
{
     public function __invoke(StoreLikedDesignRequest $request): void
     {
          LikeDesign::create([
               'item_id'       =>       $request->item_id,
               'customer_id'   =>       Auth::id(),
          ]);
     }
}