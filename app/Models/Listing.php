<?php

namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id' => '1',
                'name' => 'post one',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem',
            ],
            [
                'id' => '2',
                'name' => 'post two',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem',
            ],
            [
                'id' => '3',
                'name' => 'post three',
                'desc' => 'lorem lorem lorem lorem lorem lorem lorem',
            ],
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }

}






