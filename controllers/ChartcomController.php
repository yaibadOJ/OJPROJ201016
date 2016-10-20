<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
       //สร้างการเชื่อมต่อฐานข้อมูล
        $conn=\yii::$app->db;
        $sql='SELECT 
t.com_type_name,
Count(c.com_id) AS cdata
FROM
com  c
INNER JOIN com_type  t ON t.com_type_id = c.com_type_id
GROUP BY
c.com_type_id';
        //สร้างการQuery
         $cmd=$conn->createCommand($sql);
         //ใส่ค่ากับparameter
        
        // run Query
        $data=$cmd->queryAll();
      foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }
        
        
        
        return $this->render('index',['chart'=>$chart]);
    }

}
