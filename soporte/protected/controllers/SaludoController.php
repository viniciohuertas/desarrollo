<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class SaludoController extends Controller
{
    public function actionIndex()
    {
        $saludo='Hola como estas';
        $this->render('index',array('saludo'=>$saludo));
    }
}
?>
