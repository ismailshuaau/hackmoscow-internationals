<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Rekognition;

class HomeController extends Controller
{
    //
    public function index()
    {

        // $options = [
        //     'region'            => 'us-west-2',
        //     'version'           => 'latest'
        //  ];

        //  $rekognition = new Rekognition($options);

        // // Get local image
        // $path = $request->file('photo')->store('images');

        // dd($request->file('photo'));
        // Storage::disk('local')->put('file.txt', 'Contents');

        // $photo = 'input.jpg';
        // $fp_image = fopen($photo, 'r');
        // $image = fread($fp_image, filesize($photo));
        // fclose($fp_image);

        // // Call DetectFaces
        // $result = $rekognition->DetectFaces(array(
        //     'Image' => array(
        //     'Bytes' => $image,
        //     ),
        //     'Attributes' => array('ALL')
        //     )
        // );

        // // Display info for each detected person
        // print 'People: Image position and estimated age' . PHP_EOL;
        // for ($n=0;$n<sizeof($result['FaceDetails']); $n++){

        // print 'Position: ' . $result['FaceDetails'][$n]['BoundingBox']['Left'] . " "
        // . $result['FaceDetails'][$n]['BoundingBox']['Top']
        // . PHP_EOL
        // . 'Age (low): '.$result['FaceDetails'][$n]['AgeRange']['Low']
        // .  PHP_EOL
        // . 'Age (high): ' . $result['FaceDetails'][$n]['AgeRange']['High']
        // .  PHP_EOL . PHP_EOL;
        // }

        return view('welcome');


    }

 
}
