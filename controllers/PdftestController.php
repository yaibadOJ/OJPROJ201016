<?php

namespace app\controllers;
use kartik\mpdf\Pdf;

class PdftestController extends \yii\web\Controller
{
    public function actionIndex()
    {
      //step 1 login proccesing
        //สร้างการเชื่อมต่อฐานข้อมูล
        $conn=\yii::$app->db;
        
        $sql='select*from com_type';
        //สร้างการQuery
        $cmd=$conn->createCommand($sql);
        // run Query
        $data=$cmd->queryAll();
        //$car=['big','kava','wave'];
        //การตั้งค่า view index มาแสดงPDF
       $content = $this->renderPartial('index',['data'=>$data]);
$pdf = new Pdf([
// รูปแบบคำสั่งPDF
'mode' => Pdf::MODE_UTF8,
// A4 paper format
'format' => Pdf::FORMAT_A4,
// portrait orientation
'orientation' => Pdf::ORIENT_PORTRAIT,
// stream to browser inline
'destination' => Pdf::DEST_BROWSER,
// your html content input
'content' => $content,
'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
// any css to be embedded if required
'cssInline' => 'body{font-family: "Garuda";font-size: 12pt;}',
// set mPDF properties on the fly
'options' => ['title' => 'บันทึกข ้อความ'],
// call mPDF methods on the fly
'methods' => [
//'SetHeader' => ['Krajee Report Header'],
//'SetFooter' => ['{PAGENO}'],
]
]);
// return the pdf output as per the destination setting
return $pdf->render();
    }

}
