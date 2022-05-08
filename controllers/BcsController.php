<?php

namespace app\controllers;

use app\models\Bcs;
use app\models\BcsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BcsController implements the CRUD actions for Bcs model.
 */
class BcsController extends Controller
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
     * Lists all Bcs models.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        $rows = (new \yii\db\Query())
        ->select(['tulangbelakang','tulangiga','lemakdada','lemakekor','penyusutanotot','fisiksapi','id','time'])
        ->from('bcs')
        ->where(['sapi_id' => $id])
        ->limit(10)
        ->all();
        
        // $searchModel = new RiwayatpenyakitSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

      
        $searchModel = new BcsSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

        $data=$rows;
        return $this->printTable_($data);
    }
    private function printTable_($data)
    {   $num = 0;
        $numa =0;
        $a='z';
        $content = "<h1 id='cek' style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'><br><table class='table' style='margin-bottom:312px;  margin-left:250px;width:650px;'><tr>
        <th>No</th>
        <th>View (ID)</th>
        <th>timestamp</th>
        <th>status</th>
      
      </tr>";
        foreach ($data as $datum) {
            $num++;
            

            $content .= "<tr>";
            foreach ($datum as $key => $value) {
                if($a=='z' OR $a=='aa' OR $a=='ab' OR $a=='ac' OR $a=='ad' OR $a=='ae' OR $a=='af'){
                    $a++;
                }
                else if($a=='ag'){
                    $a ='aa';
                }
                $content .= "<p style='display:none' id=$a$num value='$value'>$value</p>";
                if($key =='id'){
                    $j=$numa+1;
                $content .= "<td id='i$numa' value='$value'>$j</td><td><a href='#' id =$value onclick='tes_($value)'>$value</a></td>";
                }
            }
            $numa++;
            $content .= "<td id='as$numa' value='$value'>$value</td><td id='ar$numa' value='$value'>BCS</td></tr>";
        }
        $content .= '</table>';
        return $this->renderContent($content);
    }
    /**
     * Displays a single Bcs model.
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
     * Creates a new Bcs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bcs();

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
     * Updates an existing Bcs model.
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
     * Deletes an existing Bcs model.
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
     * Finds the Bcs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Bcs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bcs::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
 <script>
     function tes_(a){
         if (a>0 && a<100){
        //  alert(a);
            location.href='index.php?r=bcs%2Fview&id='+a+''
    }
     }
     $(document).ready(function() {
         for (let i = 0; i < 100; i++) {
          $("#" + i).empty().append("<p style='color:blue;text'>Lihat</p>");
            }
            for (let i = 1; i < 100; i++) {
            var a1 = $("#aa" +i).text();
            var b1 = $("#ab" +i).text();
            var c1 = $("#ac" +i).text();
            var d1 = $("#ad" +i).text();
            var e1 = $("#ae" +i).text();
            var f1 = $("#af" +i).text();
            console.log(a1,b1,c1,d1,e1,f1);
            if (a1 == 'Ya' && b1 == 'Ya' && c1 =='Tidak' && d1 == 'Tidak' && e1 == 'Ya' && f1 == 'Ya'){
                $("#ar" + i).empty().append("<p style='color:black;text'>1 BCS Score (Kurus)</p>");
            }
            if (a1 == 'Ya' && b1 == 'Ya' && c1 =='Tidak' && d1 == 'Tidak' && e1 == 'Ya' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:black;text'>2 BCS Score (Kurus)</p>");
            }
            if (a1 == 'Ya' && b1 == 'Ya' && c1 =='Tidak' && d1 == 'Tidak' && e1 == 'Sebagian' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:black;text'>3 BCS Score (Kurus)</p>");
            }
            if (a1 == 'Sebagian' && b1 == 'Sebagian' && c1 =='Tidak' && d1 == 'Tidak' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:magenta;text'>4 BCS Score (Diambang Aman)</p>");
            }
            if (a1 == 'Tidak' && b1 == 'Sebagian' && c1 =='Tidak' && d1 == 'Tidak' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:green;text'>5 BCS Score (Ideal/Menengah)</p>");
            }
            if (a1 == 'Tidak' && b1 == 'Tidak' && c1 =='Sebagian' && d1 == 'Tidak' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:green;text'>6 BCS Score (Ideal/Menengah)</p>");
            }
            if (a1 == 'Tidak' && b1 == 'Tidak' && c1 =='Ya' && d1 == 'Tidak' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:purple;text'>7 BCS Score (Gemuk)</p>");
            }
            if (a1 == 'Tidak' && b1 == 'Tidak' && c1 =='Ya' && d1 == 'Sebagian' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:purple;text'>8 BCS Score (Gemuk)</p>");
            }
            if (a1 == 'Tidak' && b1 == 'Tidak' && c1 =='Ya' && d1 == 'Ya' && e1 == 'Tidak' && f1 == 'Tidak'){
                $("#ar" + i).empty().append("<p style='color:purple;text'>9 BCS Score (Gemuk)</p>");
            }
        }
   
    });
    
   
     </script>
    