<?php

namespace App\Models;

use Input;
use Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * upload directory
     */
    const UPLOAD_DIR = "./uploads/";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'price',
        'quantity'
    ];

    /**
     * relationship Product between user
     * @return App\Models\User;
     * */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * relationship Product between Category
     * @return App\Models\Category;
     * */
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * get image url
     * @return string
     */
    public function imageUrl() {
        return 'uploads/' . $this->id . '/' . $this->image;
    }

    public function thumbImage() {
        return 'uploads/' . $this->id . '/thumbs_' . $this->image;
    }
    /**
     * process upload file foto;
     * @param type $param
     */
    public function processImage() {
        $foto = Input::file('image');

        if ($foto) {
            $filename = rand(11111, 99999) . '_' . strtolower($foto->getClientOriginalName());
            $uploaddir = self::UPLOAD_DIR . $this->id;
            $destination = $uploaddir . DIRECTORY_SEPARATOR . $filename;
            $thumb = $uploaddir . DIRECTORY_SEPARATOR . 'thumbs_' . $filename;

            $foto->move($uploaddir, $filename);

            Image::make($destination)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($destination);

            Image::make($destination)->fit(128)->save($thumb);

            return $filename;
        }
    }

}
