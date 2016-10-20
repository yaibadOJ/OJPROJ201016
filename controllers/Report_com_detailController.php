<?php

namespace app\controllers;

class Report_com_detailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
       
        
        //สร้างการเชื่อมต่อฐานข้อมูล
        $conn=\yii::$app->db;
        $sql='select*from com where com_type_id=:id';
        //สร้างการQuery
         $cmd=$conn->createCommand($sql);
         //ใส่ค่ากับparameter
        $cmd->bindvalue(':id',$id);
        // run Query
        $data=$cmd->queryAll();
      
        
        
        return $this->render('index',['data'=>$data]);
    }

}
