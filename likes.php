<?php
    require_once __DIR__.'/vendor/autoload.php';

    use VK\Client\VKApiClient;

    $config = require_once('config.php');

    $vk = new VKApiClient();


    try{
        /**
         * https://vk.com/wall654593_2444
         */
        $myLikes = $vk->likes()->getList(
            $config['service_key'],
            [
                'type' => 'post',
                'owner_id' => 654593,
                'item_id' => 2444,
                'extended' => 0,
                'count' => 1000,
                'skip_own' => 0
            ]
        );
        echo 'List of users who like my post with short description:'.PHP_EOL;
        print_r($myLikes);
    }
    catch (Exception $ex)
    {
        echo $ex->getMessage().PHP_EOL;
    }


    try{
        /**
         * https://vk.com/wall213429147_428
         */
        $otherLikes = $vk->likes()->getList(
            $config['service_key'],
            [
                'type' => 'post',
                'owner_id' => 213429147,
                'item_id' => 428,
                'extended' => 1,
                'count' => 1000,
                'skip_own' => 0
            ]
        );
        echo 'List of users who like some another public post with detail description:'.PHP_EOL;
        print_r($otherLikes);
    }
    catch (Exception $ex)
    {
        echo $ex->getMessage().PHP_EOL;
    }
