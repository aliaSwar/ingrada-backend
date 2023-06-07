<?php

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
}
