<!DOCTYPE html>
<html>

<head>
  <title>Active Graphs and Charts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <link rel=STYLESHEET type="text/css" href="../css/960.css" />
  <link rel=STYLESHEET type="text/css" href="../css/jpprodstyle.css" />
  <script src="../js/jpgraph.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>


<!-- Title area -->
<div class='container_12 header'>
  <div class='grid_4'>
    <a href='http://www.jpowered.com'><img style='border-width: 0px;' src='../img/jpowered.png' width='225' height='60' align='left' alt='JPowered.com' /></a>
  </div>
  <div class='grid_7 omega product_title'>
    <h1>Active Graphs and Charts</h1>

  </div>
  <div class='grid_1 omega'>
    <img src='../img/area-70x73.png' width='70' height='73' alt='Active Graphs and Charts' />
  </div>
</div>

<!-- top menu bar -->
<div class='container_12'>
    <div class='grid_12 innm'>
    <ul>
    <li> <a href="http://www.jpowered.com/graph_chart_collection/index.htm">Graph Home</a> </li>

    <li> <a href="http://www.jpowered.com/graph_chart_collection/order.htm" title="Pricing Options and obtaining License keys">Pricing / License Options</a> </li>
    <li> <a href="../examples/index.html" title="View the Online Demos here">Examples</a> </li>
    <li> <a href="../documentation/index.html">Documentation</a> </li>
    <li> <a href="http://www.jpowered.com/support.htm" title="Help and Support">Support</a> </li>

    </ul>
    </div>
</div>

