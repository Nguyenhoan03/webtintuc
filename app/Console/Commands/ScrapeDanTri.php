<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GoutteFacade;
use Goutte;
use App\Models\tinchinh;
use App\Models\ldl;
use App\Models\ldl2;
use App\Models\ldl3;
use App\Models\suckhoe;
use App\Models\doisong;
use App\Models\dulich;
use App\Models\tulieu;
use App\Models\phantich;
use App\Models\thoisu;
use App\Models\giaitri;
use App\Models\cuocsongdoday;
use App\Models\tinphu;
use App\Models\kinhdoanh;
use App\Models\khoahoc;
use App\Models\thoitrang;
use App\Models\giaoduc;
use App\Models\giaothong;
use App\Models\laodongvl;
use App\Models\thegioitunhien;
use App\Models\cacmonthethaokhac;
use App\Models\contact;

class ScrapeDanTri extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:dantri';

   

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
   
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $crawler = Goutte::request('GET', 'https://vnexpress.net/the-thao');
        $linkPost = $crawler->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost as $link) {
            self::scrapedata($link);
            print("lấy dữ liệu thành công" ."\n");
        }

        $crawler2 = Goutte::request('GET', 'https://vnexpress.net/giai-tri');
        $linkPost2 = $crawler2->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost2 as $link2) {
            self::scrapedata2($link2);
            print("lấy dữ liệu 2 thành công" ."\n");
        }

        $crawler3 = Goutte::request('GET',  'https://vnexpress.net/the-gioi');
        $linkPost3 = $crawler3->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost3 as $link3) {
            self::scrapedata3($link3);
            print("lấy dữ liệu 3 thành công" ."\n");
        }
        //thời t=giantroi qua khien cho mọi thứ trở nên nhạt nhòa kieepst trước taddaauy có nợ thầm trahs ai bây giờ
    

        $crawler4 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/tu-lieu');
        $linkPost4 = $crawler4->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost4 as $link4) {
            self::scrapedata4($link4);
            print("lấy dữ liệu 4 thành công" ."\n");
        }


        $crawler5 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/phan-tich');
        $linkPost5 = $crawler5->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost5 as $link5) {
            self::scrapedata5($link5);
            print("lấy dữ liệu 5 thành công" ."\n");
        }

        $crawler6 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/cuoc-song-do-day');
        $linkPost6 = $crawler6->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost6 as $link6) {
            self::scrapedata6($link6);
            print("lấy dữ liệu 6 thành công" ."\n");
        }

        $crawler7 = Goutte::request('GET',  'https://vnexpress.net/suc-khoe');
        $linkPost7 = $crawler7->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost7 as $link7) {
            self::scrapedata7($link7);
            print("lấy dữ liệu 7 thành công" ."\n");
        }


        $crawler8 = Goutte::request('GET',  'https://vnexpress.net/doi-song');
        $linkPost8 = $crawler8->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost8 as $link8) {
            self::scrapedata8($link8);
            print("lấy dữ liệu 8 thành công" ."\n");
        }


        $crawler9 = Goutte::request('GET',  'https://vnexpress.net/du-lich');
        $linkPost9 = $crawler9->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost9 as $link9) {
            self::scrapedata9($link9);
            print("lấy dữ liệu 9 thành công" ."\n");
        }

        $crawler10 = Goutte::request('GET',  'https://vnexpress.net/thoi-su');
        $linkPost10 = $crawler10->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost10 as $link10) {
            self::scrapedata10($link10);
            print("lấy dữ liệu 10 thành công" ."\n");
        }


        $crawler11 = Goutte::request('GET',  'https://vnexpress.net/giai-tri');
        $linkPost11 = $crawler11->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost11 as $link11) {
            self::scrapedata11($link11);
            print("lấy dữ liệu 11 thành công" ."\n");
        }
        $crawler12 = Goutte::request('GET',  'https://vnexpress.net/phap-luat');
        $linkPost12 = $crawler12->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost12 as $link12) {
            self::scrapedata12($link12);
            print("lấy dữ liệu 12 thành công" ."\n");
        }

        $crawler13 = Goutte::request('GET',  'https://vnexpress.net/kinh-doanh');
        $linkPost13 = $crawler13->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost13 as $link13) {
            self::scrapedata13($link13);
            print("lấy dữ liệu 13 thành công" ."\n");
        }

        $crawler14 = Goutte::request('GET',  'https://vnexpress.net/khoa-hoc');
        $linkPost14 = $crawler14->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost14 as $link14) {
            self::scrapedata14($link14);
            print("lấy dữ liệu 14 thành công" ."\n");
        }

        $crawler15 = Goutte::request('GET',  'https://vnexpress.net/giai-tri/thoi-trang');
        $linkPost15 = $crawler15->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost15 as $link15) {
            self::scrapedata15($link15);
            print("lấy dữ liệu 15 thành công" ."\n");
        }

        $crawler16 = Goutte::request('GET',  'https://vnexpress.net/giao-duc/giao-duc-40');
        $linkPost16 = $crawler16->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost16 as $link16) {
            self::scrapedata16($link16);
            print("lấy dữ liệu 16 thành công" ."\n");
        }

        $crawler17 = Goutte::request('GET',  'https://vnexpress.net/thoi-su/giao-thong');
        $linkPost17 = $crawler17->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost17 as $link17) {
            self::scrapedata17($link17);
            print("lấy dữ liệu 17 thành công" ."\n");
        }

        $crawler18 = Goutte::request('GET',  'https://vnexpress.net/thoi-su/lao-dong-viec-lam');
        $linkPost18 = $crawler18->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost18 as $link18) {
            self::scrapedata18($link18);
            print("lấy dữ liệu 18 thành công" ."\n");
        }
        

        $crawler19 = Goutte::request('GET',  'https://vnexpress.net/khoa-hoc/the-gioi-tu-nhien');
        $linkPost19 = $crawler19->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost19 as $link19) {
            self::scrapedata19($link19);
            print("lấy dữ liệu 19 thành công" ."\n");
        }

        $crawler20 = Goutte::request('GET',  'https://vnexpress.net/the-thao/cac-mon-khac');
        $linkPost20 = $crawler20->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost20 as $link20) {
            self::scrapedata20($link20);
            print("lấy dữ liệu 20 thành công" ."\n");
        }

        $crawler21 = Goutte::request('GET',  'https://vnexpress.net/suc-khoe');
        $linkPost21 = $crawler21->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost21 as $link21) {
            self::scrapedata21($link21);
            print("lấy dữ liệu 21 thành công" ."\n");
        }

    }







