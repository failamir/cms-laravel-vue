<?php

namespace Modules\Sitemap\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use bp_post;
use bp_category;

class SitemapController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $post = bp_post::orderBy('updated_at', 'desc')->first();

        return response()->view('sitemap::sitemap.index', [
          'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        $posts = bp_post::get();
        return response()->view('sitemap::sitemap.posts', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = bp_category::all();
        return response()->view('sitemap::sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }
}
