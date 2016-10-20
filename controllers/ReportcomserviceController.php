<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //สร้างการเชื่อมต่อฐานข้อมูล
        $conn=\yii::$app->db;
        $sql='select c.brand,s. * from com_service s LEFT JOIN com c ON c.com_id = s.com_id';
        $cmd=$conn->createCommand($sql);
         $data=$cmd->queryAll();
        return $this->render('index',['data'=>$data]);
    }

}
