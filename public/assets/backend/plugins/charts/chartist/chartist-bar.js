/**
*
*	BAR CHART EXAMPLES	
*
*/

// 1. BI-POLAR BAR CHART


var data = {
  labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
  series: [
    [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
  ]
};

var options = {
  high: 10,
  barWidth: 50,
  low: -10,
  height: '300px',
  axisX: {
    labelInterpolationFnc: function(value, index) {
      return index % 2 === 0 ? value : null;
    }
  }
};

new Chartist.Bar('#bi-polar-data-chart', data, options);



// 2. OVERLAPPING BARS ON MOBILE


	var data = {
	  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	  series: [
	    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
	    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
	  ]
	};

	var options = {
	  seriesBarDistance: 10,
	  height: '300px',
	};

	var responsiveOptions = [
	  ['screen and (max-width: 640px)', {
	    seriesBarDistance: 5,
	    axisX: {
	      labelInterpolationFnc: function (value) {
	        return value[0];
	      }
	    }
	  }]
	];

	new Chartist.Bar( '#o-b-o-m-data-chart', data, options, responsiveOptions );



// 3. ADD PEAK CIRCLES USING THE DRAW EVENTS


	var data = {
	  labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
	  series: [
	    [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
	  ]
	};

	var options = {
	  high: 10,
	  low: -10,
	  height: '300px',
	  axisX: {
	    labelInterpolationFnc: function(value, index) {
	      return index % 2 === 0 ? value : null;
	    }
	  }
	};


	// Create a simple bi-polar bar chart
	var chart = new Chartist.Bar('#a-p-c-d-data-chart', data , options );

	// Listen for draw events on the bar chart
	chart.on('draw', function(data) {
	  // If this draw event is of type bar we can use the data to create additional content
	  if(data.type === 'bar') {
	    // We use the group element of the current series to append a simple circle with the bar peek coordinates and a circle radius that is depending on the value
	    data.group.append(new Chartist.Svg('circle', {
	      cx: data.x2,
	      cy: data.y2,
	      r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 5
	    }, 'ct-slice-pie'));
	  }
});




// 4. MULTI-LINE LABELS


	var data = {
	  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
	  series: [
	    [60000, 40000, 80000, 70000],
	    [40000, 30000, 70000, 65000],
	    [8000, 3000, 10000, 6000]
	  ]
	};

	var options = {
	  seriesBarDistance: 10,
	  height: '300px',
	  axisX: {
	    offset: 60
	  },
	  axisY: {
	    offset: 80,
	    labelInterpolationFnc: function(value) {
	      return value + ' CHF'
	    },
	    scaleMinSpace: 15
	  }
	};


new Chartist.Bar( '#m-l-data-chart', data , options );




// 5. STACKED BAR CHART


	var datac = {
	  labels: ['Q1', 'Q2', 'Q3', 'Q4'],
	  series: [
	    [800000, 1200000, 1400000, 1300000],
	    [200000, 400000, 500000, 300000],
	    [100000, 200000, 400000, 600000]
	  ]
	};

	var options = {
	  stackBars: true,
	  height: '300px',
	  axisY: {
	    labelInterpolationFnc: function(value) {
	      return (value / 1000) + 'k';
	    }
	  }
	};





new Chartist.Bar('#s-b-data-chart', datac , options ).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 30px'
    });
  }
});





// 6. HORIZONTAL BAR CHART

	var date = {
	  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
	  series: [
	    [5, 4, 3, 7, 5, 10, 3],
	    [3, 2, 9, 5, 4, 6, 4]
	  ]
	};

	var options = {
	  seriesBarDistance: 10,
	  reverseData: true,
	  horizontalBars: true,
	  height: '300px',
	  axisY: {
	    offset: 70
	  }
	};

	new Chartist.Bar('#h-b-data-chart', data , options );


// 7. LABEL PLACEMENT

	var data =  {
	  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
	  series: [
	    [5, 4, 3, 7, 5, 10, 3],
	    [3, 2, 9, 5, 4, 6, 4]
	  ]
	};

	var options = {
		height: '300px',
	  axisX: {
	    // On the x-axis start means top and end means bottom
	    position: 'start'
	  },
	  axisY: {
	    // On the y-axis start means left and end means right
	    position: 'end'
	  }
	};


	new Chartist.Bar( '#l-p-data-chart', data , options );



// 8. DISTRIBUTED SERIES

	var data = {
	  labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
	  series: [20, 60, 120, 200, 180, 20, 10]
	};

	var options = {
	  distributeSeries: true,
	  height: '300px',
	};


	new Chartist.Bar('#d-s-data-chart', data , options );




// 9. EXTREME RESPONSIVE CONFIGURATION


	var data = {
	  labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
	  series: [
	    [5, 4, 3, 7],
	    [3, 2, 9, 5],
	    [1, 5, 8, 4],
	    [2, 3, 4, 6],
	    [4, 1, 2, 1]
	  ]
	};

	var options = {
	  // Default mobile configuration
	  stackBars: true,
	  height: '300px',
	  axisX: {
	    labelInterpolationFnc: function(value) {
	      return value.split(/\s+/).map(function(word) {
	        return word[0];
	      }).join('');
	    }
	  },
	  axisY: {
	    offset: 20
	  }
	};

	var responsiveOptions = [
	  // Options override for media > 400px
	  ['screen and (min-width: 400px)', {
	    reverseData: true,
	    horizontalBars: true,
	    axisX: {
	      labelInterpolationFnc: Chartist.noop
	    },
	    axisY: {
	      offset: 60
	    }
	  }],
	  // Options override for media > 800px
	  ['screen and (min-width: 800px)', {
	    stackBars: false,
	    seriesBarDistance: 10
	  }],
	  // Options override for media > 1000px
	  ['screen and (min-width: 1000px)', {
	    reverseData: false,
	    horizontalBars: false,
	    seriesBarDistance: 15
	  }]
	];



new Chartist.Bar('#e-r-c-data-chart', data , options , responsiveOptions );