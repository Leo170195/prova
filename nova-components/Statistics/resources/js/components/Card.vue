<template>
    <div id="chartdiv" style="height: 600px"></div>
</template>

<script>
import * as am4core from "@amcharts/amcharts4/core";
import * as am4charts from "@amcharts/amcharts4/charts";
import am4themes_kelly from "@amcharts/amcharts4/themes/kelly";
import am4themes_animated from "@amcharts/amcharts4/themes/animated";
export default {
    props: [
        'card',
    ],

    methods : {
        barChart(data){
            // Themes begin
            am4core.useTheme(am4themes_kelly);
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            let chart = am4core.create("chartdiv", am4charts.XYChart);

            // Add data
            chart.data = data;
            chart.scrollbarX = new am4core.Scrollbar();
            chart.scrollbarY = new am4core.Scrollbar();

            // Create axes

            let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "name";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;

            categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
            if (target.dataItem && target.dataItem.index & 2 == 2) {
                return dy + 25;
            }
            return dy;
            });

            let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minGridDistance = 100;

            // Create series
            let series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueY = "price";
            series.dataFields.categoryX = "name";
            series.name = "Visits";
            series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
            series.columns.template.fillOpacity = .8;

            let columnTemplate = series.columns.template;
            columnTemplate.strokeWidth = 1;
            columnTemplate.strokeOpacity = 1;

            return chart;
        } 
    },

    mounted() {
        axios.get('/nova-vendor/statistics/get').then( (response) => {
            this.chart = this.barChart(response.data)
        })
    },
    destroyed() {
        this.chart.dispose()
    }
}
</script>
