	var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};



 $(document).ready(function(){





 getMonthsQuestions();
	var barChartData = {
		labels : ["January","February","March","April","May","June","July"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(48, 164, 255, 0.2)",
				strokeColor : "rgba(48, 164, 255, 0.8)",
				highlightFill : "rgba(48, 164, 255, 0.75)",
				highlightStroke : "rgba(48, 164, 255, 1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}

	var pieData = [
			{
				value: 300,
				color:"#30a5ff",
				highlight: "#62b9fb",
				label: "Blue"
			},
			{
				value: 50,
				color: "#ffb53e",
				highlight: "#fac878",
				label: "Orange"
			},
			{
				value: 100,
				color: "#1ebfae",
				highlight: "#3cdfce",
				label: "Teal"
			},
			{
				value: 120,
				color: "#f9243f",
				highlight: "#f6495f",
				label: "Red"
			}

		];

	var doughnutData = [
				{
					value: 300,
					color:"#30a5ff",
					highlight: "#62b9fb",
					label: "Blue"
				},
				{
					value: 50,
					color: "#ffb53e",
					highlight: "#fac878",
					label: "Orange"
				},
				{
					value: 100,
					color: "#1ebfae",
					highlight: "#3cdfce",
					label: "Teal"
				},
				{
					value: 120,
					color: "#f9243f",
					highlight: "#f6495f",
					label: "Red"
				}

			];

	var radarData = {
	    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
	    datasets: [
	        {
	            label: "My First dataset",
	            fillColor: "rgba(220,220,220,0.2)",
	            strokeColor: "rgba(220,220,220,1)",
	            pointColor: "rgba(220,220,220,1)",
	            pointStrokeColor: "#fff",
	            pointHighlightFill: "#fff",
	            pointHighlightStroke: "rgba(220,220,220,1)",
	            data: [65, 59, 90, 81, 56, 55, 40]
	        },
	        {
	            label: "My Second dataset",
	            fillColor : "rgba(48, 164, 255, 0.2)",
	            strokeColor : "rgba(48, 164, 255, 0.8)",
	            pointColor : "rgba(48, 164, 255, 1)",
	            pointStrokeColor : "#fff",
	            pointHighlightFill : "#fff",
	            pointHighlightStroke : "rgba(48, 164, 255, 1)",
	            data: [28, 48, 40, 19, 96, 27, 100]
	        }
	    ]
	};

	var polarData = [
		    {
		    	value: 300,
		    	color: "#1ebfae",
		    	highlight: "#38cabe",
		    	label: "Teal"
		    },
		    {
		    	value: 140,
		    	color: "#ffb53e",
		    	highlight: "#fac878",
		    	label: "Orange"
		    },
		    {
		    	value: 220,
		    	color:"#30a5ff",
		    	highlight: "#62b9fb",
		    	label: "Blue"
		    },
		    {
		    	value: 250,
		    	color: "#f9243f",
		    	highlight: "#f6495f",
		    	label: "Red"
		    }

	];
});

	function getMonthsQuestions(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
						/* the route pointing to the post function */
						url: '/getAdminData',
						type: 'GET',
						/* send the csrf-token and the input to the controller */

						dataType: 'JSON',
						/* remind that 'data' is the response of the AjaxController */

						success: function (data) {
            console.log("done");
              const jan=data[2]['01'];
					  	const feb=data[2]["02"];
						  const	 march=data[2]["03"];
							const april=data[2]["04"];
							const may=data[2]["05"];
						  const	 jun=data[2]["06"];
						  const	 july=data[2]["07"];
						  const	 oug=data[2]["08"];
						  const	 sep=data[2]["09"];
						  const	 oct=data[2]["10"];
							const nov=data[2]["11"];
					    const		 des=data[2]["12"];
// ///////////////////////////////////////////////
							const jan1=data[1]['01'];
							const feb1=data[1]["02"];
							const	 march1=data[1]["03"];
							const april1=data[1]["04"];
							const may1=data[1]["05"];
							const	 jun1=data[1]["06"];
							const	 july1=data[1]["07"];
							const	 oug1=data[1]["08"];
							const	 sep1=data[1]["09"];
							const	 oct1=data[1]["10"];
							const nov1=data[1]["11"];
							const		 des1=data[1]["12"];

         console.log(jan1,feb1,march1,april1,may1,jun1,july1,oug1,sep1,oct1,nov1,des1);

							 var lineChartData = {
								 labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],

								 datasets : [
									 {
										 label: "My First dataset",
										 fillColor : "rgba(220,210,120,0.2)",
										 strokeColor : "rgba(220,20,20,0.6)",
										 pointColor : "rgba(220,220,220,1)",
										 pointStrokeColor : "#fff",
										 pointHighlightFill : "#fff",
										 pointHighlightStroke : "rgba(220,220,220,1)",
										 data : [jan1,feb1,march1,april1,may1,jun1,july1,oug1,sep1,oct1,nov1,des1]
									 },
									 {
										 label: "My Second dataset",
										 fillColor : "rgba(48, 164, 255, 0.2)",
										 strokeColor : "rgba(48, 164, 255, 1)",
										 pointColor : "rgba(48, 164, 255, 1)",
										 pointStrokeColor : "#fff",
										 pointHighlightFill : "#fff",
										 pointHighlightStroke : "rgba(48, 164, 255, 1)",
										 data : [jan,feb,march,april,may,jun,july,oug,sep,oct,nov,des]

									 }
								 ]

							 };


							 
							 var chart1 = document.getElementById("line-chart").getContext("2d");
								window.myLine = new Chart(chart1).Line(lineChartData, {
								responsive: true,
								scaleLineColor: "rgba(0,0,0,.2)",
								scaleGridLineColor: "rgba(0,0,0,.05)",
								scaleFontColor: "#c5c7cc"
								});

						}
				});

	}
