<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    static $portofolio = [
        [
           "title" => 'Portofolio Andri',
           'slug'  => 'portofolio-andri',
           "img"   => '/img/andri.png',
           "name"  => 'Andri Sheva Favian',
           "body"  => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus consectetur adipisci modi numquam. Illo fuga doloribus temporibus sequi! Numquam nobis eaque soluta error sapiente consequuntur molestiae ducimus consequatur autem laborum repellendus adipisci unde nesciunt, tenetur, voluptate asperiores laboriosam maxime officia? Facilis autem exercitationem optio a provident, eos deserunt nobis fugiat.'
        ],
        [
           "title" => 'Portofolio Iqbal',
           'slug'  => 'portofolio-iqbal',
           "img"   => '/img/iqbal.png',
           "name"  => 'Iqbal Baihaqi',
           "body"  => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus consectetur adipisci modi numquam. Illo fuga doloribus temporibus sequi! Numquam nobis eaque soluta error sapiente consequuntur molestiae ducimus consequatur autem laborum repellendus adipisci unde nesciunt, tenetur, voluptate asperiores laboriosam maxime officia? Facilis autem exercitationem optio a provident, eos deserunt nobis fugiat.'
        ]
       ];

public static function all(){
    return collect(self::$portofolio);
}

public static function find($slug){
    $post = static::all();
    return $post->firstWhere('slug', $slug);
}


}