<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DailyWeightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Index';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daily-weight-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <table class="table table-striped" style="border: 1px solid #e9ecef;">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Max</th>
                <th scope="col">Min</th>
                <th scope="col">Variance</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
      <tbody>
        <?php 
            $data = Yii::$app->db->createCommand('SELECT * FROM daily_weight ORDER BY date DESC;')->queryAll();
            $total_max = 0;
            $total_min = 0;
            $total_var = 0;

            foreach ($data as $d) {
                $total_max += $d['max'];
                $total_min += $d['min'];
                $total_var += ($d['max'] - $d['min']);

                echo '<tr>';
                    echo '<td>' . $d['date'] . '</td>';
                    echo '<td>' . $d['max'] . '</td>';
                    echo '<td>' . $d['min'] . '</td>';
                    echo '<td>' . ($d['max'] - $d['min']) . '</td>';
                    echo '<td><a href="'.Yii::$app->homeUrl.'?r=daily-weight/view&id='.$d['id'].'">Show</a></td>';
                    echo '<td><a href="'.Yii::$app->homeUrl.'?r=daily-weight/update&id='.$d['id'].'">Edit</a></td>';
                echo '</tr>';

            }

            echo '<tr>';
                echo '<td><b>Average</b></td>';
                echo '<td>'.$total_max/count($data).'</td>';
                echo '<td>'.$total_min/count($data).'</td>';
                echo '<td>'.$total_var/count($data).'</td>';
                echo '<td></td>';
                echo '<td></td>';
            echo '</tr>';
        ?>
        
      </tbody>
    </table>

    </div>
