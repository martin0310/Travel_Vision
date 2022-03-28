/* 前處理 col_data */
const sample = [
    {
    language: 'Rust',
    value: 78.9,
    color: '#000000'
    },
    {
    language: 'Kotlin',
    value: 75.1,
    color: '#00a2ee'
    },
    {
    language: 'Python',
    value: 68.0,
    color: '#fbcb39'
    },
    {
    language: 'TypeScript',
    value: 67.0,
    color: '#007bc8'
    },
    {
    language: 'Go',
    value: 65.6,
    color: '#65cedb'
    },
    {
    language: 'Swift',
    value: 65.1,
    color: '#ff6e52'
    },
    {
    language: 'JavaScript',
    value: 61.9,
    color: '#f9de3f'
    },
    {
    language: 'C#',
    value: 60.4,
    color: '#5d2f8e'
    },
    {
    language: 'F#',
    value: 59.6,
    color: '#008fc9'
    },
    {
    language: 'Clojure',
    value: 59.6,
    color: '#507dca'
    }
];

/* 前處理結束 */

var h_over_w_ratio = 650 / 960;

var width = document.getElementById('cost_of_living_d3').clientWidth;
var height = width * h_over_w_ratio;

//We add our svg to the div area
var svg = d3.select('#cost_of_living_d3')
            .append('svg')
            .attr('width', width)
            .attr('height', height);

const xScale = d3.scaleBand()
    .range([0, width])
    .domain(sample.map((s) => s.language))
    .padding(0.3)

const yScale = d3.scaleLinear()
    .range([height, 0])
    .domain([0, 100]);

// ???

//We will build a basic function to handle window resizing.
function resize() {
    width = document.getElementById('cost_of_living_d3').clientWidth;
    height = width * h_over_w_ratio;
    d3.select('#cost_of_living_d3 svg')
        .attr('width', width)
        .attr('height', height);
}
window.onresize = resize;
// Call our resize function if the window size is changed.