<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    //home page
    public function home(){
        echo "
        <h1>This is our company Home Page</h1>";
    }

    //products page
    function products(){
        echo "
        <h2>This is our products keyword:</h2>
        <br>
        <ul>
            <li><a href='http://localhost:8000/products/games'>games</a></li>
            <li><a href='http://localhost:8000/products/story'>story</a></li>
            <li><a href='http://localhost:8000/products/song'>song</a></li>
        </ul>";
    }

    function games(){
        echo "<h2>Games</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/category/marbel-edu-games'>marbel edu</a></li>
                <li><a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>marbel and friends</a></li>";
    }

    function story(){
        echo "<h2>Story</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/category/riri-story-books-animations'>Riri Story Book</a></li>";
    }

    function song(){
        echo "<h2>Song</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/category/kolak-kids-songs'>Kolak kids</a></li>";
    }


    //news page
    public function news($page){
        if ($page = 0){
            return redirect()->to('https://www.educastudio.com/news');
        }else return redirect()->to('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
            
    }

    //program page
    function program(){
        echo "<h2>This is our program keyword:</h2>
            <ul>w
                <li><a href='http://localhost:8000/program/karir'>karir</a></li>
                <li><a href='http://localhost:8000/program/magang'>magang</a></li>
                <li><a href='http://localhost:8000/program/kunjungan-industri'>kunjungan-industri</a></li>
            </ul>";
    }

    function karir(){
        echo "<h2>Karir</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/program/karir'>karir di sini</a></li>";
    }

    function magang(){
        echo "<h2>Magang</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/program/magang'>magang di sini</a></li>";
    }

    function industri(){
        echo "<h2>Kunjungan Industri</h2>";
        echo "<ul><li><a href='https://www.educastudio.com/program/kunjungan-industri'>kunjungan-industri di sini</a></li>";
    }


    //About page
    function about(){
        return "This is about page";
    }


    //Contact page
    public function index(){
        echo "This is contact page<br>";
        echo "
        <form action='/contact' method='post'>
        <input type='hidden' name='_token' value='nrQOehKU76c26uLcVXbmwELqIN7CVPZis94XB7f1'>
        <input type=submit value='Contact Us'>
        </form>";
    }

    public function store(Request $request){
        echo "<a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
    }
}



