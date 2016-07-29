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
    