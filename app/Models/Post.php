<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'content', 'image'
    ];


    /**
     * Delete post image from Storage
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}