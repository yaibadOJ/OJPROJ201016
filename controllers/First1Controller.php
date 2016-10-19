<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title='ยินดีต้อนรับ';
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'สมบัติ', 'lname' => 'ใจกว้าง', 'email' => 'sombat@gmail.com']
        ];
        
        return $this->render('index',['title'=>$title,'person'=>$person]);
    }

}
