// var data =  [
//     [{'x':1,'y':0},{'x':2,'y':5},{'x':3,'y':10},{'x':4,'y':0},{'x':5,'y':6},{'x':6,'y':11},{'x':7,'y':9},{'x':8,'y':4},{'x':9,'y':11},{'x':10,'y':2}],
//     [{'x':1,'y':1},{'x':2,'y':6},{'x':3,'y':11},{'x':4,'y':1},{'x':5,'y':7},{'x':6,'y':12},{'x':7,'y':8},{'x':8,'y':3},{'x':9,'y':13},{'x':10,'y':3}],
//     [{'x':1,'y':2},{'x':2,'y':7},{'x':3,'y':12},{'x':4,'y':2},{'x':5,'y':8},{'x':6,'y':13},{'x':7,'y':7},{'x':8,'y':2},{'x':9,'y':4},{'x':10,'y':7}],
//     [{'x':1,'y':3},{'x':2,'y':8},{'x':3,'y':13},{'x':4,'y':3},{'x':5,'y':9},{'x':6,'y':14},{'x':7,'y':6},{'x':8,'y':1},{'x':9,'y':7},{'x':10,'y':9}],
//     [{'x':1,'y':4},{'x':2,'y':9},{'x':3,'y':14},{'x':4,'y':4},{'x':5,'y':10},{'x':6,'y':15},{'x':7,'y':5},{'x':8,'y':0},{'x':9,'y':8},{'x':10,'y':5}]
// ];

const msec_per_day = 86400000;

var total_days = (covid_end_time.getTime() - covid_start_time.getTime() + 1) / msec_per_day;

// TYPES:
// Active
// Confirmed
// Deaths
// Recovered
var covid_type = ['Active', 'Confirmed', 'Deaths', 'Recovered'];
var active_line = [];
var confirmed_line = [];
var deaths_line = [];
var recovered_line = [];
var cur_date = covid_start_time;
var covid_data_max_val = 0;
var covid_data_min_val = 999999999; // something very big
for(i = 0; i < total_days; i++) {
    // x 軸日期
    // y 軸人數

    // active
    // console.log(dateToString(cur_date));
    people_active = parseInt(covid_data_from_spark[dateToString(cur_date)][covid_type[0]], 10);
    active_line.push({'x' : i, 'y' : people_active});

    // confirmed
    people_confirmed = parseInt(covid_data_from_spark[dateToString(cur_date)][covid_type[1]], 10);
    confirmed_line.push({'x' : i, 'y' : people_confirmed});

    // deaths
    people_deaths = parseInt(covid_data_from_spark[dateToString(cur_date)][covid_type[2]], 10);
    deaths_line.push({'x' : i, 'y' : people_deaths});

    // recovered
    people_recovered = parseInt(covid_data_from_spark[dateToString(cur_date)][covid_type[3]], 10);
    recovered_line.push({'x' : i, 'y' : people_recovered});

    covid_data_max_val = Math.max(covid_data_max_val, people_active, people_confirmed, people_deaths, people_recovered);
    covid_data_min_val = Math.min(covid_data_min_val, people_active, people_confirmed, people_deaths, people_recovered);

    cur_date = new Date(cur_date.getTime() + msec_per_day);
}
var covid_data = [];
covid_data.push(active_line);
covid_data.push(confirmed_line);
covid_data.push(deaths_line);
covid_data.push(recovered_line);


var colors = [
    'lightblue', // Active
    'lightgreen',
    'yellow',
    'orange'
];

var margin = {top: 20, right: 30, bottom: 30, left: 50},
        width = 960 - margin.left - margin.right,
        height = 500 - margin.top - margin.bottom;

var x = d3.scale.linear()
        .domain([0 - total_days * 0.1, (total_days) + total_days * 0.1])
        .range([0, width]);

var y = d3.scale.linear()
        .domain([covid_data_min_val - (covid_data_max_val - covid_data_min_val) * 0.1, 
            covid_data_max_val + (covid_data_max_val - covid_data_min_val) * 0.1])
        .range([height, 0]);

//x軸設置
var xAxis = d3.svg.axis()
        .scale(x)
        .ticks(10)//調節刻度大小
        .tickSize(-height)
        .tickPadding(10)
        .tickSubdivide(true)
        .orient("bottom");

//y軸設置軸設置
var yAxis = d3.svg.axis()
        .scale(y)
        .tickPadding(10)
        .tickSize(-width)
        .tickSubdivide(true)
        .orient("left");

//縮放拖拽
var zoom = d3.behavior.zoom()
        .x(x)
        .y(y)
        .scaleExtent([-10, 10])//可縮放的範圍
        .on("zoom", zoomed);

var svg = d3.select("#health_care_d3").append("svg")
        .call(zoom)
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

svg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

svg.append("g")
        .attr("class", "y axis")
        .call(yAxis);

svg.append("g")
        .attr("class", "y axis")
        .append("text")
        .attr("class", "axis-label")
        .attr("transform", "rotate(-90)")
        .attr("y", (-margin.left)+5)
        .attr("x", -height/2)
        .text('');

svg.append("clipPath")
        .attr("id", "clip")
        .append("rect")
        .attr("width", width)
        .attr("height", height);

var line = d3.svg.line()
        .interpolate("linear")
        .x(function(d) { return x(d.x); })
        .y(function(d) { return y(d.y); });

svg.selectAll('.line')
        .data(covid_data)
        .enter()
        .append("path")
        .attr("class", "line")
        .attr("clip-path", "url(#clip)")
        .attr('stroke', function(d,i){
            return colors[i%colors.length];
        })
        .attr("d", line);


var points = svg.selectAll('.dots')
        .data(covid_data)
        .enter()
        .append("g")
        .attr("class", "dots")
        .attr("clip-path", "url(#clip)");

points.selectAll('.dot')
        .data(function(d, index){
            var a = [];
            d.forEach(function(point,i){
                a.push({'index': index, 'point': point});
            });
            return a;
        })
        .enter()
        .append('circle')
        .attr('class','dot')
        .attr("r", 4)
        .attr('fill', function(d,i){
            return colors[d.index%colors.length];
        })
        .attr("transform", function(d) {
            return "translate(" + x(d.point.x) + "," + y(d.point.y) + ")"; }
        )
        .on('mouseenter', function (a, idx) {
            cur_x_val = x(a.point.x);
            cur_y_val = y(a.point.y);

            console.log(cur_x_val + " " + cur_y_val);
        })
        .append('title')
        .text((a, idx) => {
            var ret_str = covid_type[a.index] + ":\n";
            ret_str += "Date: " + dateToString(new Date(covid_start_time.getTime() + msec_per_day * parseInt(a.point.x, 10))) + "\n";
            ret_str += "People: " + a.point.y;
            return ret_str;
        });

function zoomed() {
    svg.select(".x.axis").call(xAxis);
    svg.select(".y.axis").call(yAxis);
    svg.selectAll('path.line').attr('d', line);

    points.selectAll('circle').attr("transform", function(d) {
        return "translate(" + x(d.point.x) + "," + y(d.point.y) + ")"; }
    );
}

function dateToString(date) {
    return date.getFullYear() + "-"
        + dateMonthAddZero((date.getMonth() + 1))+ "-"
        + dateMonthAddZero(date.getDate());
}

function dateMonthAddZero(num) {
    return num < 10 ? "0" + num : num;
}
