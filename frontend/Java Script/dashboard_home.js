var chart = new CanvasJS.Chart("tasks", {
	animationEnabled: true,
	title: {
		text: "Tasks"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 40, label: "Done"},
			{y: 60, label: "Not Done"},
			// {y: 7.06, label: "Baidu"},
			// {y: 4.91, label: "Yahoo"},
			// {y: 1.26, label: "Others"}
		]
	}]
});
chart.render();
var chart = new CanvasJS.Chart("doc_pat", {
	animationEnabled: true,
	title: {
		text: "Doctors vs patient"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 20, label: "Doctors"},
			{y: 80, label: "Patient"},
			// {y: 7.06, label: "Baidu"},
			// {y: 4.91, label: "Yahoo"},
			// {y: 1.26, label: "Others"}
		]
	}]
});
chart.render();
window.onload = function () {

	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,  
		title:{
			text: "Operation per last month"
		},
		axisY: {
			title: "Num of operation",
			// valueFormatString: "#0,,.",
			// suffix: "",
			stripLines: [{
			
				value: 10.7,
				label: "Average"
			}]
		},
		axisX: {
			title: "Week",
			// valueFormatString: "#0,,.",
			// suffix: "",
			
		},
		data: [{
			// yValueFormatString: "#0,,.",
			// xValueFormatString: "#0,,.",
			type: "spline",
			dataPoints: [
				{x: 1, y: 10 },
				{x: 2, y: 6},
				{x: 3, y: 18},
				{x: 4, y: 9},
			
			]
		}]
	});
	chart.render();
	
	}

