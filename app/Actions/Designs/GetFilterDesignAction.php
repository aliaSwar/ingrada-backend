<?php

declare(strict_types=1);

namespace App\Actions\Designs;

use App\Http\Requests\Api\FilterRequest;
use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;

final class GetFilterDesignAction
{
    public function __invoke(FilterRequest $request)
    {

        $data=Item::query()
            ->where('is_enable_post', true)
            ->when(
                $request->type_id,
                fn (Builder $builder) =>
                      $builder->where('type_id', $request->type_id)
            )->when(
            $request->scope_id,
            fn (Builder $builder) =>
                  $builder->where('scope_id', $request->scope_id)
        )->when(
            $request->prefernce_id,
            fn (Builder $builder) =>
                  $builder->where('prefernce_id', $request->prefernce_id)
        )->when(
            $request->colors,
            fn (Builder $builder) =>
                  $builder->whereHas(
                      'colors',
                      fn (Builder $builder) =>
                       $builder->whereIn('colors.id', $request->colors)
                  )
        )->when($request->fonts, fn (Builder $builder) =>
                  $builder->whereHas(
                      'fonts',
                      fn (Builder $builder) =>
                       $builder->whereIn('fonts.id', $request->fonts)
                  ))->orderBy('likes', 'desc')
            ->get();


        return $data;
    }
}
