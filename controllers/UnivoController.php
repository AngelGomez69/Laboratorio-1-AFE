<?php 


namespace app\controllers;

use app\models\InicioForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\Controller;

class UnivoController extends Controller
{
    public function actionIndex()
    {
        $h1 = "UNIVO - Universidad de Oriente";
        $mensaje = "Yes, it is";
        $datetime = new \DateTime();

        return $this->render('index', [
            'h1' => $h1,
            'mensaje' => $mensaje,
            'datetime' => $datetime
        ]);
    }

    public function actionCalculadora()
    {
        $model = new InicioForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if ($model->operador == "Suma") {
                $resultado = $model->valor_a + $model->valor_b;
            } elseif ($model->operador == "Resta"){
                $resultado = $model->valor_a - $model->valor_b;
            } elseif ($model->operador == "Multiplicacion"){
                $resultado = $model->valor_a * $model->valor_b;
            } elseif ($model->operador == "Division"){
                $resultado = $model->valor_a / $model->valor_b;
            } else {
                $resultado = "Error";
            }

            $respuesta = ("El resultado es: " . $resultado);

           
            return $this->render('calculadora', ['model' => $model, 'respuesta' => $respuesta]);
        }

        return $this->render('calculadora', ['model' => $model]);
    }

}
?>