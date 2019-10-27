<?php

// use \Aws\Rekognition\RekognitionClient;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Vision\VisionClient;

 

class ImageController extends Controller
{
    //
    public function save(Request $request)
    {
       $path = config_path('music-internationals-34a17b6d7650.json');
       $vision = new VisionClient(
           [
               'keyFilePath' => $path
           ]
       );


        $fp_image = fopen($request->file('photo')->getPathName(), 'r');
        $bytes = fread($fp_image, $request->file('photo')->getSize());
        fclose($fp_image);

        $image = $vision->image($bytes, 
        [
            'LABEL_DETECTION'
        ]);
       
        $annotation = $vision->annotate($image);

        $labels = $annotation->labels();

        if ($labels) {
            foreach ($labels as $label) {
                 var_dump($label->description());
            }
        } else {
            echo('No label found');
        }

    }
}
