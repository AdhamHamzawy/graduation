<!DOCTYPE html>
<html>
    <head>

      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <link rel="stylesheet" href="css/bootstrap.min.css">
              <link rel="stylesheet" href="css/bootstrap-theme.min.css">
              <link rel="stylesheet" href="css/fontAwesome.css">
              <link rel="stylesheet" href="css/hero-slider.css">
              <link rel="stylesheet" href="css/owl-carousel.css">
              <link rel="stylesheet" href="css/datepicker.css">
              <link rel="stylesheet" href="css/templatemo-style.css">

              <script src="https://igniteui.com/js/modernizr.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn-na.infragistics.com/igniteui/latest/js/infragistics.core.js"></script>
<script src="https://cdn-na.infragistics.com/igniteui/latest/js/infragistics.dv.js"></script>
<link href="https://cdn-na.infragistics.com/igniteui/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet"></link>
<link href="https://cdn-na.infragistics.com/igniteui/latest/css/structure/infragistics.css" rel="stylesheet"></link>

              <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

              <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>



      <?php
include "menu.php";
       ?>

       <style>
       <?php
       include "css/gallery.css";
        ?>
       </style>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
      <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

<div id="legend" style="float: left"></div>

<div class="DataTable" style="overflow:auto; padding: 5%" id="Results">  <!-- Requests block -->
    			<table class="table table-striped table-hover">
    			<thead>
    		 <tr>
           <th>Building name</th>
     			<th>Pillar Name</th>
     			<th>Defects found</th>
    			<th>Status</th>
          <th>Action</th>
    		</thead>
        		<tbody>
        		<!-- Requests database php-->
            <tr>
              <td>1</td>
              <td>1</td>
              <td>1. ...
              2. ...
            3. ...</td>
              <td> <div id="chart"></div> </td>
              <td> <a href="#"> Request Expert Review</a> </td>
            </tr>
            <tr>
              <td>2</td>
              <td>3</td>
              <td>1. ...
              2. ...</td>
              <td> <div id="chart" class="ui-doughnut ui-corner-all ui-widget-content" touch-action: none; user-select: none; width: 100%; height: 100px; position: relative;>

<div style="position: absolute; top: 0px; left: 0px; width: 43px; height: 100px;" class=""><canvas style="position: absolute; top: 0px; left: 0px; width: 43px; height: 100px;" width="39" height="90"></canvas><canvas style="position: absolute; top: 0px; left: 0px; width: 43px; height: 100px;" width="39" height="90"></canvas><canvas style="position: absolute; top: 0px; left: 0px; width: 43px; height: 100px;" width="39" height="90"></canvas><canvas style="position: absolute; top: 0px; left: 0px; touch-action: auto; user-select: auto; width: 43px; height: 100px;" width="39" height="90"></canvas></div>

              </div> </td>
              <td> Pending Expert's review... </td>
            </tr>
            <tr>
              <td>5</td>
              <td>7</td>
              <td>1. ...
              2. ...</td>
              <td> <div id="chart"></div> </td>
              <td> Expert Modified Results! </td>
            </tr>
    			</tbody>
    		</table>
    		</div>

          <?php
          include "footer.php";
           ?>

        </body>


<script>

$(function () {

           var data = [
               { "Type": "Defective",  "Pop2008": 133 },
               { "Type": "Safe",  "Pop2008": 1140},
               ];

           $("#chart").each(function() {
  $( this ).igDoughnutChart({
               width: "100%",
               height: "100px",
               series:
               [

                   {
                       name: "Pop2008",
                       labelMemberPath: "Type",
                       valueMemberPath: "Pop2008",
                       dataSource: data,
                       legend: { element: "legend" },
                       formatLabel: function (context) {
                           return context.itemLabel + " (" + context.item.Pop2008 + ")";
                       }
                   }
               ],
               // the legend items get refreshed every time the doughnut is re-rendered
               // use this event to update the legend items labels
               holeDimensionsChanged: function () {
                   updateLegendItems();
               }
           });

           // the legend items have the value associated with the specific series in parentheses ()
           // remove this text making the legend applicable for both series
           function updateLegendItems() {
               $(".ui-chart-legend-item-text > span").each(function () {
                   var txt = $(this).text(),
                   idx = txt.lastIndexOf("(");
                   if (idx != -1) {
                       $(this).text(txt.substr(0, idx));
                   } else {
                       return false;
                   }
               });
           }

           updateLegendItems();
       });

     });
            </script>

    </html>
