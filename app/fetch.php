<?php
/**
 * Created by PhpStorm.
 * User: Enda
 * Date: 25/04/2016
 * Time: 14:32
 */
class fetch{
    public static $path = array(
        'jquery' => 'http://code.jquery.com/jquery.js'
    );
    public function run($query = null)
    {
        if ($query)
        {
            throw new InvalidArgumentException('Please pass an asset to download');
        }
    }
}