<script src="public/jquery.min.js"></script>
		<script src="public/bootstrap/js/bootstrap.min.js"></script>
		<script src="public/bootstrap/js/chart.min.js"></script>
		<script src="public/bootstrap/js/chart-data.js"></script>
		<script src="public/bootstrap/js/easypiechart.js"></script>
		<script src="public/bootstrap/js/easypiechart-data.js"></script>
		<script src="public/bootstrap/js/bootstrap-datepicker.js"></script>
		<script src="public/bootstrap/js/custom.js"></script>
		<script>
			window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
		</script>
			
	</body>
	</html>