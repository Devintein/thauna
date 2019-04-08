<?php
return [
    "open" => [

        "appId" => "",  // APPID
        "appSecret" => "",  //APPSECRET
//            "encodingAesKey" => "",
//            "token" => "",
//            'componentFolder' => $app_path . '/cache/token/wechat/open/',
//            'createTokenType' => "online",  //local  为本地配置    online  远程配置
//            'onlineLink' => 'https://api.slock360.com/api/v1/wechat/component/getaccesstoken'  //远程配置  configType
    ],
    'applets' => [
        'path' => $app_path,
        'appletsFolder' => $app_path . '/cache/token/wechat/applets/',
        'createTokenType' => "local",  //local  为本地配置    online  远程配置
//'onlineLink'=>'/api/wechat/open/applets/getAccessToken'  //远程配置  configType
//'QrcodePaths'=>$app_path.'/public/static/applets/Qrcode/'
        "appId" => "",
        "secret" => '',
        'mchId' => '',
        'apikey' => '',  //APIkey   在商户中心下载
        'apiclientCert' => '/apiclient_cert.pem',   //证书
        'apiclientKey' => '/apiclient_key.pem',
        'rootca' => $app_path . '/cert/wechat/1282067201/rootca.pem'
    ],
    'app' => [
        "appId" => "",
        "secret" => '',
        'mchId' => '',
        'apikey' => '',  //APIkey   在商户中心下载
        'apiclientCert' => $app_path . '/cert/wechat/1282067201/apiclient_cert.pem',   //证书
        'apiclientKey' => $app_path . '/cert/wechat/1282067201/apiclient_key.pem',
        'rootca' => $app_path . '/cert/wechat/1282067201/rootca.pem'
    ]

];