<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SiteSetting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = ['id'];

    public static $keys = [

        "consultancy_name" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Consultancy Name"
        ],
        "logo" => [
            "type" => "image",
            "element" => "image",
            "visible" => 1,
            "display_text" => "Site Logo"
        ],

        "registration_number" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Registration Number"
        ],


        "email" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Email"
        ],


        "phone" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Phone"
        ],


        "website" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Website URL"
        ],

        "address" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Address"
        ],
        "country" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Country"
        ],
        "established_at" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Established At"
        ],

        "description" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Description"
        ],




    ];
}
