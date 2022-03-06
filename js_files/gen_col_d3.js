// restaurant
svg_url = "http://www.w3.org/2000/svg";
svg_restaurant_tag = document.createElementNS(svg_url, "svg");
svg_restaurant_tag.setAttribute("viewBox", '0 0 900 650');
document.getElementById("cost_of_living_d3").appendChild(svg_restaurant_tag);

const sample = [];

// is digit()
const DIGIT_EXPRESSION = /^\d$/;
const isDigit = (character) => {
    return character && DIGIT_EXPRESSION.test(character);
};

// maxval (for domain)
max_val = -1.0;

k = Object.keys(col_data["cost_of_livings_type"]["Restaurants"]);
for(i = 0; i < Object.keys(col_data["cost_of_livings_type"]["Restaurants"]).length; i++) {

    // 處理 price median
    price_str = col_data["cost_of_livings_type"]["Restaurants"][k[i]]["Median"];
    for(j = 0; j < price_str.length; j++) {
        if(!(price_str[j] == '.' || isDigit(price_str[j]))) {
            price_str = price_str.replace(price_str[j], ' ');
        }
    }
    price_str = price_str.replaceAll(' ', '');
    tmp_price = parseFloat(price_str, 10);

    // 處理 range
    range_low = 0;
    range_high = 0;
    range_str = col_data["cost_of_livings_type"]["Restaurants"][k[i]]["range"];
    for(j = 0; j < range_str.length; j++) {
        if(range_str[j] == '-') {
            range_low = parseFloat(range_str.substring(0, j).replaceAll(',', ''));
            range_high = parseFloat(range_str.substring(j+1, range_str.length).replaceAll(',', ''));
            break;
        }
    }

    console.log(range_low + " >>> " + range_high);

    if(range_high > max_val) {
        // 整體高出 10% 😐
        max_val = range_high * 1.1;
    }

    emoji = "<?>";
    console.log(col_restaurant_emoji[k[i]]);
    if(col_restaurant_emoji[k[i]]) {
        emoji = col_restaurant_emoji[k[i]];
        console.log(emoji);
    }

    sample.push({
        restaurant_type : emoji,
        price : tmp_price,
        range_h : range_high,
        range_l : range_low
    });
}

const svg = d3.select('svg');
const svgContainer = d3.select('#cost_of_living_d3');

const margin = 120;
const width = 900 - 2 * margin;
const height = 650 - 2 * margin;

const chart = svg.append('g')
    .attr('transform', `translate(${margin}, ${margin})`);

const xScale = d3.scaleBand()
    .range([0, width])
    .domain(sample.map((s) => s.restaurant_type))
    .padding(0.3)

const yScale = d3.scaleLinear()
    .range([height, 0])
    .domain([0, max_val]);

// vertical grid lines
// const makeXLines = () => d3.axisBottom()
//   .scale(xScale)

const makeYLines = () => d3.axisLeft()
    .scale(yScale)

chart.append('g')
    .attr('transform', `translate(0, ${height})`)
    .call(d3.axisBottom(xScale));

chart.append('g')
    .call(d3.axisLeft(yScale));

// vertical grid lines
// chart.append('g')
//   .attr('class', 'grid')
//   .attr('transform', `translate(0, ${height})`)
//   .call(makeXLines()
//     .tickSize(-height, 0, 0)
//     .tickFormat('')
//   )

chart.append('g')
    .attr('class', 'grid')
    .call(makeYLines()
    .tickSize(-width, 0, 0)
    .tickFormat('')
    )

const barGroups = chart.selectAll()
    .data(sample)
    .enter()
    .append('g')

barGroups
    .append('rect')
    .attr('class', 'bar')
    .attr('x', (g) => xScale(g.restaurant_type))
    .attr('y', (g) => yScale(g.price))
    .attr('height', (g) => height - yScale(g.price))
    .attr('width', xScale.bandwidth())
    .on('mouseenter', function (actual, i) {
    d3.selectAll('.price')
        .attr('opacity', 0)

    d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 0.6)
        .attr('x', (a) => xScale(a.restaurant_type) - 5)
        .attr('width', xScale.bandwidth() + 10)

    const y = yScale(actual.price);
    const h = yScale(actual.range_h);
    const l = yScale(actual.range_l);

    // 點 1：(x1, y1)
    // 點 2：(x2, y2)
    // 兩點連成一線😎
    line = chart.append('line')
        .attr('id', 'limit')
        .attr('x1', 0)
        .attr('y1', l)
        .attr('x2', width)
        .attr('y2', l)

    line = chart.append('line')
        .attr('id', 'limit')
        .attr('x1', 0)
        .attr('y1', h)
        .attr('x2', width)
        .attr('y2', h)

    barGroups.append('text')
        .attr('class', 'divergence')
        .attr('x', (a) => xScale(a.restaurant_type) + xScale.bandwidth() / 2)
        .attr('y', (a) => yScale(a.price) - 10)
        .attr('fill', 'white')
        .attr('text-anchor', 'middle')
        .text((a, idx) => {
        const divergence = (a.price - actual.price).toFixed(1)
        
        let text = ''
        if (divergence > 0) text += '+'
        text += `${divergence}`

        return idx !== i ? text : '';
        })

    })
    .on('mouseleave', function () {
    d3.selectAll('.price')
        .attr('opacity', 1)

    d3.select(this)
        .transition()
        .duration(300)
        .attr('opacity', 1)
        .attr('x', (a) => xScale(a.restaurant_type))
        .attr('width', xScale.bandwidth())

    chart.selectAll('#limit').remove()
    chart.selectAll('.divergence').remove()
    })

barGroups 
    .append('text')
    .attr('class', 'price')
    .attr('x', (a) => xScale(a.restaurant_type) + xScale.bandwidth() / 2)
    .attr('y', (a) => yScale(a.price) - 10)
    .attr('text-anchor', 'middle')
    .text((a) => `${a.price}`)

svg
    .append('text')
    .attr('class', 'label')
    .attr('x', -(height / 2) - margin)
    .attr('y', margin / 2.4)
    .attr('transform', 'rotate(-90)')
    .attr('text-anchor', 'middle')
    .text('Price💰')

svg.append('text')
    .attr('class', 'label')
    .attr('x', width / 2 + margin)
    .attr('y', height + margin * 1.7)
    .attr('text-anchor', 'middle')
    .text('Item🍽️')

svg.append('text')
    .attr('class', 'title')
    .attr('x', width / 2 + margin)
    .attr('y', 70)
    .attr('text-anchor', 'middle')
    .text(country_city_d3 + " Restaurants")
