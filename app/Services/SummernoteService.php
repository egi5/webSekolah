<?php 

namespace App\Services;

use Str;
use File;
use DomDocument;

class SummernoteService
{
	public function imageUpload()
	{
		$content = request()->input('isi');
        $dom = new DomDocument();
        $dom->loadHtml('<?xml encoding="utf-8" ?>'.$content);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/uploads/img/artikel/". Str::random(9).time().$k.'.png';
            $path = public_path().$image_name;
            File::put($path,$data);
        
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        return $content;
	}
}

