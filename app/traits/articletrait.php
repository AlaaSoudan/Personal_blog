<?php

namespace App\traits;


Trait articletrait
{
    public function save_image($image,$folder)
    {

            $image_name = $image->getClientOriginalName();
            $image->move(public_path($folder),$image_name);


            return $image_name;



    }

}
