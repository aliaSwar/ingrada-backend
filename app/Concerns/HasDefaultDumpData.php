<?php

declare(strict_types=1);

namespace App\Concerns;

trait HasDefaultDumpData
{
    protected function types(): array
    {
        return [
            'name'     =>  'logo',
            'slug'     =>   'logo',
            'price'    =>   55,
            'image'    =>   'img3.jpg'
        ];
    }

    protected function prefernces(): array
    {
        return [
            'name'     =>  'write',
            'slug'     =>  'write',
            'price'    =>   55,
            'image'    =>   'img3.jpg',
            'type_id'  =>   1
        ];
    }
    protected function values(): array
    {
        return [
            'name'          =>  'facebook post',
            'slug'          =>  'facebook-post',
            'price'         =>   55,
            'image'         =>   'img3.jpg',
            'prefernce_id'  =>   1
        ];
    }
    protected function scopes(): array
    {
        return [
            'name'     =>  'medical',
            'slug'     =>  'medical',
        ];
    }
    protected function colors(): array
    {
        return [
            'code'     =>  '1111',
            'slug'     =>  '1111',
        ];
    }
    protected function fonts(): array
    {
        return [
            'name'     =>  'arbic',
            'slug'     =>  'arbic',
            'file'     =>   'img3.jpg'
        ];
    }
    protected function customers(): array
    {
        return [
            'name'           =>   'alia',
            'slug'           =>   'alia',
            'first_name'     =>   'alia',
            'last_name'      =>   'sewar',
            'country'        =>   'syria',
            'company'        =>   'evo',
            'phone_number'   =>   '134567897',
            'email'          =>   'swar@app.com',
            'password'       =>  defaultHashedPassword('134567')
        ];
    }
    protected function sizes(): array
    {
        return [
            'length'            =>  196,
            'width'             =>  196,
        ];
    }
    protected function items(): array
    {
        return [
            'image'              =>  asset('assets/images/background/beauty.jpg'),
            'likes'              => 1,
            'is_enable_post'     => 1,
            'prefernce_value_id' => 1,
            'prefernce_id'       => 1,
            'prefernce_value_id' => 1,
            'type_id'            => 1,
            'scope_id'           => 1,

        ];
    }
}
