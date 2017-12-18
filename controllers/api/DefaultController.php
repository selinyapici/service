<?php
//istek uygulama içinde url de talep edilen yolda istenilen action da çagırılır 
//kouosl-app.dev/content/contents/manage->bize hedefi gösterir yani nerenin çalışacagını..


namespace kouosl\service\controllers\api;


class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    public function actionIndex(){
        return ['status' => 1, 'action' => 'index','controller' => 'default'];
    }

}