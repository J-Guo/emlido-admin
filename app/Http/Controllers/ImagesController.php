<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    /**
     * handle images request
     * @return Response
     */
    public function getAvatar($imageName){

        $avatarPath = "app/avatars";

        //set the image url based on image name
//        $imageURL = storage_path("app/avatars/{$imageName}");
        $imageURL = "http://localhost/newnox/storage/app/avatars/{$imageName}";
        return Image::make($imageURL)->response();

    }
}
