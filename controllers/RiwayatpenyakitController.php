<?php

namespace app\controllers;

use app\models\Riwayatpenyakit;
use app\models\RiwayatpenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
/**
 * RiwayatpenyakitController implements the CRUD actions for Riwayatpenyakit model.
 */
class RiwayatpenyakitController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Riwayatpenyakit models.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        // $provider = new SqlDataProvider([
        //     'sql' => 'SELECT * FROM riwayatpenyakit WHERE sapi_id=:sapi_id',
        //     'params' => [':sapi_id' => $id],
        // ]);
        $rows = (new \yii\db\Query())
        ->select(['namapenyakit','tanggalsakit','tanggalsembuh','pendiagnosa','keterangan','id'])
        ->from('riwayatpenyakit')
        ->where(['sapi_id' => $id])
        ->limit(10)
        ->all();
        
        $searchModel = new RiwayatpenyakitSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

        $data=$rows;
        return $this->printTable_($data);
    }

    private function printTable_($data)
    {   $num = 0;
        $content = "<h1  style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'><br><table class='table' style='margin-bottom:312px;'><tr>
        <th>Nama Penyakit</th>
        <th>Tanggal Sakit</th>
        <th>Tanggal Sembuh</th>
        <th>Pendiagnosa</th>
        <th>Keterangan</th>
        <th>Update(ID)</th>
      </tr>";
        foreach ($data as $datum) {
            $content .= "<tr>";
            foreach ($datum as $key => $value) {
                $content .= "<td><a href='#' id=$value onclick='tes_($value)'>$value</a></td>";
            }
            $content .= "</tr>";
        }
        $content .= '</table>';
        return $this->renderContent($content);
    }


    /**
     * Displays a single Riwayatpenyakit model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Riwayatpenyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Riwayatpenyakit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Riwayatpenyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Riwayatpenyakit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Riwayatpenyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Riwayatpenyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Riwayatpenyakit::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script>
     function tes_(a){
         if (a>0 && a<100){
        //  alert(a);
            location.href='index.php?r=riwayatpenyakit%2Fview&id='+a+''
    }
    
     }
     $(document).ready(function() {
         for (let i = 0; i < 100; i++) {
          $("#" + i).empty().append("<p style='color:blue;text'>UPDATE</p>");
            }
   
    });

   
     </script>