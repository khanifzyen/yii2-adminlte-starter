<?php

namespace frontend\themes\adminlte\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\web\JsExpression;
//use app\assets\ApexChartsAsset; // Pastikan asset bundle ApexCharts Anda sudah dibuat

class ApexChart extends Widget
{
    public $series = []; // Data series chart
    public $chartOptions = []; // Opsi chart ApexCharts

    public function run()
    {
        //ApexChartsAsset::register($this->view); // Register asset bundle ApexCharts

        $chartId = $this->getId(); // ID unik untuk chart
        $chartContainer = Html::tag('div', '', ['id' => $chartId]); // Container chart

        $this->registerJs(); // Register JavaScript

        return $chartContainer;
    }

    protected function registerJs()
    {
        $seriesData = json_encode($this->series);
        $chartOptions = json_encode($this->chartOptions);


        $js = new JsExpression("
            const sales_chart_options = {
                series: {$seriesData},
                chart: JSON.parse('{$chartOptions}').chart,  
                legend: JSON.parse('{$chartOptions}').legend,
                colors: JSON.parse('{$chartOptions}').colors,
                dataLabels: JSON.parse('{$chartOptions}').dataLabels,
                stroke: JSON.parse('{$chartOptions}').stroke,
                xaxis: JSON.parse('{$chartOptions}').xaxis,
                tooltip: JSON.parse('{$chartOptions}').tooltip,
            };

            const sales_chart = new ApexCharts(
                document.querySelector('#{$this->getId()}'),
                sales_chart_options,
            );
            sales_chart.render();
        ");

        $this->view->registerJs($js);
    }
}
