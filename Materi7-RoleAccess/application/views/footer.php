    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="../assets/js/chart.js"></script>
    
    <script type="text/javascript">
    	var data = {
    		labels: [
			<?php foreach ($buku->result() as $row)
    		{ ?>
    		"<?php print $row->jenis ?>",
    		<?php } ?>
    		],
    		datasets: [

    		{
    			label: "Data Buku",
    			fillColor: "rgba(151,187,205,0.2)",
    			strokeColor: "rgba(151,187,205,1)",
    			pointColor: "rgba(151,187,205,1)",
    			pointStrokeColor: "#fff",
    			pointHighlightFill: "#fff",
    			pointHighlightStroke: "rgba(151,187,205,1)",
    			data: [
			<?php foreach ($buku->result() as $row)
    		{ ?>
    		<?php print $row->jml ?>,
    		<?php } ?>
    			]
    		}
    		]
    	};
    	var pdata = [
        <?php 
            foreach ($buku->result() as $row)
            {
             print '{';
             print 'value: ' . $row->jml . ', ';
             print 'color: "#46BFBD", ';
             print 'highlight: "#5AD3D1", ';
             print 'label: "' . $row->jenis . '", ';
             print '},';
            }
            ?>
    	]

    	var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    	var lineChart = new Chart(ctxl).Line(data);

    	var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    	var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
</body>

</html>