<!-- main content -->
<div class='container_12 main_content'>

    <p>&nbsp;</p>
    <div class='grid_2 alpha vertical_menu'>
      <ul>
          <li><a href="../GettingStarted.html">Getting Started</a></li>

      <ul>
      <h3>Documentation</h3>
      <ul>
          <li><a href="../documentation/addingGraphs.html">Adding Graphs to a Web Pages</a></li>
          <li><a href="../documentation/settingParameters.html">Setting Parameters and Configuration Options</a></li>
          <li><a href="../documentation/settingData.html">Setting Data</a></li>
          <li><a href="../documentation/settingSeriesDefinitions.html">Series Definitions</a></li>

          <li><a href="../documentation/parameters.html">Parameter Reference</a></li>
          <li><a href="../documentation/colorDefinitions.html">Color Definitions</a></li>
          <li><a href="../documentation/removingTheLicenseBanner.html">Removing the license banner</a></li>
      </ul>
      <h3>Tutorials</h3>
      <ul>
          <li><a href="http://www.jpowered.com/graph_chart_collection/tutorials/dynamic-data-from-databases.html">Dynamic Data from Databases</a></li>

          <li><a href="http://www.jpowered.com/graph_chart_collection/tutorials/reading-values-from-spreadsheets.html">Linking to Spreadsheets</a></li>           
          <li><a href="http://www.jpowered.com/graph_chart_collection/tutorials/dynamic-date-labels.html">Dynamic Date Labels</a></li>   
          <li><a href="http://www.jpowered.com/graph_chart_collection/tutorials/dynamic-time-labels.html">Dynamic Time Labels</a></li>   
          <li><a href="http://www.jpowered.com/graph_chart_collection/tutorials/auto-update.html">Automatic Update</a></li>                        
      </ul>
      <h3>Examples</h3>
      <a href="../examples/index.html"><img src='../img/bar-140x130.png' width='140' height='130' alt='Demos and Examples' /></a>
      <ul>

        <li><a href="barGraphVerticalStacked.html">Bar Vertical Stacked</a></li>
        <li><a href="areaGraph.html">Area</a></li>
        <li><a href="lineGraph.html">Line Graph</a></li>
        <li><a href="lineGraphDualScale.html">Dual Scales</a></li>
        <li><a href="xyScatterGraph.html">X Y Scatter</a></li>
        <li><a href="pieChart.html">Pie Chart</a></li>

        <li><a href="doughnutChart.html">Doughnut Chart</a></li>
        <li><a href="lineGraphDualScale.html">Line Graph Dual Scale</a></li>
        <li><a href="barGraphHorizontal.html">Bar Horizontal</a></li>
        <li><a href="barGraphHorizontalStacked.html">Bar Horizontal Stacked</a></li>
        <li><a href="barGraphVertical.html">Bar Vertical</a></li>
        <li><a href="barGraphVerticalNegativeValues.html">Bar Vertical Negative Values</a></li>

        <li><a href="barGraphVerticalStackedBackground.html">Bar Vertical Stacked with Background</a></li>
        <li><a href="barGraphVerticalStackedNegativeValues.html">Bar Graph Vertical Stacked Negative Values</a></li>
      <ul>

    </div>

    <div class='grid_10'>
    <p>&nbsp;</p>
        <h1>Pie Chart</h1>

    <p>Mouseover the pie segments to see the popup display</p>

    <div id="graph"></div>

    <script type="text/javascript" charset="utf-8">
    window.onload = function () {

        /**
         * set graph data
         */
        var data = ({series1data : new Array('6097','5970','3230','7236','3236','4723','546'),
                     series2data : new Array('500','1200','1800','1235','4231','5738','8236'),
                     series3data : new Array('1200','7000','1560','6230','2230','3720','4230')
                    });

        /**
         * draw the graph
         */
        var graph = new JpGraph(
                'pie',
                'graph',
                data,
                {
                 width                 : 800,
                 height                : 500,
                 backgroundColor       : '#f9f5da',
                 pre                   : "$ ",
                 ndecplaces            : 0,
                 series1               : "cx: 150; cy: 180; r: 60; title: Europe;",
                 series2               : "cx: 600; cy: 180; r: 60; title: America;",
                 series3               : "cx: 370; cy: 350; r: 90; title: Asia;",
                 legendLabels          : "Product A : #88c; Product B : #2c3; Product C : #c23; Product D : #f80; Product E : #c0c; Product F : #08f; Product G : #0f8",
                 legendPadding         : 6,
                 legendRoundRadius     : 3,
                 legendOpacity         : 1.0,
                 legendBackground      : true,
                 legendBackgoundColor  : '#ffffff',
                 legendBorderColor     : '#888',
                 legendBorderWidth     : 1,
                 legendStyle           : 'vertical',
                 legendXpos            : 700,
                 legendYpos            : 20
                });
    }
    </script>

    <p>Here is the HTML source which produced the graph:-</p>
    <textarea class="lines_20 code">
    <div id="graph"></div>

    <script type="text/javascript" charset="utf-8">
    window.onload = function () {

        /**
         * set graph data
         */
        var data = ({series1data : new Array('6097','5970','3230','7236','3236','4723','546'),
                     series2data : new Array('500','1200','1800','1235','4231','5738','8236'),
                     series3data : new Array('1200','7000','1560','6230','2230','3720','4230')
                    });

        /**
         * draw the graph
         */
        var graph = new JpGraph(
                'pie',
                'graph',
                data,
                {
                 width                 : 800,
                 height                : 500,
                 backgroundColor       : '#f9f5da',
                 pre                   : "$ ",
                 ndecplaces            : 0,
                 series1               : "cx: 150; cy: 180; r: 60; title: Europe;",
                 series2               : "cx: 600; cy: 180; r: 60; title: America;",
                 series3               : "cx: 370; cy: 350; r: 90; title: Asia;",
                 legendLabels          : "Product A : #88c; Product B : #2c3; Product C : #c23; Product D : #f80; Product E : #c0c; Product F : #08f; Product G : #0f8",
                 legendPadding         : 6,
                 legendRoundRadius     : 3,
                 legendOpacity         : 1.0,
                 legendBackground      : true,
                 legendBackgoundColor  : '#ffffff',
                 legendBorderColor     : '#888',
                 legendBorderWidth     : 1,
                 legendStyle           : 'vertical',
                 legendXpos            : 700,
                 legendYpos            : 20
                });
    }
    </script>
    </textarea>

    </div>

</div>

<div class='footer'>

<!-- bottom menu bar -->
<div class='container_12'>
    <div class='grid_12 innm'>
    <ul>
    <li> <a href="http://www.jpowered.com/graph_chart_collection/index.htm">Graph Home</a> </li>

    <li> <a href="http://www.jpowered.com/graph_chart_collection/order.htm" title="Pricing Options and obtaining License keys">Pricing / License Options</a> </li>
    <li> <a href="../examples/index.html" title="View the Online Demos here">Examples</a> </li>
    <li> <a href="../documentation/index.html">Documentation</a> </li>
    <li> <a href="http://www.jpowered.com/support.htm" title="Help and Support">Support</a> </li>

    </ul>
    </div>
</div>

<!--  footer -->
<div class='container_12'>
  <div class="grid_12 mc">[<a href="http://www.jpowered.com/"> JPowered.com </a>] [<a href="http://www.jpowered.com/support.htm" title="For Help and Support, contact us here">Support </a>]</div>
  <div class="grid_12 cprt">Copyright &copy 2011 Neutron Solutions Limited - All rights reserved</div>

</div>

</div>

</body>
</html>