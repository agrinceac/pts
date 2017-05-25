<?php
namespace App\Article\Http\Controllers;

use Illuminate\Http\Request;
use App\Article\Models\Article;
use App\Article\Models\Image;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;
use Validator;

class ImagesAdminController extends Controller
{
    protected $modelClassName = 'App\Article\Models\Article';

    public function __construct()
    {
        $this->middleware('adminRoute');
    }

    public function upload(Request $request, int $articleId)
    {
        $articles = new Article();
        $article = $articles->findOrFail($articleId);

        $validationRules = [
            'images' => 'required | mimes:jpeg,jpg,png,gif | max:2000'
        ];

        if ($this->validateImages($request->all(), $validationRules)) {

            if ($request->hasFile('images')) {
                $file = $request->file('images');

                $filename = $file->getClientOriginalName();

                $destinationPath = public_path(Image::IMAGES_LOCATION);

                $newFile = $file->move($destinationPath, $filename);
                $added = $this->addImage($newFile, $articleId);

                return response()->json($added);
            }

        } else return response()->json($this->getValidationErrors($request->all(), $validationRules))->setStatusCode(422);

        return response()->json(false);
    }

    public function images(int $articleId)
    {
        $images = Image::query();
        $images->where('articleId', $articleId);

        return response()->json($images->get());
    }

    public function remove(int $articleId)
    {
        $imageId = Input::get('imageId');

        $image = Image::findOrFail($imageId);

        $result = $image->delete();
        if ($result)
            @unlink(public_path(Image::IMAGES_LOCATION . DIRECTORY_SEPARATOR . $image->getFilename()));

        return response()->json($result);
    }

    private function addImage(File $file, int $articleId)
    {
        $image = new Image();

        $image->authorId  = Auth::id();
        $image->articleId = $articleId;
        $image->title     = '';
        $image->filename  = $file->getFilename();
        $image->mime      = $file->getMimeType();
        $image->ext       = $file->getExtension();
        $image->size      = $file->getSize();
        $image->statusId  = Image::ACTIVE_STATUS_ID;

        return $image->save();
    }

    private function validateImages($images, $validationRules)
    {
        $validator = Validator::make($images, $validationRules);
        if ($validator->fails()) {
            return false;
        }
        return true;
    }

    private function getValidationErrors($images, $validationRules)
    {
        $validator = Validator::make($images, $validationRules);
        return $validator->errors()->getMessages();
    }
}