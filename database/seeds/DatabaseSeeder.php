<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(ShortnersTableSeeder::class);
    }
}


class ShortnersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('shortners')->delete();

        //Shortner::create(['short_url' => 'https://www.google.com/', 'unique_code' => '1234']);
		
		
		
		DB::table('shortners')->insert(['short_url' => 'http://www.t.co','unique_code' => 'o6qfx']);
		DB::table('shortners')->insert(['short_url' => 'http://www.tmall.com','unique_code' => 'hlx7l']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.com.br','unique_code' => '9dfme']);
		DB::table('shortners')->insert(['short_url' => 'http://www.360.cn','unique_code' => 'blu0v']);
		DB::table('shortners')->insert(['short_url' => 'http://www.sohu.com','unique_code' => '74vx1']);
		DB::table('shortners')->insert(['short_url' => 'http://www.amazon.co.jp','unique_code' => '48iw1']);
		DB::table('shortners')->insert(['short_url' => 'http://www.pinterest.com','unique_code' => 'nlhgg']);
		DB::table('shortners')->insert(['short_url' => 'http://www.netflix.com','unique_code' => '6f9ko']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.it','unique_code' => '5o3bd']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.ru','unique_code' => 'aatkz']);
		DB::table('shortners')->insert(['short_url' => 'http://www.microsoft.com','unique_code' => '1culd']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.es','unique_code' => '98uhh']);
		DB::table('shortners')->insert(['short_url' => 'http://www.wordpress.com','unique_code' => 'g6lb3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.gmw.cn','unique_code' => 'p47ze']);
		DB::table('shortners')->insert(['short_url' => 'http://www.tumblr.com','unique_code' => 'syskz']);
		DB::table('shortners')->insert(['short_url' => 'http://www.paypal.com','unique_code' => '2s6gc']);
		DB::table('shortners')->insert(['short_url' => 'http://www.blogspot.com','unique_code' => 'f372n']);
		DB::table('shortners')->insert(['short_url' => 'http://www.imgur.com','unique_code' => '9a8iv']);
		DB::table('shortners')->insert(['short_url' => 'http://www.stackoverflow.com','unique_code' => 'b4698']);
		DB::table('shortners')->insert(['short_url' => 'http://www.aliexpress.com','unique_code' => 'em4ph']);
		DB::table('shortners')->insert(['short_url' => 'http://www.naver.com','unique_code' => 'ddxfj']);
		DB::table('shortners')->insert(['short_url' => 'http://www.ok.ru','unique_code' => '70iek']);
		DB::table('shortners')->insert(['short_url' => 'http://www.apple.com','unique_code' => 'tv6pp']);
		DB::table('shortners')->insert(['short_url' => 'http://www.github.com','unique_code' => 'kip9i']);
		DB::table('shortners')->insert(['short_url' => 'http://www.chinadaily.com.cn','unique_code' => 'jeri7']);
		
		DB::table('shortners')->insert(['short_url' => 'http://www.imdb.com','unique_code' => 'ic357']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.co.kr','unique_code' => 'onokg']);
		DB::table('shortners')->insert(['short_url' => 'http://www.fc2.com','unique_code' => 'jlpvu']);
		DB::table('shortners')->insert(['short_url' => 'http://www.jd.com','unique_code' => 'gtj7i']);
		DB::table('shortners')->insert(['short_url' => 'http://www.blogger.com','unique_code' => 'dma5k']);
		DB::table('shortners')->insert(['short_url' => 'http://www.163.com','unique_code' => 'g93ux']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.ca','unique_code' => 'c7z8v']);
		DB::table('shortners')->insert(['short_url' => 'http://www.whatsapp.com','unique_code' => '9rl6j']);
		DB::table('shortners')->insert(['short_url' => 'http://www.amazon.in','unique_code' => 'o9nys']);
		DB::table('shortners')->insert(['short_url' => 'http://www.office.com','unique_code' => 'gh8v7']);
		DB::table('shortners')->insert(['short_url' => 'http://www.tianya.cn','unique_code' => 'huw2u']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.co.id','unique_code' => 'psfo1']);
		DB::table('shortners')->insert(['short_url' => 'http://www.youku.com','unique_code' => 'j9a4m']);
		DB::table('shortners')->insert(['short_url' => 'http://www.rakuten.co.jp','unique_code' => 'hem9r']);
		DB::table('shortners')->insert(['short_url' => 'http://www.craigslist.org','unique_code' => '3xy9v']);
		DB::table('shortners')->insert(['short_url' => 'http://www.amazon.de','unique_code' => 'fa9y3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.nicovideo.jp','unique_code' => '3bofg']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.pl','unique_code' => 'mvg3t']);
		DB::table('shortners')->insert(['short_url' => 'http://www.soso.com','unique_code' => '74fbg']);
		DB::table('shortners')->insert(['short_url' => 'http://www.bilibili.com','unique_code' => 'aggoo']);
		DB::table('shortners')->insert(['short_url' => 'http://www.dropbox.com','unique_code' => 'ckhgm']);
		DB::table('shortners')->insert(['short_url' => 'http://www.xinhuanet.com','unique_code' => 'ezo0h']);
		DB::table('shortners')->insert(['short_url' => 'http://www.outbrain.com','unique_code' => 'kwg3w']);
		DB::table('shortners')->insert(['short_url' => 'http://www.pixnet.net','unique_code' => 'sq713']);
		DB::table('shortners')->insert(['short_url' => 'http://www.alibaba.com','unique_code' => 'cmu1s']);
		
		DB::table('shortners')->insert(['short_url' => 'http://www.alipay.com','unique_code' => 'dpntx']);
		DB::table('shortners')->insert(['short_url' => 'http://www.microsoftonline.com','unique_code' => 'olva3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.booking.com','unique_code' => 'cynw4']);
		DB::table('shortners')->insert(['short_url' => 'http://www.googleusercontent.com','unique_code' => 'npizu']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.com.au','unique_code' => 't0hy3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.popads.net','unique_code' => '99wd5']);
		DB::table('shortners')->insert(['short_url' => 'http://www.cntv.cn','unique_code' => 'ih0qe']);
		DB::table('shortners')->insert(['short_url' => 'http://www.zhihu.com','unique_code' => '67f5a']);
		DB::table('shortners')->insert(['short_url' => 'http://www.amazon.co.uk','unique_code' => '2j0fd']);
		DB::table('shortners')->insert(['short_url' => 'http://www.diply.com','unique_code' => 'piu3e']);
		DB::table('shortners')->insert(['short_url' => 'http://www.coccoc.com','unique_code' => '1lr5q']);
		DB::table('shortners')->insert(['short_url' => 'http://www.cnn.com','unique_code' => 'hzv1t']);
		DB::table('shortners')->insert(['short_url' => 'http://www.bbc.co.uk','unique_code' => '1gb1u']);
		DB::table('shortners')->insert(['short_url' => 'http://www.twitch.tv','unique_code' => '29vbz']);
		DB::table('shortners')->insert(['short_url' => 'http://www.wikia.com','unique_code' => '5elfo']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.co.th','unique_code' => 'go76i']);
		DB::table('shortners')->insert(['short_url' => 'http://www.go.com','unique_code' => 'otecm']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.com.ph','unique_code' => 'emgu3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.doubleclick.net','unique_code' => 'emgu3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.onet.pl','unique_code' => '8ln8d']);
		DB::table('shortners')->insert(['short_url' => 'http://www.googleweblight.com','unique_code' => 'ox3en']);
		DB::table('shortners')->insert(['short_url' => 'http://www.googleadservices.com','unique_code' => 'btb10']);
		DB::table('shortners')->insert(['short_url' => 'http://www.accuweather.com','unique_code' => 'sfn1e']);
		DB::table('shortners')->insert(['short_url' => 'http://www.answers.yahoo.com','unique_code' => 's9z5p']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.com','unique_code' => 'j5lfq']);
		
		DB::table('shortners')->insert(['short_url' => 'http://www.sina.com.cn','unique_code' => 'koqez']);
		DB::table('shortners')->insert(['short_url' => 'http://www.linkedin.com','unique_code' => 'skig0']);
		DB::table('shortners')->insert(['short_url' => 'http://www.yahoo.co.jp','unique_code' => '775v1']);
		DB::table('shortners')->insert(['short_url' => 'http://www.msn.com','unique_code' => 'hlqlm']);
		DB::table('shortners')->insert(['short_url' => 'http://www.vk.com','unique_code' => '3tjcn']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.de','unique_code' => '9ccmb']);
		DB::table('shortners')->insert(['short_url' => 'http://www.yandex.ru','unique_code' => '8k92u']);
		DB::table('shortners')->insert(['short_url' => 'http://www.hao123.com','unique_code' => '4bgql']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.co.uk','unique_code' => 'bw4rb']);
		DB::table('shortners')->insert(['short_url' => 'http://www.reddit.com','unique_code' => 'amyuh']);
		DB::table('shortners')->insert(['short_url' => 'http://www.ebay.com','unique_code' => '8k42o']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.fr','unique_code' => '3cjmc']);
		DB::table('shortners')->insert(['short_url' => 'http://www.instagram.com','unique_code' => '2nb0b']);
		DB::table('shortners')->insert(['short_url' => 'http://www.weibo.com','unique_code' => 'fd7ot']);
		DB::table('shortners')->insert(['short_url' => 'http://www.taobao.com','unique_code' => 'k840x']);
		DB::table('shortners')->insert(['short_url' => 'http://www.bing.com','unique_code' => 't7r26']);
		DB::table('shortners')->insert(['short_url' => 'http://www.live.com','unique_code' => '8r9eo']);
		DB::table('shortners')->insert(['short_url' => 'http://www.twitter.com','unique_code' => 'p9b4c']);
		DB::table('shortners')->insert(['short_url' => 'http://www.google.co.in','unique_code' => '9gizf']);
		DB::table('shortners')->insert(['short_url' => 'http://www.qq.com','unique_code' => 'm75o7']);
		DB::table('shortners')->insert(['short_url' => 'http://www.amazon.com','unique_code' => '42is3']);
		DB::table('shortners')->insert(['short_url' => 'http://www.wikipedia.org','unique_code' => 'dwcem']);
		DB::table('shortners')->insert(['short_url' => 'http://www.yahoo.com','unique_code' => 'mc8pv']);
		DB::table('shortners')->insert(['short_url' => 'http://www.baidu.com','unique_code' => 'bsjzc']);
		DB::table('shortners')->insert(['short_url' => 'http://www.facebook.com','unique_code' => 'sqysy']);
		
		
    
	}

}
