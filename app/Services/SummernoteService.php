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
        $dom->loadHtml($content,9);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = base64_decode(explode(',', explode(';',$img->getAttribute('src'))[1])[1]);
            // $data = $img->getAttribute('src');
            // list($type, $data) = explode(';', $data);
            // list(, $data)      = explode(',', $data);
            // $data = base64_decode($data);

            $image_name = "/uploads/img/artikel/".time().$k.'.png';
            file_put_contents(public_path().$image_name,$data);
            // $path = public_path().$image_name;
            // File::put($path,$data);
        
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        return $content;
	}
}

