<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class WatchMovieController extends Controller
{
    //

    public function watch($id){

        $media = Media::find($id);
        if (!$media) {
            abort(404, 'Movie not found');
        }

        return view('users.watchMovie', ['movie' => $media]);
    }
}
