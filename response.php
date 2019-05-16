<?php

namespace json;

class response
{

    //jsonでレスポンスを返す
    public function responseJson($value)
    {

        header('Content-Type: application/json');
        echo json_encode($value);
        exit;
    }
}
