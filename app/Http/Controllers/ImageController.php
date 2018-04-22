<?php

namespace App\Http\Controllers;

use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Models\Image;
use App\Oferta;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
        $oferta= new Oferta;
        
    }

    public function getUpload(Oferta $oferta)
    {
        return view('pages.upload',compact('oferta'));
    }


    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }

      /**
     * Part 2 - Display already uploaded images in Dropzone
     */

    public function getServerImagesPage(Oferta $oferta)
    {
        return view('pages.upload-2',compact('oferta'));
    }

    public function getServerImages()
    {
        $images = Image::get(['original_name', 'filename']);

        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->original_name,
                'server' => $image->filename,
                'size' => File::size(public_path('images/full_size/' . $image->filename))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }
}
