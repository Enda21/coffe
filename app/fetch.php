<?php
/**
 * Created by PhpStorm.
 * User: Enda
 * Date: 25/04/2016
 * Time: 14:32
 */
class fetch{
    //array with a key value
    public static $path = array(
        'jquery' => 'http://code.jquery.com/jquery.js'
    );
    //run the 
    public function run($query = null)
    {
        if ($query)
        {
            throw new InvalidArgumentException('Please pass an asset to download');
        }
        $this->asset = strtolower($query[0]);

        //if asset reconised then fetch it and create the file
        if($this->recognizedAsset($this->asset)){
            //then fetch it and create the file
            $this->fetch(static::$paths[$this->asset]);
            $content = $this->fetch(static::$path[$this->asset]);
            $this->createFile($this->asset, $content);
            //if the query was jquery then jquery is passed and the contents
                  }
        //echo not found
    }

    public static function recognizedAsset($asset)
    {
        return array_key_exists($asset, stacic::$path);
    }
    public function fetch($assetPath)
    {
        return file_get_contents($assetPath);
    }
    public function createFile($asset, $content)
    {
        $fileExtension = pathinfo(static::$path[$asset],PATHINFO_EXTENSION);
        if($fileExtension == 'js')
        {
            $path = "public/js/vendors/{$asset}.{$fileExtension}";
        }
        //if foler does not exisits
        File::mkdir(dirname($path));
        File:: put($path, $content);
    }
}