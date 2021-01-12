<?php

namespace Akkurate\LaravelCarbonIcons\Classes;

class Generate
{
    public function __construct()
    {
        $stub = stub_path('icons/icon.stub');
    }

    public function setCreateElement()
    {
        return "createElement('path', {
                attrs: {
                    d:
                        'M30,6H18.82A3,3,0,0,0,17,4.18V2H15V4.18A3,3,0,0,0,13.18,6H2V8H6.05C4.6,11.12,2,17,2,19a5,5,0,0,0,10,0c0-2-2.6-7.88-4-11h5.23A3,3,0,0,0,15,9.82V28H11v2H21V28H17V9.82A3,3,0,0,0,18.82,8h5.23C22.6,11.12,20,17,20,19a5,5,0,0,0,10,0c0-2-2.6-7.88-4.05-11H30ZM7,22a3,3,0,0,1-2.82-2H9.82A3,3,0,0,1,7,22Zm2.82-4H4.18A58.83,58.83,0,0,1,7,10.73,58.83,58.83,0,0,1,9.82,18ZM16,8a1,1,0,1,1,1-1A1,1,0,0,1,16,8Zm9,14a3,3,0,0,1-2.82-2h5.64A3,3,0,0,1,25,22Zm2.82-4H22.18A58.83,58.83,0,0,1,25,10.73,58.83,58.83,0,0,1,27.82,18Z',
                },
            })";
    }
}
