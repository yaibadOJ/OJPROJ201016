<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //สร้างการเชื่อมต่อฐานข้อมูล
        $conn=\yii::$app->db;
        
        $sql='select*from com_type';
        //สร้างการQuery
        $cmd=$conn->createCommand($sql);
        // run Query
        $data=$cmd->queryAll();
      
        
        
        return $this->render('index',['data'=>$data]);
    
    }

}
