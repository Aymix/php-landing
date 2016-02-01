<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use willvincent\Feeds\Facades\FeedsFacade as Feed;

class HomeController extends Controller
{
    public function index() {
        $feed = Feed::make("https://www.reddit.com/r/ffxiv/new/.rss");

        return view('layout.main', ['feed' => $feed]);
    }

    public function ajaxRSS() {

        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
        foreach($feed->get_items() as $item) {

            echo "<p><strong>".$item->get_title()."</strong></p>";
            echo "<div class='rss-description'>".$item->get_content()."</div>";
        }
        dd($data);

    }
}
