<?php

namespace App\Http\Controllers;
use Goutte;
use App\Models\detail_phobiennhat;
use App\Models\detail_tin1;
use App\Models\detail_tintuc1;
use App\Models\detail_tintuc2;
use App\Models\detail_xuhuong;
use App\Models\comment;
use App\Models\commentchung;
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
use Mail;
use DB;
use Illuminate\Support\Facades\Cache;
use App\Models\commentxuhuong;
use App\Models\commenttintuc1;
use App\Models\commenttintuc2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class homecontroller extends Controller
{
public function destroy(){

    $xtulieu = DB::table('tulieu')->min('id');
    $xphantich = DB::table('phantich')->min('id');
    $xcuocsongdoday = DB::table('cuocsongdoday')->min('id');
    $xthoisu = DB::table('thoisu')->min('id');

    $xgiaitri = DB::table('giaitri')->min('id');

    $xsuckhoe = DB::table('suckhoe')->min('id');
    $xdoisong = DB::table('doisong')->min('id');
    $xdulich = DB::table('dulich')->min('id');
    $xldl = DB::table('ldl')->min('id');
    $xldl2 = DB::table('ldl2')->min('id');
    $xldl3 = DB::table('ldl3')->min('id');
    $tinphu = DB::table('tinphu')->min('id');


    $xkinhdoanh = DB::table('kinhdoanh')->min('id');
    $xkhoahoc = DB::table('khoahoc')->min('id');
    $xthoitrang = DB::table('thoitrang')->min('id');
    $xgiaoduc = DB::table('giaoduc')->min('id');
    $xgiaothong = DB::table('giaothong')->min('id');
    $xlaodongvieclam = DB::table('laodongvl')->min('id');
    $xthegioitunhien = DB::table('thegioitunhien')->min('id');
    $xcacmonthethaokhac = DB::table('cacmonthethaokhac')->min('id');

    

    for ($i = 0; $i < 50; $i++) {
    

        $tulieu = tulieu::where('id',$i+$xtulieu)->delete();
        $phantich = phantich::where('id',$i+$xphantich)->delete();
        $cuocsongdoday = cuocsongdoday::where('id',$i+$xcuocsongdoday)->delete();
        $thoisu = thoisu::where('id',$i+$xthoisu)->delete();

        $giaitri = giaitri::where('id',$i+$xgiaitri)->delete();

        $suckhoe = suckhoe::where('id',$i+$xsuckhoe)->delete();
        $doisong = doisong::where('id',$i+$xdoisong)->delete();
        $dulich = dulich::where('id',$i+$xdulich)->delete();
        $ldl = ldl::where('id',$i+$xldl)->delete();
        $ldl2 = ldl2::where('id',$i+$xldl2)->delete();
        $ldl3 = ldl3::where('id',$i+$xldl3)->delete();
        $tinphu = tinphu::where('id',$i+$tinphu)->delete();

        $kinhdoanh = tinphu::where('id',$i+$xkinhdoanh)->delete();
        $khoahoc = tinphu::where('id',$i+$xkhoahoc)->delete();
        $thoitrang = tinphu::where('id',$i+$xthoitrang)->delete();
        $giaoduc = tinphu::where('id',$i+$xgiaoduc)->delete();
        $giaothong = tinphu::where('id',$i+$xgiaothong)->delete();
        $laodongvieclam = tinphu::where('id',$i+$xlaodongvieclam)->delete();
        $thegioitunhien = tinphu::where('id',$i+$xthegioitunhien)->delete();
        $cacmonthethaokhac = tinphu::where('id',$i+$xcacmonthethaokhac)->delete();
       }
  

   
}


  public function tulieu(){
    $tulieu = tulieu::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('world.tulieu',compact('tulieu','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }


  public function phantich(){
    $phantich = phantich::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('world.phantich',compact('phantich','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  
  public function cuocsongdoday(){
    $cuocsongdoday = cuocsongdoday::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('world.cuocsongdoday',compact('cuocsongdoday','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }


  //ldfgnkldfgzd

  public function thoisu(){
    $thoisu = thoisu::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('thoisu',compact('thoisu','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function giaitri(){
    $giaitri = giaitri::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('giaitri',compact('giaitri','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }


  //

  public function contact(){
    $contact = contact::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('contact',compact('contact','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function suckhoe(){
    $suckhoe = suckhoe::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('community.suckhoe',compact('suckhoe','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }


  public function doisong(){
    $doisong = doisong::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('community.doisong',compact('doisong','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  
  public function dulich(){
    $dulich = dulich::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('community.dulich',compact('dulich','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function kinhdoanh(){
    $kinhdoanh = kinhdoanh::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('kinhdoanh',compact('kinhdoanh','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function khoahoc(){
    $khoahoc = khoahoc::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('khoahoc',compact('khoahoc','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function thoitrang(){
    $thoitrang = thoitrang::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('thoitrang',compact('thoitrang','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function giaoduc(){
    $giaoduc = giaoduc::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('giaoduc',compact('giaoduc','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function giaothong(){
    $giaothong = giaothong::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('giaothong',compact('giaothong','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function laodongvieclam(){
    $laodongvieclam = laodongvl::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('laodongvl',compact('laodongvieclam','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function thegioitunhien(){
    $thegioitunhien = thegioitunhien::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('thegioitunhien',compact('thegioitunhien','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }

  public function cacmonthethaokhac(){
    $cacmonthethaokhac = cacmonthethaokhac::orderBy('id','DESC')->paginate(20);
    $phobiennhat = detail_phobiennhat::orderBy('id','DESC')->get();


    return view('cacmonthethaokhac',compact('cacmonthethaokhac','phobiennhat'))->with('i', (request()->input('page', 1) -1) *10);
  }



    public function crawler(){
        $crawler = Goutte::request('GET', 'https://vnexpress.net/the-thao');
        $linkPost = $crawler->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost as $link) {
            self::scrapedata($link);
            print("l&#7845;y d&#7919; li&#7879;u th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler2 = Goutte::request('GET', 'https://vnexpress.net/giai-tri');
        $linkPost2 = $crawler2->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost2 as $link2) {
            self::scrapedata2($link2);
            print("l&#7845;y d&#7919; li&#7879;u 2 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler3 = Goutte::request('GET',  'https://vnexpress.net/the-gioi');
        $linkPost3 = $crawler3->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost3 as $link3) {
            self::scrapedata3($link3);
            print("l&#7845;y d&#7919; li&#7879;u 3 th&#1072;nh c&#1092;ng" ."\n");
        }
        //th&#7901;i t=giantroi qua khien cho m&#7885;i th&#7913; tr&#7903; n&#1082;n nh&#7841;t nh&#1090;a kieepst tr&#432;&#7899;c taddaauy c&#1091; n&#7907; th&#7847;m trahs ai b&#1074;y gi&#7901;
    

        $crawler4 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/tu-lieu');
        $linkPost4 = $crawler4->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost4 as $link4) {
            self::scrapedata4($link4);
            print("l&#7845;y d&#7919; li&#7879;u 4 th&#1072;nh c&#1092;ng" ."\n");
        }


        $crawler5 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/phan-tich');
        $linkPost5 = $crawler5->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost5 as $link5) {
            self::scrapedata5($link5);
            print("l&#7845;y d&#7919; li&#7879;u 5 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler6 = Goutte::request('GET',  'https://vnexpress.net/the-gioi/cuoc-song-do-day');
        $linkPost6 = $crawler6->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost6 as $link6) {
            self::scrapedata6($link6);
            print("l&#7845;y d&#7919; li&#7879;u 6 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler7 = Goutte::request('GET',  'https://vnexpress.net/suc-khoe');
        $linkPost7 = $crawler7->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost7 as $link7) {
            self::scrapedata7($link7);
            print("l&#7845;y d&#7919; li&#7879;u 7 th&#1072;nh c&#1092;ng" ."\n");
        }


        $crawler8 = Goutte::request('GET',  'https://vnexpress.net/doi-song');
        $linkPost8 = $crawler8->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost8 as $link8) {
            self::scrapedata8($link8);
            print("l&#7845;y d&#7919; li&#7879;u 8 th&#1072;nh c&#1092;ng" ."\n");
        }


        $crawler9 = Goutte::request('GET',  'https://vnexpress.net/du-lich');
        $linkPost9 = $crawler9->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost9 as $link9) {
            self::scrapedata9($link9);
            print("l&#7845;y d&#7919; li&#7879;u 9 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler10 = Goutte::request('GET',  'https://vnexpress.net/thoi-su');
        $linkPost10 = $crawler10->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost10 as $link10) {
            self::scrapedata10($link10);
            print("l&#7845;y d&#7919; li&#7879;u 10 th&#1072;nh c&#1092;ng" ."\n");
        }


        $crawler11 = Goutte::request('GET',  'https://vnexpress.net/giai-tri');
        $linkPost11 = $crawler11->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost11 as $link11) {
            self::scrapedata11($link11);
            print("l&#7845;y d&#7919; li&#7879;u 11 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler12 = Goutte::request('GET',  'https://vnexpress.net/phap-luat');
        $linkPost12 = $crawler12->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost12 as $link12) {
            self::scrapedata12($link12);
            print("l&#7845;y d&#7919; li&#7879;u 12 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler13 = Goutte::request('GET',  'https://vnexpress.net/kinh-doanh');
        $linkPost13 = $crawler13->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost13 as $link13) {
            self::scrapedata13($link13);
            print("l&#7845;y d&#7919; li&#7879;u 13 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler14 = Goutte::request('GET',  'https://vnexpress.net/khoa-hoc');
        $linkPost14 = $crawler14->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost14 as $link14) {
            self::scrapedata14($link14);
            print("l&#7845;y d&#7919; li&#7879;u 14 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler15 = Goutte::request('GET',  'https://vnexpress.net/giai-tri/thoi-trang');
        $linkPost15 = $crawler15->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost15 as $link15) {
            self::scrapedata15($link15);
            print("l&#7845;y d&#7919; li&#7879;u 15 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler16 = Goutte::request('GET',  'https://vnexpress.net/giao-duc/giao-duc-40');
        $linkPost16 = $crawler16->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost16 as $link16) {
            self::scrapedata16($link16);
            print("l&#7845;y d&#7919; li&#7879;u 16 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler17 = Goutte::request('GET',  'https://vnexpress.net/thoi-su/giao-thong');
        $linkPost17 = $crawler17->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost17 as $link17) {
            self::scrapedata17($link17);
            print("l&#7845;y d&#7919; li&#7879;u 17 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler18 = Goutte::request('GET',  'https://vnexpress.net/thoi-su/lao-dong-viec-lam');
        $linkPost18 = $crawler18->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost18 as $link18) {
            self::scrapedata18($link18);
            print("l&#7845;y d&#7919; li&#7879;u 18 th&#1072;nh c&#1092;ng" ."\n");
        }
        

        $crawler19 = Goutte::request('GET',  'https://vnexpress.net/khoa-hoc/the-gioi-tu-nhien');
        $linkPost19 = $crawler19->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost19 as $link19) {
            self::scrapedata19($link19);
            print("l&#7845;y d&#7919; li&#7879;u 19 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler20 = Goutte::request('GET',  'https://vnexpress.net/the-thao/cac-mon-khac');
        $linkPost20 = $crawler20->filter('h2.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost20 as $link20) {
            self::scrapedata20($link20);
            print("l&#7845;y d&#7919; li&#7879;u 20 th&#1072;nh c&#1092;ng" ."\n");
        }

        $crawler21 = Goutte::request('GET',  'https://vnexpress.net/suc-khoe');
        $linkPost21 = $crawler21->filter('h3.title-news a')->each(function ($node) {
            return $node->attr("href");
        });
        foreach ($linkPost21 as $link21) {
            self::scrapedata21($link21);
            print("l&#7845;y d&#7919; li&#7879;u 21 th&#1072;nh c&#1092;ng" ."\n");
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

   
  

    $hinhanh1 = $crawler->filter('article.fck_detail img')->each(function ($node) {
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


//th&#432;&#417;ng cho t&#7845;m th&#1074;n c&#417; h&#1072;n ng&#7853;m ng&#1097;i l&#7863;ng nh&#1084;n con &#273;&#1090; sang nganh


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


//lkasjflkhfahg

    public function index(){

        

        $ldl = Cache::remember('laydulieu',30,function (){
            return DB::table('ldl')->orderBy('id','DESC')->paginate(10);
        });
        $ldl2 = Cache::remember('laydulieu2',30,function (){
            return DB::table('ldl2')->orderBy('id','DESC')->paginate(10);
        });
        $ldl3 = Cache::remember('laydulieu3',30,function (){
            return DB::table('ldl3')->orderBy('id','DESC')->paginate(10);
        });
//dgzdfg
        $tin1 = Cache::remember('detail_tin1',30,function (){
            return DB::table('detail_tin1')->orderBy('id','DESC')->get();
        });

        $tintuc1 = Cache::remember('detail_tintuc1',30,function (){
            return DB::table('detail_tintuc1')->orderBy('id','DESC')->get();
        });

        $xuhuong = Cache::remember('detail_xuhuong',30,function (){
            return DB::table('detail_xuhuong')->orderBy('id','DESC')->get();
        });

        $tintuc2 = Cache::remember('detail_tintuc2',30,function (){
            return DB::table('detail_tintuc2')->orderBy('id','DESC')->get();
        });

        $phobiennhat = Cache::remember('detail_phobiennhat',30,function (){
            return DB::table('detail_phobiennhat')->orderBy('id','DESC')->get();
        });

        //dzfgzdg

        $price = DB::table('thoisu')->max('id');
        $tinph = DB::table('tinphu')->max('id');
        $mintinph = $tinph-3;
      
         $tinphu = tinphu::whereBetween('id',[$mintinph,$tinph])->get();
     

       
       
        $tinchinh = thoisu::where('id',$price)->first();
      
    return view('index',compact('tin1','tintuc1','xuhuong','tintuc2','phobiennhat','ldl','ldl2','ldl3','tinchinh','tinphu'))->with('i', (request()->input('page', 1) -1) *10);
    }




public function tinph($slug,$id){
    $detail_tinphu_ldl = tinphu::where('id',$id)->first();
    $detail_xh = ldl::orderBy('id','DESC')->get();
    
      $detail_tintuc1 = detail_tintuc1::where('id',$id)->first();
      $comment_tinphu = comment::where('com_product', $id)->get();
      return view('tinphu',compact('detail_tintuc1','detail_xh','comment_tinphu','detail_tinphu_ldl'));
}

public function tinchinh($slug){
    $price = DB::table('thoisu')->max('id');
    $tinchinh = thoisu::where('id',$price)->first();
    $detail_xh = ldl2::orderBy('id','DESC')->get();
  
    return view('tinchinh',compact('tinchinh','detail_xh'));
}

public function detail_thoisu($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_thoisu = thoisu::where('id',$id)->first();
      

      $comment_tintuc2 = commentchung::where('commentthoisu', $id)->get();
      return view('detailthoisu',compact('detail_thoisu','detail_xh','comment_tintuc2'));
  }

  public function detail_giaitri($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_giaitri = giaitri::where('id',$id)->first();
      
      $comment_tintuc2 = commentchung::where('commentgiaitri', $id)->get();
      return view('detailgiaitri',compact('detail_giaitri','detail_xh','comment_tintuc2'));
  }

//

public function detail_contact($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_contact = contact::where('id',$id)->first();
      
      $comment_tintuc2 = commentchung::where('commentcontact', $id)->get();
      return view('detail_contact',compact('detail_contact','detail_xh','comment_tintuc2'));
  }

public function detail_tulieu($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_tulieu = tulieu::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commenttulieu', $id)->get();
    return view('detailworld.detailtulieu',compact('detail_tulieu','detail_xh','comment_tintuc2'));
}


public function detail_phantich($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_phantich = phantich::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commentphantich', $id)->get();
    return view('detailworld.detailphantich',compact('detail_phantich','detail_xh','comment_tintuc2'));
}


public function detail_cuocsongdoday($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_cuocsongdoday = cuocsongdoday::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commentcuocsongdoday', $id)->get();
    return view('detailworld.detailcuocsongdoday',compact('detail_cuocsongdoday','detail_xh','comment_tintuc2'));
}
//s&#273;zgd
public function detail_suckhoe($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_suckhoe = suckhoe::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commentsuckhoe', $id)->get();
    return view('detailcommunity.detailsuckhoe',compact('detail_suckhoe','detail_xh','comment_tintuc2'));
}
public function detail_doisong($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_doisong = doisong::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commentdoisong', $id)->get();
    return view('detailcommunity.detaildoisong',compact('detail_doisong','detail_xh','comment_tintuc2'));
}
public function detail_dulich($slug,$id){
  $detail_xh = ldl2::orderBy('id','DESC')->get();
   
    $detail_dulich = dulich::where('id',$id)->first();
    
    $comment_tintuc2 = commentchung::where('commentdulich', $id)->get();
    return view('detailcommunity.detaildulich',compact('detail_dulich','detail_xh','comment_tintuc2'));
}
//


    public function detail_tin1($slug,$id){
      $detail_tintuc1 = detail_tintuc1::orderBy('id','DESC')->get();
        $detail_tin1 = detail_tin1::where('id',$id)->first();
        $comment_tin1 = comment::where('com_product', $id)->get();

   
       
        return view('detail_tin1',compact('detail_tin1','comment_tin1','detail_tintuc1'));
    }

    public function detail_tintuc1($slug,$id){
      $detail_tintuc1_ldl = ldl2::where('id',$id)->first();
      $detail_xh = ldl3::orderBy('id','DESC')->get();
        $detail_tintuc1 = detail_tintuc1::where('id',$id)->first();
        $comment_tintuc1 = commenttintuc1::where('com_product_tintuc1', $id)->get();
        return view('detail_tintuc1',compact('detail_tintuc1','detail_xh','comment_tintuc1','detail_tintuc1_ldl'));
    }

    public function detail_tintuc2($slug,$id){
      $detail_xh = ldl3::orderBy('id','DESC')->get();
        $detail_tintuc2 = detail_tintuc2::where('id',$id)->first();
        $detail_tintuc2_ldl = ldl::where('id',$id)->first();
        $comment_tintuc2 = commenttintuc2::where('com_product_tintuc2', $id)->get();
        return view('detail_tintuc2',compact('detail_tintuc2','detail_xh','comment_tintuc2','detail_tintuc2_ldl'));
    }

    public function detail_phobiennhat($id){
      $detail_phobiennhat = detail_phobiennhat::where('id',$id)->first();
      $detail_xh = ldl2::all();
      return view('detail_phobiennhat',compact('detail_phobiennhat','detail_xh'));
  }

  public function detail_xuhuong($slug,$id){
    $detail_xuhuong_ldl = ldl3::where('id',$id)->first();
    $detail_tt1 = ldl2::orderBy('id','DESC')->get();
      $detail_xuhuong = detail_xuhuong::where('id',$id)->first();
      $comment_xuhuong = commentxuhuong::where('com_product_xuhuong', $id)->get();
      return view('detail_xuhuong',compact('detail_xuhuong','detail_tt1','comment_xuhuong','detail_xuhuong_ldl'));
  }
//jjkjjhhbj

public function detail_cacmonthethaokhac($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_cacmonthethaokhac = cacmonthethaokhac::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentcacmonkhac', $id)->get();
      return view('detail_cacmonthethaokhac',compact('detail_cacmonthethaokhac','detail_xh','comment_tintuc2'));
  }

  public function detail_giaoduc($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_giaoduc = giaoduc::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentgiaoduc', $id)->get();
      return view('detail_giaoduc',compact('detail_giaoduc','detail_xh','comment_tintuc2'));
  }

  public function detail_giaothong($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_giaothong = giaothong::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentgiaothong', $id)->get();
      return view('detail_giaothong',compact('detail_giaothong','detail_xh','comment_tintuc2'));
  }

  public function detail_khoahoc($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_khoahoc = khoahoc::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentkhoahoc', $id)->get();
      return view('detail_khoahoc',compact('detail_khoahoc','detail_xh','comment_tintuc2'));
  }

  public function detail_kinhdoanh($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_kinhdoanh = kinhdoanh::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentkinhdoanh', $id)->get();
      return view('detail_kinhdoanh',compact('detail_kinhdoanh','detail_xh','comment_tintuc2'));
  }

  public function detail_laodongvieclam($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_laodongvieclam = laodongvl::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentlaodongvieclam', $id)->get();
      return view('detail_laodongvl',compact('detail_laodongvieclam','detail_xh','comment_tintuc2'));
  }

  public function detail_thegioitunhien($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_thegioitunhien = thegioitunhien::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentthegioitunhien', $id)->get();
      return view('detail_thegioitunhien',compact('detail_thegioitunhien','detail_xh','comment_tintuc2'));
  }

  public function detail_thoitrang($slug,$id){
    $detail_xh = ldl2::orderBy('id','DESC')->get();
     
      $detail_thoitrang = thoitrang::where('id',$id)->first();
      $comment_tintuc2 = commentchung::where('commentthoitrang', $id)->get();
      return view('detail_thoitrang',compact('detail_thoitrang','detail_xh','comment_tintuc2'));
  }

//jhhhjh




public function trangchuadmin(){
  return view('admin.trangchuadmin');
}



public function posttrangchuadmin(Request $res){


  $username = $res->input('username');
  $password = $res->input('password');
 



  if (Auth::attempt(['name' => $username, 'password' => $password])) {
      return redirect()->to('/themtin1');
  }

  echo "ko thanh cong";
  
}

public function themtin1(){
  $ttin1 = detail_tin1::all();
  return view('admin.admintts',compact('ttin1'));
}
public function postthemtin1(Request $res){
  $themtin1 =new detail_tin1();

  $themtin1->noidungchinh = $res['noidungchinh'];
  $themtin1->slug = $res['slug'];
  $themtin1->noidung1 = $res['noidung1'];
  $themtin1->hinhanh1 = $res['hinhanh1'];
  $themtin1->noidung2 = $res['noidung2'];
  $themtin1->hinhanh2 = $res['hinhanh2'];
  $themtin1->noidung3 = $res['noidung3'];
  $themtin1->hinhanh3 = $res['hinhanh3'];
  $themtin1->noidung4 = $res['noidung4'];
  $themtin1->hinhanh4 = $res['hinhanh4'];
  $themtin1->noidung5 = $res['noidung5'];
  $themtin1->hinhanh5 = $res['hinhanh5'];
  $themtin1->noidung6 = $res['noidung6'];
  $themtin1->hinhanh6 = $res['hinhanh6'];

   if($res->has('hinhanh1')){
  $file1 = $res->hinhanh1;
 $file_name1= $file1->getClientOriginalName();
 $file1->move(base_path('public/upload'),$file_name1);
   }else{
    $file_name1 = " ";
 }

 


   if($res->has('hinhanh2')){ 
      $file2 = $res->hinhanh2;
     $file_name2= $file2->getClientOriginalName();
     $file2->move(base_path('public/upload'),$file_name2);
       }else{
          $file_name2 = " ";
       }
      
       if($res->has('hinhanh3')){ 
          $file3 = $res->hinhanh3;
         $file_name3= $file3->getClientOriginalName();
         $file3->move(base_path('public/upload'),$file_name3);
           }
           else{
            $file_name3 = " ";
         }
        



           if($res->has('hinhanh4')){ 
              $file4 = $res->hinhanh4;
             $file_name4= $file4->getClientOriginalName();
             $file4->move(base_path('public/upload'),$file_name4);
               }
               else{
                $file_name4 = " ";
             }
            


               if($res->has('hinhanh5')){ 
                  $file5 = $res->hinhanh5;
                 $file_name5= $file5->getClientOriginalName();
                 $file5->move(base_path('public/upload'),$file_name5);
                   }
                   else{
                    $file_name5 = " ";
                 }
                



                   if($res->has('hinhanh6')){ 
                      $file6 = $res->hinhanh6;
                     $file_name6= $file6->getClientOriginalName();
                     $file6->move(base_path('public/upload'),$file_name6);
                       }
                       else{
                        $file_name6 = " ";
                     }



                  

   $themtin1->hinhanh1 = $file_name1;
   $themtin1->hinhanh2 = $file_name2;
   $themtin1->hinhanh3 = $file_name3;
   $themtin1->hinhanh4 = $file_name4;
   $themtin1->hinhanh5 = $file_name5;
   $themtin1->hinhanh6 = $file_name6;

  $themtin1->save();
  return redirect()->to('/themtin1');
}


public function themxuhuong(){
  $txh = detail_xuhuong::all();
  return view('admin.adminxuhuong',compact('txh'));
}
public function postthemxuhuong(Request $res){
  $themxuhuong =new detail_xuhuong();

  $themxuhuong->noidungchinh = $res['noidungchinh'];
  $themxuhuong->slug = $res['slug'];
  $themxuhuong->tacgia = $res['tacgia'];
  $themxuhuong->noidung1 = $res['noidung1'];
  $themxuhuong->hinhanh1 = $res['hinhanh1'];
  $themxuhuong->noidung2 = $res['noidung2'];
  $themxuhuong->hinhanh2 = $res['hinhanh2'];
  $themxuhuong->noidung3 = $res['noidung3'];
  $themxuhuong->hinhanh3 = $res['hinhanh3'];
  $themxuhuong->noidung4 = $res['noidung4'];
  $themxuhuong->hinhanh4 = $res['hinhanh4'];
  $themxuhuong->noidung5 = $res['noidung5'];
  $themxuhuong->hinhanh5 = $res['hinhanh5'];
  $themxuhuong->noidung6 = $res['noidung6'];
  $themxuhuong->hinhanh6 = $res['hinhanh6'];




 
  if($res->has('hinhanh1')){
    $file1 = $res->hinhanh1;
   $file_name1= $file1->getClientOriginalName();
   $file1->move(base_path('public/upload'),$file_name1);
     }else{
      $file_name1 = " ";
   }

  


     if($res->has('hinhanh2')){ 
        $file2 = $res->hinhanh2;
       $file_name2= $file2->getClientOriginalName();
       $file2->move(base_path('public/upload'),$file_name2);
         }else{
            $file_name2 = " ";
         }
        



         if($res->has('hinhanh3')){ 
            $file3 = $res->hinhanh3;
           $file_name3= $file3->getClientOriginalName();
           $file3->move(base_path('public/upload'),$file_name3);
             }
             else{
              $file_name3 = " ";
           }
          


             if($res->has('hinhanh4')){ 
                $file4 = $res->hinhanh4;
               $file_name4= $file4->getClientOriginalName();
               $file4->move(base_path('public/upload'),$file_name4);
                 }
                 else{
                  $file_name4 = " ";
               }
            


                 if($res->has('hinhanh5')){ 
                    $file5 = $res->hinhanh5;
                   $file_name5= $file5->getClientOriginalName();
                   $file5->move(base_path('public/upload'),$file_name5);
                     }
                     else{
                      $file_name5 = " ";
                   }
                




                     if($res->has('hinhanh6')){ 
                        $file6 = $res->hinhanh6;
                       $file_name6= $file6->getClientOriginalName();
                       $file6->move(base_path('public/upload'),$file_name6);
                         }
                         else{
                          $file_name6 = " ";
                       }


                          
       $themxuhuong->hinhanh1 = $file_name1;
       $themxuhuong->hinhanh2 = $file_name2;
       $themxuhuong->hinhanh3 = $file_name3;
       $themxuhuong->hinhanh4 = $file_name4;
       $themxuhuong->hinhanh5 = $file_name5;
       $themxuhuong->hinhanh6 = $file_name6;






  $themxuhuong->save();
  return redirect()->to('/themxuhuong');
}


public function themtintuc1(){
$tt1 = detail_tintuc1::all();
  return view('admin.admintintuc1',compact('tt1'));
}
public function postthemtintuc1(Request $res){
  $themtintuc1 =new detail_tintuc1();
  $themtintuc1->hinhanh = $res['hinhanh'];
  $themtintuc1->noidungchinh = $res['noidungchinh'];
  $themtintuc1->slug = $res['slug'];
  $themtintuc1->noidung1 = $res['noidung1'];
  $themtintuc1->hinhanh1 = $res['hinhanh1'];
  $themtintuc1->noidung2 = $res['noidung2'];
  $themtintuc1->hinhanh2 = $res['hinhanh2'];
  $themtintuc1->noidung3 = $res['noidung3'];
  $themtintuc1->hinhanh3 = $res['hinhanh3'];
  $themtintuc1->noidung4 = $res['noidung4'];
  $themtintuc1->hinhanh4 = $res['hinhanh4'];
  $themtintuc1->noidung5 = $res['noidung5'];
  $themtintuc1->hinhanh5 = $res['hinhanh5'];
  $themtintuc1->noidung6 = $res['noidung6'];
  $themtintuc1->hinhanh6 = $res['hinhanh6'];


  if($res->has('hinhanh')){ 
      $file = $res->hinhanh;
     $file_name= $file->getClientOriginalName();
     $file->move(base_path('public/upload'),$file_name);
       }
       else{
          $file_name = " ";
       }



  if($res->has('hinhanh1')){ 
      $file1 = $res->hinhanh1;
     $file_name1= $file1->getClientOriginalName();
     $file1->move(base_path('public/upload'),$file_name1);
       }
       else{
        $file_name1 = " ";
     }


       if($res->has('hinhanh2')){ 
          $file2 = $res->hinhanh2;
         $file_name2= $file2->getClientOriginalName();
         $file2->move(base_path('public/upload'),$file_name2);
           } else{
            $file_name2 = " ";
         }
           if($res->has('hinhanh3')){ 
              $file3 = $res->hinhanh3;
             $file_name3= $file3->getClientOriginalName();
             $file3->move(base_path('public/upload'),$file_name3);
               }
               else{
                $file_name3 = " ";
             }
               if($res->has('hinhanh4')){ 
                  $file4 = $res->hinhanh4;
                 $file_name4= $file4->getClientOriginalName();
                 $file4->move(base_path('public/upload'),$file_name4);
                   }
                   else{
                    $file_name4 = " ";
                 }
                   if($res->has('hinhanh5')){ 
                      $file5 = $res->hinhanh5;
                     $file_name5= $file5->getClientOriginalName();
                     $file5->move(base_path('public/upload'),$file_name5);
                       } else{
                        $file_name5 = " ";
                     }
                       if($res->has('hinhanh6')){ 
                          $file6 = $res->hinhanh6;
                         $file_name6= $file6->getClientOriginalName();
                         $file6->move(base_path('public/upload'),$file_name6);
                           }
                           else{
                            $file_name6 = " ";
                         }
                        
                     


                
       $themtintuc1->hinhanh = $file_name;
       $themtintuc1->hinhanh1 = $file_name1;
       $themtintuc1->hinhanh2 = $file_name2;
       $themtintuc1->hinhanh3 = $file_name3;
       $themtintuc1->hinhanh4 = $file_name4;
       $themtintuc1->hinhanh5 = $file_name5;
       $themtintuc1->hinhanh6 = $file_name6;




  $themtintuc1->save();
  return redirect()->to('/themtintuc1');
}


public function themtintuc2(){
$tt2 = detail_tintuc2::all();
  return view('admin.admintintuc2',compact('tt2'));
}
public function postthemtintuc2(Request $res){
  $themtintuc2 =new detail_tintuc2();
  $themtintuc2->hinhanh = $res['hinhanh'];
  $themtintuc2->noidungphu = $res['noidungphu'];
  $themtintuc2->tacgia = $res['tacgia'];
  $themtintuc2->noidungchinh = $res['noidungchinh'];
  $themtintuc2->slug = $res['slug'];
  $themtintuc2->noidung1 = $res['noidung1'];
  $themtintuc2->hinhanh1 = $res['hinhanh1'];
  $themtintuc2->noidung2 = $res['noidung2'];
  $themtintuc2->hinhanh2 = $res['hinhanh2'];
  $themtintuc2->noidung3 = $res['noidung3'];
  $themtintuc2->hinhanh3 = $res['hinhanh3'];
  $themtintuc2->noidung4 = $res['noidung4'];
  $themtintuc2->hinhanh4 = $res['hinhanh4'];
  $themtintuc2->noidung5 = $res['noidung5'];
  $themtintuc2->hinhanh5 = $res['hinhanh5'];
  $themtintuc2->noidung6 = $res['noidung6'];
  $themtintuc2->hinhanh6 = $res['hinhanh6'];



  if($res->has('hinhanh')){ 
      $file = $res->hinhanh;
     $file_name= $file->getClientOriginalName();
     $file->move(base_path('public/upload'),$file_name);
       } else{
        $file_name = " ";
     }

  if($res->has('hinhanh1')){ 
      $file1 = $res->hinhanh1;
     $file_name1= $file1->getClientOriginalName();
     $file1->move(base_path('public/upload'),$file_name1);
       } else{
        $file_name1 = " ";
     }
       if($res->has('hinhanh2')){ 
          $file2 = $res->hinhanh2;
         $file_name2= $file2->getClientOriginalName();
         $file2->move(base_path('public/upload'),$file_name2);
           } else{
            $file_name2 = " ";
         }
           if($res->has('hinhanh3')){ 
              $file3 = $res->hinhanh3;
             $file_name3= $file3->getClientOriginalName();
             $file3->move(base_path('public/upload'),$file_name3);
               } else{
                $file_name3 = " ";
             }
               if($res->has('hinhanh4')){ 
                  $file4 = $res->hinhanh4;
                 $file_name4= $file4->getClientOriginalName();
                 $file4->move(base_path('public/upload'),$file_name4);
                   } else{
                    $file_name4 = " ";
                 }
                   if($res->has('hinhanh5')){ 
                      $file5 = $res->hinhanh5;
                     $file_name5= $file5->getClientOriginalName();
                     $file5->move(base_path('public/upload'),$file_name5);
                       } else{
                        $file_name5 = " ";
                     }
                       if($res->has('hinhanh6')){ 
                          $file6 = $res->hinhanh6;
                         $file_name6= $file6->getClientOriginalName();
                         $file6->move(base_path('public/upload'),$file_name6);
                           } else{
                            $file_name6 = " ";
                         }

                     
       $themtintuc2->hinhanh = $file_name;
       $themtintuc2->hinhanh1 = $file_name1;
       $themtintuc2->hinhanh2 = $file_name2;
       $themtintuc2->hinhanh3 = $file_name3;
       $themtintuc2->hinhanh4 = $file_name4;
       $themtintuc2->hinhanh5 = $file_name5;
       $themtintuc2->hinhanh6 = $file_name6;






  $themtintuc2->save();
  return redirect()->to('/themtintuc2');
}

public function getsuatin1($id){
$suatin1 = detail_tin1::find($id);
return view('admin.suatin1',compact('suatin1'));
}

public function postsuatin1(Request $res,$id){
   

$themtin1 =detail_tin1::find($id);

$themtin1->noidungchinh = $res['noidungchinh'];
$themtin1->slug = $res['slug'];
$themtin1->noidung1 = $res['noidung1'];
$themtin1->hinhanh1 = $res['hinhanh1'];
$themtin1->noidung2 = $res['noidung2'];
$themtin1->hinhanh2 = $res['hinhanh2'];
$themtin1->noidung3 = $res['noidung3'];
$themtin1->hinhanh3 = $res['hinhanh3'];
$themtin1->noidung4 = $res['noidung4'];
$themtin1->hinhanh4 = $res['hinhanh4'];
$themtin1->noidung5 = $res['noidung5'];
$themtin1->hinhanh5 = $res['hinhanh5'];
$themtin1->noidung6 = $res['noidung6'];
$themtin1->hinhanh6 = $res['hinhanh6'];

$themtin1->save();
return redirect()->to('/themtin1');
}

public function xoatin1($id){
$xoatin1 = detail_tin1::find($id);

$xoatin1->delete();
return redirect()->back();
}









public function getsuaxuhuong($id){
$suaxuhuong = detail_xuhuong::find($id);
return view('admin.suaxuhuong',compact('suaxuhuong'));
}

public function postsuaxuhuong(Request $res,$id){
   

$themtin1 =detail_xuhuong::find($id);

$themtin1->noidungchinh = $res['noidungchinh'];
$themtin1->slug = $res['slug'];
$themtin1->tacgia = $res['tacgia'];
$themtin1->noidung1 = $res['noidung1'];
$themtin1->hinhanh1 = $res['hinhanh1'];
$themtin1->noidung2 = $res['noidung2'];
$themtin1->hinhanh2 = $res['hinhanh2'];
$themtin1->noidung3 = $res['noidung3'];
$themtin1->hinhanh3 = $res['hinhanh3'];
$themtin1->noidung4 = $res['noidung4'];
$themtin1->hinhanh4 = $res['hinhanh4'];
$themtin1->noidung5 = $res['noidung5'];
$themtin1->hinhanh5 = $res['hinhanh5'];
$themtin1->noidung6 = $res['noidung6'];
$themtin1->hinhanh6 = $res['hinhanh6'];

$themtin1->save();
return redirect()->back();
}

public function xoaxuhuong($id){
$xoatin1 = detail_xuhuong::find($id);

$xoatin1->delete();
return redirect()->back();
}







public function getsuatintuc1($id){
$suatintuc1 = detail_tintuc1::find($id);
return view('admin.suatintuc1',compact('suatintuc1'));
}

public function postsuatintuc1(Request $res,$id){
   

$themtin1 =detail_tintuc1::find($id);
$themtin1->hinhanh = $res['hinhanh'];
$themtin1->noidungchinh = $res['noidungchinh'];
$themtin1->slug = $res['slug'];
$themtin1->noidung1 = $res['noidung1'];
$themtin1->hinhanh1 = $res['hinhanh1'];
$themtin1->noidung2 = $res['noidung2'];
$themtin1->hinhanh2 = $res['hinhanh2'];
$themtin1->noidung3 = $res['noidung3'];
$themtin1->hinhanh3 = $res['hinhanh3'];
$themtin1->noidung4 = $res['noidung4'];
$themtin1->hinhanh4 = $res['hinhanh4'];
$themtin1->noidung5 = $res['noidung5'];
$themtin1->hinhanh5 = $res['hinhanh5'];
$themtin1->noidung6 = $res['noidung6'];
$themtin1->hinhanh6 = $res['hinhanh6'];

$themtin1->save();
return redirect()->to('/themtintuc1');
}

public function xoatintuc1($id){
$xoatin1 = detail_tintuc1::find($id);

$xoatin1->delete();
return redirect()->back();
}






public function getsuatintuc2($id){
$suatintuc2 = detail_tintuc2::find($id);
return view('admin.suatintuc2',compact('suatintuc2'));
}

public function postsuatintuc2(Request $res,$id){
   

$themtin1 =detail_tintuc2::find($id);
$themtin1->hinhanh = $res['hinhanh'];
$themtin1->noidungchinh = $res['noidungchinh'];
$themtin1->slug = $res['slug'];
$themtin1->tacgia = $res['tacgia'];
$themtin1->noidungphu = $res['noidungphu'];
$themtin1->noidung1 = $res['noidung1'];
$themtin1->hinhanh1 = $res['hinhanh1'];
$themtin1->noidung2 = $res['noidung2'];
$themtin1->hinhanh2 = $res['hinhanh2'];
$themtin1->noidung3 = $res['noidung3'];
$themtin1->hinhanh3 = $res['hinhanh3'];
$themtin1->noidung4 = $res['noidung4'];
$themtin1->hinhanh4 = $res['hinhanh4'];
$themtin1->noidung5 = $res['noidung5'];
$themtin1->hinhanh5 = $res['hinhanh5'];
$themtin1->noidung6 = $res['noidung6'];
$themtin1->hinhanh6 = $res['hinhanh6'];

$themtin1->save();
return redirect()->to('/themtintuc2');
}

public function xoatintuc2($id){
$xoatin1 = detail_tintuc2::find($id);

$xoatin1->delete();
return redirect()->back();
}

public function postcomment(Request $res,$slug,$id){
     $comment = new comment;
     $comment->email = $res->email;
     $comment->name = $res->name;
     $comment->content = $res->content;
     $comment->com_product = $id; 
     $comment->slug = $slug; 

    
     $comment->save();
     
     

     $cmm=comment::where('id',$id)->first();
     


      Mail::send('mail',compact('comment'),function ($email) use($comment){
        $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
      });
       if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}

     return redirect()->back();
}

public function postcommentxuhuong(Request $res,$slug,$id){
$comment = new commentxuhuong;
$comment->email = $res->email;
$comment->name = $res->name;
$comment->content = $res->content;
$comment->com_product_xuhuong = $id;
$comment->slug = $slug; 

$comment->save();


$cmm=commentxuhuong::where('id',$id)->first();
     


      Mail::send('mail',compact('comment'),function ($email) use($comment){
        $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
      });
       if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}


return redirect()->back();
}


public function postcommenttintuc1(Request $res,$slug,$id){
$comment = new commenttintuc1;
$comment->email = $res->email;
$comment->name = $res->name;
$comment->content = $res->content;

$comment->com_product_tintuc1 = $id; 
$comment->slug = $slug; 
$comment->save();

$cmm=commenttintuc1::where('id',$id)->first();
     


Mail::send('mail',compact('comment'),function ($email) use($comment){
  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
});
 if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}

return redirect()->back();
}

public function postcommenttintuc2(Request $res,$slug,$id){
$comment = new commenttintuc2;
$comment->email = $res->email;
$comment->name = $res->name;
$comment->content = $res->content;
$comment->slug = $slug; 
$comment->com_product_tintuc2 = $id; 
$comment->save();

$cmm=commenttintuc2::where('id',$id)->first();
     


Mail::send('mail',compact('comment'),function ($email) use($comment){
  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
});
 if(isset($title[0])){
    $title=$title[0];
}
else{
    $title = "";
}

return redirect()->back();
}
//drgxfhtfxtjxfjxfhg


public function postcommenttulieu(Request $res,$slug,$id){
    $comment = new commentchung;
    $comment->email = $res->email;
    $comment->name = $res->name;
    $comment->content = $res->content;
    $comment->slug = $slug; 
    $comment->commenttulieu = $id; 
    $comment->commentphantich =0; 
    $comment->commentcuocsongdoday = 0; 
    $comment->commentsuckhoe = 0; 
    $comment->commentdoisong = 0; 
    $comment->commentdulich = 0; 
    $comment->commentthoisu = 0; 
    $comment->commentphapluat = 0; 
    $comment->commentgiaitri = 0; 
    $comment->commentkinhdoanh = 0; 
    $comment->commentkhoahoc = 0; 
    $comment->commentthoitrang = 0; 
    $comment->commentgiaoduc = 0; 
    $comment->commentgiaothong = 0; 
    $comment->commentlaodongvieclam = 0; 
    $comment->commentthegioitunhien = 0; 
    $comment->commentcacmonkhac = 0; 
    $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
    $comment->save();
    
    $cmm=commentchung::where('id',$id)->first();
         
    
    
    Mail::send('mail',compact('comment'),function ($email) use($comment){
      $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
    });
     if(isset($title[0])){
        $title=$title[0];
    }
    else{
        $title = "";
    }
    
    return redirect()->back();
    }





    public function postcommentphantich(Request $res,$slug,$id){
        $comment = new commentchung;
        $comment->email = $res->email;
        $comment->name = $res->name;
        $comment->content = $res->content;
        $comment->slug = $slug; 
        $comment->commenttulieu = 0; 
        $comment->commentphantich =$id; 
        $comment->commentcuocsongdoday = 0; 
        $comment->commentsuckhoe = 0; 
        $comment->commentdoisong = 0; 
        $comment->commentdulich = 0; 
        $comment->commentthoisu = 0; 
        $comment->commentphapluat = 0; 
        $comment->commentgiaitri = 0; 
        $comment->commentkinhdoanh = 0; 
        $comment->commentkhoahoc = 0; 
        $comment->commentthoitrang = 0; 
        $comment->commentgiaoduc = 0; 
        $comment->commentgiaothong = 0; 
        $comment->commentlaodongvieclam = 0; 
        $comment->commentthegioitunhien = 0; 
        $comment->commentcacmonkhac = 0; 
        $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
        $comment->save();
        
        $cmm=commentchung::where('id',$id)->first();
             
        
        
        Mail::send('mail',compact('comment'),function ($email) use($comment){
          $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
        });
         if(isset($title[0])){
            $title=$title[0];
        }
        else{
            $title = "";
        }
        
        return redirect()->back();
        }



        public function postcommentcuocsongdoday(Request $res,$slug,$id){
            $comment = new commentchung;
            $comment->email = $res->email;
            $comment->name = $res->name;
            $comment->content = $res->content;
            $comment->slug = $slug; 
            $comment->commenttulieu = 0; 
            $comment->commentphantich =0; 
            $comment->commentcuocsongdoday = $id; 
            $comment->commentsuckhoe = 0; 
            $comment->commentdoisong = 0; 
            $comment->commentdulich = 0; 
            $comment->commentthoisu = 0; 
            $comment->commentphapluat = 0; 
            $comment->commentgiaitri = 0; 
            $comment->commentkinhdoanh = 0; 
            $comment->commentkhoahoc = 0; 
            $comment->commentthoitrang = 0; 
            $comment->commentgiaoduc = 0; 
            $comment->commentgiaothong = 0; 
            $comment->commentlaodongvieclam = 0; 
            $comment->commentthegioitunhien = 0; 
            $comment->commentcacmonkhac = 0; 
            $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
            $comment->save();
            
            $cmm=commentchung::where('id',$id)->first();
                 
            
            
            Mail::send('mail',compact('comment'),function ($email) use($comment){
              $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
            });
             if(isset($title[0])){
                $title=$title[0];
            }
            else{
                $title = "";
            }
            
            return redirect()->back();
            }



            public function postcommentsuckhoe(Request $res,$slug,$id){
                $comment = new commentchung;
                $comment->email = $res->email;
                $comment->name = $res->name;
                $comment->content = $res->content;
                $comment->slug = $slug; 
                $comment->commenttulieu = 0; 
                $comment->commentphantich =0; 
                $comment->commentcuocsongdoday = 0; 
                $comment->commentsuckhoe = $id; 
                $comment->commentdoisong = 0; 
                $comment->commentdulich = 0; 
                $comment->commentthoisu = 0; 
                $comment->commentphapluat = 0; 
                $comment->commentgiaitri = 0; 
                $comment->commentkinhdoanh = 0; 
                $comment->commentkhoahoc = 0; 
                $comment->commentthoitrang = 0; 
                $comment->commentgiaoduc = 0; 
                $comment->commentgiaothong = 0; 
                $comment->commentlaodongvieclam = 0; 
                $comment->commentthegioitunhien = 0; 
                $comment->commentcacmonkhac = 0; 
                $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                $comment->save();
                
                $cmm=commentchung::where('id',$id)->first();
                     
                
                
                Mail::send('mail',compact('comment'),function ($email) use($comment){
                  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                });
                 if(isset($title[0])){
                    $title=$title[0];
                }
                else{
                    $title = "";
                }
                
                return redirect()->back();
                }



                public function postcommentdoisong(Request $res,$slug,$id){
                    $comment = new commentchung;
                    $comment->email = $res->email;
                    $comment->name = $res->name;
                    $comment->content = $res->content;
                    $comment->slug = $slug; 
                    $comment->commenttulieu = 0; 
                    $comment->commentphantich =0; 
                    $comment->commentcuocsongdoday = 0; 
                    $comment->commentsuckhoe = 0; 
                    $comment->commentdoisong = $id; 
                    $comment->commentdulich = 0; 
                    $comment->commentthoisu = 0; 
                    $comment->commentphapluat = 0; 
                    $comment->commentgiaitri = 0; 
                    $comment->commentkinhdoanh = 0; 
                    $comment->commentkhoahoc = 0; 
                    $comment->commentthoitrang = 0; 
                    $comment->commentgiaoduc = 0; 
                    $comment->commentgiaothong = 0; 
                    $comment->commentlaodongvieclam = 0; 
                    $comment->commentthegioitunhien = 0; 
                    $comment->commentcacmonkhac = 0; 
                    $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                    $comment->save();
                    
                    $cmm=commentchung::where('id',$id)->first();
                         
                    
                    
                    Mail::send('mail',compact('comment'),function ($email) use($comment){
                      $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                    });
                     if(isset($title[0])){
                        $title=$title[0];
                    }
                    else{
                        $title = "";
                    }
                    
                    return redirect()->back();
                    }



                    public function postcommentdulich(Request $res,$slug,$id){
                        $comment = new commentchung;
                        $comment->email = $res->email;
                        $comment->name = $res->name;
                        $comment->content = $res->content;
                        $comment->slug = $slug; 
                        $comment->commenttulieu = 0; 
                        $comment->commentphantich =0; 
                        $comment->commentcuocsongdoday = 0; 
                        $comment->commentsuckhoe = 0; 
                        $comment->commentdoisong = 0; 
                        $comment->commentdulich = $id; 
                        $comment->commentthoisu = 0; 
                        $comment->commentphapluat = 0; 
                        $comment->commentgiaitri = 0; 
                        $comment->commentkinhdoanh = 0; 
                        $comment->commentkhoahoc = 0; 
                        $comment->commentthoitrang = 0; 
                        $comment->commentgiaoduc = 0; 
                        $comment->commentgiaothong = 0; 
                        $comment->commentlaodongvieclam = 0; 
                        $comment->commentthegioitunhien = 0; 
                        $comment->commentcacmonkhac = 0; 
                        $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                        $comment->save();
                        
                        $cmm=commentchung::where('id',$id)->first();
                             
                        
                        
                        Mail::send('mail',compact('comment'),function ($email) use($comment){
                          $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                        });
                         if(isset($title[0])){
                            $title=$title[0];
                        }
                        else{
                            $title = "";
                        }
                        
                        return redirect()->back();
                        }


                        public function postcommentthoisu(Request $res,$slug,$id){
                            $comment = new commentchung;
                            $comment->email = $res->email;
                            $comment->name = $res->name;
                            $comment->content = $res->content;
                            $comment->slug = $slug; 
                            $comment->commenttulieu = 0; 
                            $comment->commentphantich =0; 
                            $comment->commentcuocsongdoday = 0; 
                            $comment->commentsuckhoe = 0; 
                            $comment->commentdoisong = 0; 
                            $comment->commentdulich = 0; 
                            $comment->commentthoisu = $id; 
                            $comment->commentphapluat = 0; 
                            $comment->commentgiaitri = 0; 
                            $comment->commentkinhdoanh = 0; 
                            $comment->commentkhoahoc = 0; 
                            $comment->commentthoitrang = 0; 
                            $comment->commentgiaoduc = 0; 
                            $comment->commentgiaothong = 0; 
                            $comment->commentlaodongvieclam = 0; 
                            $comment->commentthegioitunhien = 0; 
                            $comment->commentcacmonkhac = 0; 
                            $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                            $comment->save();
                            
                            $cmm=commentchung::where('id',$id)->first();
                                 
                            
                            
                            Mail::send('mail',compact('comment'),function ($email) use($comment){
                              $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                            });
                             if(isset($title[0])){
                                $title=$title[0];
                            }
                            else{
                                $title = "";
                            }
                            
                            return redirect()->back();
                            }


                            public function postcommentphapluat(Request $res,$slug,$id){
                                $comment = new commentchung;
                                $comment->email = $res->email;
                                $comment->name = $res->name;
                                $comment->content = $res->content;
                                $comment->slug = $slug; 
                                $comment->commenttulieu = 0; 
                                $comment->commentphantich =0; 
                                $comment->commentcuocsongdoday = 0; 
                                $comment->commentsuckhoe = 0; 
                                $comment->commentdoisong = 0; 
                                $comment->commentdulich = 0; 
                                $comment->commentthoisu = 0; 
                                $comment->commentphapluat = $id; 
                                $comment->commentgiaitri = 0; 
                                $comment->commentkinhdoanh = 0; 
                                $comment->commentkhoahoc = 0; 
                                $comment->commentthoitrang = 0; 
                                $comment->commentgiaoduc = 0; 
                                $comment->commentgiaothong = 0; 
                                $comment->commentlaodongvieclam = 0; 
                                $comment->commentthegioitunhien = 0; 
                                $comment->commentcacmonkhac = 0; 
                                $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                $comment->save();
                                
                                $cmm=commentchung::where('id',$id)->first();
                                     
                                
                                
                                Mail::send('mail',compact('comment'),function ($email) use($comment){
                                  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                });
                                 if(isset($title[0])){
                                    $title=$title[0];
                                }
                                else{
                                    $title = "";
                                }
                                
                                return redirect()->back();
                                }


                                public function postcommentgiaitri(Request $res,$slug,$id){
                                    $comment = new commentchung;
                                    $comment->email = $res->email;
                                    $comment->name = $res->name;
                                    $comment->content = $res->content;
                                    $comment->slug = $slug; 
                                    $comment->commenttulieu = 0; 
                                    $comment->commentphantich =0; 
                                    $comment->commentcuocsongdoday = 0; 
                                    $comment->commentsuckhoe = 0; 
                                    $comment->commentdoisong = 0; 
                                    $comment->commentdulich = 0; 
                                    $comment->commentthoisu = 0; 
                                    $comment->commentphapluat = 0; 
                                    $comment->commentgiaitri = $id; 
                                    $comment->commentkinhdoanh = 0; 
                                    $comment->commentkhoahoc = 0; 
                                    $comment->commentthoitrang = 0; 
                                    $comment->commentgiaoduc = 0; 
                                    $comment->commentgiaothong = 0; 
                                    $comment->commentlaodongvieclam = 0; 
                                    $comment->commentthegioitunhien = 0; 
                                    $comment->commentcacmonkhac = 0; 
                                    $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                    $comment->save();
                                    
                                    $cmm=commentchung::where('id',$id)->first();
                                         
                                    
                                    
                                    Mail::send('mail',compact('comment'),function ($email) use($comment){
                                      $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                    });
                                     if(isset($title[0])){
                                        $title=$title[0];
                                    }
                                    else{
                                        $title = "";
                                    }
                                    
                                    return redirect()->back();
                                    }



                                    public function postcommentkinhdoanh(Request $res,$slug,$id){
                                        $comment = new commentchung;
                                        $comment->email = $res->email;
                                        $comment->name = $res->name;
                                        $comment->content = $res->content;
                                        $comment->slug = $slug; 
                                        $comment->commenttulieu = 0; 
                                        $comment->commentphantich =0; 
                                        $comment->commentcuocsongdoday = 0; 
                                        $comment->commentsuckhoe = 0; 
                                        $comment->commentdoisong = 0; 
                                        $comment->commentdulich = 0; 
                                        $comment->commentthoisu = 0; 
                                        $comment->commentphapluat = 0; 
                                        $comment->commentgiaitri = 0; 
                                        $comment->commentkinhdoanh = $id; 
                                        $comment->commentkhoahoc = 0; 
                                        $comment->commentthoitrang = 0; 
                                        $comment->commentgiaoduc = 0; 
                                        $comment->commentgiaothong = 0; 
                                        $comment->commentlaodongvieclam = 0; 
                                        $comment->commentthegioitunhien = 0; 
                                        $comment->commentcacmonkhac = 0; 
                                        $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                        $comment->save();
                                        
                                        $cmm=commentchung::where('id',$id)->first();
                                             
                                        
                                        
                                        Mail::send('mail',compact('comment'),function ($email) use($comment){
                                          $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                        });
                                         if(isset($title[0])){
                                            $title=$title[0];
                                        }
                                        else{
                                            $title = "";
                                        }
                                        
                                        return redirect()->back();
                                        }


                                        public function postcommentkhoahoc(Request $res,$slug,$id){
                                            $comment = new commentchung;
                                            $comment->email = $res->email;
                                            $comment->name = $res->name;
                                            $comment->content = $res->content;
                                            $comment->slug = $slug; 
                                            $comment->commenttulieu = 0; 
                                            $comment->commentphantich =0; 
                                            $comment->commentcuocsongdoday = 0; 
                                            $comment->commentsuckhoe = 0; 
                                            $comment->commentdoisong = 0; 
                                            $comment->commentdulich = 0; 
                                            $comment->commentthoisu = 0; 
                                            $comment->commentphapluat = 0; 
                                            $comment->commentgiaitri = 0; 
                                            $comment->commentkinhdoanh = 0; 
                                            $comment->commentkhoahoc = $id; 
                                            $comment->commentthoitrang = 0; 
                                            $comment->commentgiaoduc = 0; 
                                            $comment->commentgiaothong = 0; 
                                            $comment->commentlaodongvieclam = 0; 
                                            $comment->commentthegioitunhien = 0; 
                                            $comment->commentcacmonkhac = 0; 
                                            $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                            $comment->save();
                                            
                                            $cmm=commentchung::where('id',$id)->first();
                                                 
                                            
                                            
                                            Mail::send('mail',compact('comment'),function ($email) use($comment){
                                              $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                            });
                                             if(isset($title[0])){
                                                $title=$title[0];
                                            }
                                            else{
                                                $title = "";
                                            }
                                            
                                            return redirect()->back();
                                            }



                                            public function postcommenthoitrang(Request $res,$slug,$id){
                                                $comment = new commentchung;
                                                $comment->email = $res->email;
                                                $comment->name = $res->name;
                                                $comment->content = $res->content;
                                                $comment->slug = $slug; 
                                                $comment->commenttulieu = 0; 
                                                $comment->commentphantich =0; 
                                                $comment->commentcuocsongdoday = 0; 
                                                $comment->commentsuckhoe = 0; 
                                                $comment->commentdoisong = 0; 
                                                $comment->commentdulich = 0; 
                                                $comment->commentthoisu = 0; 
                                                $comment->commentphapluat = 0; 
                                                $comment->commentgiaitri = 0; 
                                                $comment->commentkinhdoanh = 0; 
                                                $comment->commentkhoahoc = 0; 
                                                $comment->commentthoitrang = $id; 
                                                $comment->commentgiaoduc = 0; 
                                                $comment->commentgiaothong = 0; 
                                                $comment->commentlaodongvieclam = 0; 
                                                $comment->commentthegioitunhien = 0; 
                                                $comment->commentcacmonkhac = 0; 
                                                $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                $comment->save();
                                                
                                                $cmm=commentchung::where('id',$id)->first();
                                                     
                                                
                                                
                                                Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                });
                                                 if(isset($title[0])){
                                                    $title=$title[0];
                                                }
                                                else{
                                                    $title = "";
                                                }
                                                
                                                return redirect()->back();
                                                }



                                                public function postcommentgiaoduc(Request $res,$slug,$id){
                                                    $comment = new commentchung;
                                                    $comment->email = $res->email;
                                                    $comment->name = $res->name;
                                                    $comment->content = $res->content;
                                                    $comment->slug = $slug; 
                                                    $comment->commenttulieu = 0; 
                                                    $comment->commentphantich =0; 
                                                    $comment->commentcuocsongdoday = 0; 
                                                    $comment->commentsuckhoe = 0; 
                                                    $comment->commentdoisong = 0; 
                                                    $comment->commentdulich = 0; 
                                                    $comment->commentthoisu = 0; 
                                                    $comment->commentphapluat = 0; 
                                                    $comment->commentgiaitri = 0; 
                                                    $comment->commentkinhdoanh = 0; 
                                                    $comment->commentkhoahoc = 0; 
                                                    $comment->commentthoitrang = 0; 
                                                    $comment->commentgiaoduc = $id; 
                                                    $comment->commentgiaothong = 0; 
                                                    $comment->commentlaodongvieclam = 0; 
                                                    $comment->commentthegioitunhien = 0; 
                                                    $comment->commentcacmonkhac = 0; 
                                                    $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                    $comment->save();
                                                    
                                                    $cmm=commentchung::where('id',$id)->first();
                                                         
                                                    
                                                    
                                                    Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                      $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                    });
                                                     if(isset($title[0])){
                                                        $title=$title[0];
                                                    }
                                                    else{
                                                        $title = "";
                                                    }
                                                    
                                                    return redirect()->back();
                                                    }


                                                    public function postcommentgiaothong(Request $res,$slug,$id){
                                                        $comment = new commentchung;
                                                        $comment->email = $res->email;
                                                        $comment->name = $res->name;
                                                        $comment->content = $res->content;
                                                        $comment->slug = $slug; 
                                                        $comment->commenttulieu = 0; 
                                                        $comment->commentphantich =0; 
                                                        $comment->commentcuocsongdoday = 0; 
                                                        $comment->commentsuckhoe = 0; 
                                                        $comment->commentdoisong = 0; 
                                                        $comment->commentdulich = 0; 
                                                        $comment->commentthoisu = 0; 
                                                        $comment->commentphapluat = 0; 
                                                        $comment->commentgiaitri = 0; 
                                                        $comment->commentkinhdoanh = 0; 
                                                        $comment->commentkhoahoc = 0; 
                                                        $comment->commentthoitrang = 0; 
                                                        $comment->commentgiaoduc = 0; 
                                                        $comment->commentgiaothong = $id; 
                                                        $comment->commentlaodongvieclam = 0; 
                                                        $comment->commentthegioitunhien = 0; 
                                                        $comment->commentcacmonkhac = 0; 
                                                        $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                        $comment->save();
                                                        
                                                        $cmm=commentchung::where('id',$id)->first();
                                                             
                                                        
                                                        
                                                        Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                          $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                        });
                                                         if(isset($title[0])){
                                                            $title=$title[0];
                                                        }
                                                        else{
                                                            $title = "";
                                                        }
                                                        
                                                        return redirect()->back();
                                                        }


                                                        public function postcommentlaodongvieclam(Request $res,$slug,$id){
                                                            $comment = new commentchung;
                                                            $comment->email = $res->email;
                                                            $comment->name = $res->name;
                                                            $comment->content = $res->content;
                                                            $comment->slug = $slug; 
                                                            $comment->commenttulieu = 0; 
                                                            $comment->commentphantich =0; 
                                                            $comment->commentcuocsongdoday = 0; 
                                                            $comment->commentsuckhoe = 0; 
                                                            $comment->commentdoisong = 0; 
                                                            $comment->commentdulich = 0; 
                                                            $comment->commentthoisu = 0; 
                                                            $comment->commentphapluat = 0; 
                                                            $comment->commentgiaitri = 0; 
                                                            $comment->commentkinhdoanh = 0; 
                                                            $comment->commentkhoahoc = 0; 
                                                            $comment->commentthoitrang = 0; 
                                                            $comment->commentgiaoduc = 0; 
                                                            $comment->commentgiaothong = 0; 
                                                            $comment->commentlaodongvieclam = $id; 
                                                            $comment->commentthegioitunhien = 0; 
                                                            $comment->commentcacmonkhac = 0; 
                                                            $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                            $comment->save();
                                                            
                                                            $cmm=commentchung::where('id',$id)->first();
                                                                 
                                                            
                                                            
                                                            Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                              $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                            });
                                                             if(isset($title[0])){
                                                                $title=$title[0];
                                                            }
                                                            else{
                                                                $title = "";
                                                            }
                                                            
                                                            return redirect()->back();
                                                            }


                                                            public function postcommentthegioitunhien(Request $res,$slug,$id){
                                                                $comment = new commentchung;
                                                                $comment->email = $res->email;
                                                                $comment->name = $res->name;
                                                                $comment->content = $res->content;
                                                                $comment->slug = $slug; 
                                                                $comment->commenttulieu = 0; 
                                                                $comment->commentphantich =0; 
                                                                $comment->commentcuocsongdoday = 0; 
                                                                $comment->commentsuckhoe = 0; 
                                                                $comment->commentdoisong = 0; 
                                                                $comment->commentdulich = 0; 
                                                                $comment->commentthoisu = 0; 
                                                                $comment->commentphapluat = 0; 
                                                                $comment->commentgiaitri = 0; 
                                                                $comment->commentkinhdoanh = 0; 
                                                                $comment->commentkhoahoc = 0; 
                                                                $comment->commentthoitrang = 0; 
                                                                $comment->commentgiaoduc = 0; 
                                                                $comment->commentgiaothong = 0; 
                                                                $comment->commentlaodongvieclam = 0; 
                                                                $comment->commentthegioitunhien = $id; 
                                                                $comment->commentcacmonkhac = 0; 
                                                                $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                                $comment->save();
                                                                
                                                                $cmm=commentchung::where('id',$id)->first();
                                                                     
                                                                
                                                                
                                                                Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                                  $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                                });
                                                                 if(isset($title[0])){
                                                                    $title=$title[0];
                                                                }
                                                                else{
                                                                    $title = "";
                                                                }
                                                                
                                                                return redirect()->back();
                                                                }


                                                                public function postcommentcacmonthethaokhac(Request $res,$slug,$id){
                                                                    $comment = new commentchung;
                                                                    $comment->email = $res->email;
                                                                    $comment->name = $res->name;
                                                                    $comment->content = $res->content;
                                                                    $comment->slug = $slug; 
                                                                    $comment->commenttulieu = 0; 
                                                                    $comment->commentphantich =0; 
                                                                    $comment->commentcuocsongdoday = 0; 
                                                                    $comment->commentsuckhoe = 0; 
                                                                    $comment->commentdoisong = 0; 
                                                                    $comment->commentdulich = 0; 
                                                                    $comment->commentthoisu = 0; 
                                                                    $comment->commentphapluat = 0; 
                                                                    $comment->commentgiaitri = 0; 
                                                                    $comment->commentkinhdoanh = 0; 
                                                                    $comment->commentkhoahoc = 0; 
                                                                    $comment->commentthoitrang = 0; 
                                                                    $comment->commentgiaoduc = 0; 
                                                                    $comment->commentgiaothong = 0; 
                                                                    $comment->commentlaodongvieclam = 0; 
                                                                    $comment->commentthegioitunhien = 0; 
                                                                    $comment->commentcacmonkhac = $id; 
                                                                    $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = 0;
                                                                    $comment->save();
                                                                    
                                                                    $cmm=commentchung::where('id',$id)->first();
                                                                         
                                                                    
                                                                    
                                                                    Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                                      $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                                    });
                                                                     if(isset($title[0])){
                                                                        $title=$title[0];
                                                                    }
                                                                    else{
                                                                        $title = "";
                                                                    }
                                                                    
                                                                    return redirect()->back();
                                                                    }



                                                                  



                                                                        public function postcommentcontact(Request $res,$slug,$id){
                                                                            $comment = new commentchung;
                                                                            $comment->email = $res->email;
                                                                            $comment->name = $res->name;
                                                                            $comment->content = $res->content;
                                                                            $comment->slug = $slug; 
                                                                            $comment->commenttulieu = 0; 
                                                                            $comment->commentphantich =0; 
                                                                            $comment->commentcuocsongdoday = 0; 
                                                                            $comment->commentsuckhoe = 0; 
                                                                            $comment->commentdoisong = 0; 
                                                                            $comment->commentdulich = 0; 
                                                                            $comment->commentthoisu = 0; 
                                                                            $comment->commentphapluat = 0; 
                                                                            $comment->commentgiaitri = 0; 
                                                                            $comment->commentkinhdoanh = 0; 
                                                                            $comment->commentkhoahoc = 0; 
                                                                            $comment->commentthoitrang = 0; 
                                                                            $comment->commentgiaoduc = 0; 
                                                                            $comment->commentgiaothong = 0; 
                                                                            $comment->commentlaodongvieclam = 0; 
                                                                            $comment->commentthegioitunhien = 0; 
                                                                            $comment->commentcacmonkhac = 0; 
                                                                            $comment->commenttinchinh = 0; 
                                                                            $comment->commentcontact = $id; 
                                                                            
                                                                            
                                                                            $comment->save();
                                                                            
                                                                            $cmm=commentchung::where('id',$id)->first();
                                                                                 
                                                                            
                                                                            
                                                                            Mail::send('mail',compact('comment'),function ($email) use($comment){
                                                                              $email->to($comment->email,'ban qu&#7843;n tr&#7883;');
                                                                            });
                                                                             if(isset($title[0])){
                                                                                $title=$title[0];
                                                                            }
                                                                            else{
                                                                                $title = "";
                                                                            }
                                                                            
                                                                            return redirect()->back();
                                                                            }

                                                                 
   


//srgstrhsthfj

public function timkiem(Request $req){
$timkiemtin1 = detail_tin1::where('noidungchinh', 'like','%'.$req->timkiem .'%')->get();
$tukhoatin1 = $req->timkiem;

$timkiemxuhuong = detail_xuhuong::where('noidungchinh', 'like','%'.$req->timkiem .'%')->get();
$tukhoaxuhuong = $req->timkiem;

$timkiemtintuc1 = detail_tintuc1::where('noidungchinh', 'like','%'.$req->timkiem .'%')->get();
$tukhoatintuc1= $req->timkiem;

$timkiemtintuc2 = detail_tintuc2::where('noidungchinh', 'like','%'.$req->timkiem .'%')->get();
$tukhoatintuc2 = $req->timkiem;
$phobiennhat = detail_phobiennhat::all();
  return view('timkiem',compact('phobiennhat','timkiemxuhuong','tukhoaxuhuong','timkiemtin1','tukhoatin1','timkiemtintuc1','tukhoatintuc1','timkiemtintuc2','tukhoatintuc2'));
}

public function clearCache()
{
    cache()->flush();
}


}
