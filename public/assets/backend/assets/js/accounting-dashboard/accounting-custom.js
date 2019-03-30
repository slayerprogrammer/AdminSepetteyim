$(".l-a-scroll").mCustomScrollbar({
  axis:"y",
  autoHideScrollbar:true,
  setHeight: 355
});


function profitMonthlyRendered() {
  var chart = c3.generate({
    bindto: '#r_p_summary',
      data: {
          columns: [
              ['Expenses', 30],
              ['Revenue', 70],
              ['Sales', 120],
          ],
          type : 'donut',
          onclick: function (d, i) { console.log("onclick", d, i); },
          onmouseover: function (d, i) { console.log("onmouseover", d, i); },
          onmouseout: function (d, i) { console.log("onmouseout", d, i); }
      },
      color: {
        pattern: ['#f8538d', '#6156ce', '#00d1c1']
      },
      donut: {
        title: "Profit 21k",
        width: 20,
        label: {
          show: false
        }
      },
      legend: {
        hide: true
      }
  });
}

profitMonthlyRendered();


$('.p-l-tooltip').tooltip({
    template: '<div class="tooltip product-list-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
})

$(".product-sales-list .product-sales-body #ps1").sparkline([4,6,7,5,4,5,7,3,4,9,6,3], {
  type: 'line',
  width: '100',
  height: '30',
  lineColor: '#5247bd',
  lineWidth: 1,
  spotRadius: 3.5,
  fillColor: 'transparent',
  spotColor: '#1ad271',
  spotRadius: 0,
  minSpotColor: '#5247bd',
  maxSpotColor: '#5247bd'
});

$(".product-sales-list .product-sales-body #ps2").sparkline([3,4,5,3,4,6,4,2,8,7,8,6], {
  type: 'line',
  width: '100',
  height: '30',
  lineColor: '#f58b22',
  lineWidth: 1,
  spotRadius: 3.5,
  fillColor: 'transparent',
  spotColor: '#1ad271',
  spotRadius: 0,
  minSpotColor: '#f58b22',
  maxSpotColor: '#f58b22'
});

$(".product-sales-list .product-sales-body #ps3").sparkline([4,6,2,5,4,6,5,3,4,3,2,8], {
  type: 'line',
  width: '100',
  height: '30',
  lineColor: '#07dabf',
  lineWidth: 1,
  spotRadius: 3.5,
  fillColor: 'transparent',
  spotColor: '#1ad271',
  spotRadius: 0,
  minSpotColor: '#07dabf',
  maxSpotColor: '#07dabf'
});

$('.product-sales li a').on('shown.bs.tab', function(event) {
    $(".product-sales-list .product-sales-body #ps4").sparkline([4,6,9,5,4,5,7,4,3,4,6,3], {
      type: 'line',
      width: '100',
      height: '30',
      lineColor: '#5247bd',
      lineWidth: 1,
      spotRadius: 3.5,
      fillColor: 'transparent',
      spotColor: '#1ad271',
      spotRadius: 0,
      minSpotColor: '#5247bd',
      maxSpotColor: '#5247bd'
    });
    $(".product-sales-list .product-sales-body #ps5").sparkline([4,6,5,8,6,5,5,3,4,7,6,2], {
      type: 'line',
      width: '100',
      height: '30',
      lineColor: '#f58b22',
      lineWidth: 1,
      spotRadius: 3.5,
      fillColor: 'transparent',
      spotColor: '#1ad271',
      spotRadius: 0,
      minSpotColor: '#f58b22',
      maxSpotColor: '#f58b22'
    });
    $(".product-sales-list .product-sales-body #ps6").sparkline([4,6,7,5,4,5,6,9,4,6,6,3], {
      type: 'line',
      width: '100',
      height: '30',
      lineColor: '#07dabf',
      lineWidth: 1,
      spotRadius: 3.5,
      fillColor: 'transparent',
      spotColor: '#1ad271',
      spotRadius: 0,
      minSpotColor: '#07dabf',
      maxSpotColor: '#07dabf'
    });  
});

$("#r-chart").sparkline([1,2,3,3,0,2,1,2,3,4,2,3], {
    type: 'bar',
    height: '130',
    barWidth: 14,
    barSpacing: 3,
    zeroAxis: false,
    barColor: '#24ccda'
});

$("#r-chart").sparkline([2,3,5,6,6,2,2,1,1,2,4,5], {
    type: 'line',
    fillColor: null,
    lineWidth: 1.4,
    spotRadius: 2.5,
    composite: true
});

$("#e-chart").sparkline([ [2, 1.1], [2, 1.3], [2.5, 1.5], [2.2, 1.2], [2.3, 1.4], [2.4, 1.3], [2.6, 1.2], [2.1, 1.4], [2, 1.3], [2, 1.2], [2.3, 1.3], [2.5, 1.5] ], {
    type: 'bar',
    height: '130',
    barWidth: 14,
    barSpacing: 4,
    zeroAxis: false,
    barColor: '#1abc9c',
    stackedBarColor: ['#1abc9c', '#e9ecef']
});

$('.revenue li a, .expanditure li a, .r-p-summary li a').on('shown.bs.tab', function(event) {
  $("#ry-chart").sparkline([1,2,3,3,0,2,1,2,3,4,2,3], {
      type: 'bar',
      height: '130',
      barWidth: 14,
      barSpacing: 3,
      zeroAxis: false,
      barColor: '#816cfd'
  });
  $("#ry-chart").sparkline([2,3,5,6,6,2,2,1,1,2,4,5], {
      type: 'line',
      fillColor: null,
      lineWidth: 1.4,
      spotRadius: 2.5,
      composite: true
  });

  $("#ey-chart").sparkline([ [2, 1.1], [2, 1.3], [2.5, 1.5], [2.2, 1.2], [2.3, 1.4], [2.4, 1.3], [2.6, 1.2], [2.1, 1.4], [2, 1.3], [2, 1.2], [2.3, 1.3], [2.5, 1.5] ], {
      type: 'bar',
      height: '130',
      barWidth: 14,
      barSpacing: 4,
      zeroAxis: false,
      barColor: '#1abc9c',
      stackedBarColor: ['#00d1c1', '#e9ecef']
  });

  var chart = c3.generate({
    bindto: '#r_p_summary_yearly',
      data: {
          columns: [
              ['Expenses', 60],
              ['Revenue', 50],
              ['Sales', 110],
          ],
          type : 'donut',
          onclick: function (d, i) { console.log("onclick", d, i); },
          onmouseover: function (d, i) { console.log("onmouseover", d, i); },
          onmouseout: function (d, i) { console.log("onmouseout", d, i); }
      },
      color: {
        pattern: ['#f8538d', '#6156ce', '#00d1c1']
      },
      donut: {
        title: "Profit 243k",
        width: 20,
        label: {
          show: false
        }
      },
      legend: {
         hide: true
      }
  });

  profitMonthlyRendered();

})


// Default Calendar

$('.calendar').pignoseCalendar();
collapse('panel');