public static function scrapedata($url)
{
    $crawler = Goutte::request('GET', $url);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    ldl::create($dataPost);
}



public static function scrapedata2($url2)
{
    $crawler = Goutte::request('GET', $url2);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    ldl2::create($dataPost);
}


public static function scrapedata3($url3)
{
    $crawler = Goutte::request('GET', $url3);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    ldl3::create($dataPost);
}


//thương cho tấm thân cơ hàn ngậm ngùi lặng nhìn con đò sang nganh


public static function scrapedata4($url4)
{
    $crawler = Goutte::request('GET', $url4);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    tulieu::create($dataPost);
}




public static function scrapedata5($url5)
{
    $crawler = Goutte::request('GET', $url5);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    phantich::create($dataPost);
}



public static function scrapedata6($url6)
{
    $crawler = Goutte::request('GET', $url6);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    cuocsongdoday::create($dataPost);
}



public static function scrapedata7($url7)
{
    $crawler = Goutte::request('GET', $url7);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    suckhoe::create($dataPost);
}



public static function scrapedata8($url8)
{
    $crawler = Goutte::request('GET', $url8);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    doisong::create($dataPost);
}




public static function scrapedata9($url9)
{
    $crawler = Goutte::request('GET', $url9);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    dulich::create($dataPost);
}


public static function scrapedata10($url10)
{
    $crawler = Goutte::request('GET', $url10);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    thoisu::create($dataPost);
}



public static function scrapedata11($url11)
{
    $crawler = Goutte::request('GET', $url11);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    giaitri::create($dataPost);
}

public static function scrapedata12($url12)
{
    $crawler = Goutte::request('GET', $url12);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    tinphu::create($dataPost);

}




public static function scrapedata13($url13)
{
    $crawler = Goutte::request('GET', $url13);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    kinhdoanh::create($dataPost);

}



public static function scrapedata14($url14)
{
    $crawler = Goutte::request('GET', $url14);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    khoahoc::create($dataPost);

}


public static function scrapedata15($url15)
{
    $crawler = Goutte::request('GET', $url15);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    thoitrang::create($dataPost);

}



public static function scrapedata16($url16)
{
    $crawler = Goutte::request('GET', $url16);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    giaoduc::create($dataPost);

}


public static function scrapedata17($url17)
{
    $crawler = Goutte::request('GET', $url17);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    giaothong::create($dataPost);

}

public static function scrapedata18($url18)
{
    $crawler = Goutte::request('GET', $url18);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    laodongvl::create($dataPost);

}

public static function scrapedata19($url19)
{
    $crawler = Goutte::request('GET', $url19);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    thegioitunhien::create($dataPost);

}


public static function scrapedata20($url20)
{
    $crawler = Goutte::request('GET', $url20);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    cacmonthethaokhac::create($dataPost);

}


public static function scrapedata21($url21)
{
    $crawler = Goutte::request('GET', $url21);

    $title = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}
  

    $slug = $crawler->filter('h1.title-detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($slug[0])){
    $slug=$slug[0];
}
else{
    $slug = "";
}
  

    $description = $crawler->filter('p.description')->each(function ($node) {
        return $node->text();
    });

    if(isset($description[0])){
    $description=$description[0];
}
else{
    $description = "";
}
  
  
    
    $content = $crawler->filter('article.fck_detail')->each(function ($node) {
        return $node->text();
    });

    if(isset($content[0])){
    $content=$content[0];
}
else{
    $content = "";
}
  

    $hinhanh1 = $crawler->filter('.fig-picture img')->each(function ($node) {
        return $node->attr("data-src");
    });

if(isset($hinhanh1[0])){
    $hinhanh1=$hinhanh1[0];
}
else{
    $hinhanh1 = "";
}
    

    $dataPost = [
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'hinhanh1' =>$hinhanh1,
       
        'slug' =>$slug,
    ];

    contact::create($dataPost);

}


}







