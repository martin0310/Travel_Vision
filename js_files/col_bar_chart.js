sample = [];

// is digit()
DIGIT_EXPRESSION = /^\d$/;
isDigit = (character) => {
    return character && DIGIT_EXPRESSION.test(character);
};

// maxval (for domain)
max_val = -1.0;

k = Object.keys(xxx_type);
for(i = 0; i < Object.keys(xxx_type).length; i++) {

    // 處理 price median
    price_str = xxx_type[k[i]]["Median"];
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
    range_str = xxx_type[k[i]]["range"];
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
    console.log(xxx_emoji[k[i]]);
    if(xxx_emoji[k[i]]) {
        emoji = xxx_emoji[k[i]];
        console.log(emoji);
    }

    sample.push({
        the_type : emoji,
        price : tmp_price,
        range_h : range_high,
        range_l : range_low
    });
}

svg = d3.select('svg');
svgContainer = d3.select('#' + xxx_divtag);

margin = 120;
width = 900 - 2 * margin;
height = 650 - 2 * margin;

chart = svg.append('g')
    .attr('transform', `translate(${margin}, ${margin})`);

xScale = d3.scaleBand()
    .range([0, width])
    .domain(sample.map((s) => s.the_type))
    .padding(0.3)

yScale = d3.scaleLinear()
    .range([height, 0])
    .domain([0, max_val]);

// vertical grid lines
// makeXLines = () => d3.axisBottom()
//   .scale(xScale)

makeYLines = () => d3.axisLeft()
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

barGroups = chart.selectAll()
    .data(sample)
    .enter()
    .append('g')

barGroups
    .append('rect')
    .attr('class', 'bar')
    .attr('x', (g) => xScale(g.the_type))
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
        .attr('x', (a) => xScale(a.the_type) - 5)
        .attr('width', xScale.bandwidth() + 10)

    y = yScale(actual.price);
    h = yScale(actual.range_h);
    l = yScale(actual.range_l);

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
        .attr('x', (a) => xScale(a.the_type) + xScale.bandwidth() / 2)
        .attr('y', (a) => yScale(a.price) - 10)
        .attr('fill', 'white')
        .attr('text-anchor', 'middle')
        .text((a, idx) => {
        divergence = (a.price - actual.price).toFixed(1)
        
        let text = ''
        if (divergence > 0) text += '+'
        text += `${divergence}%`;

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
        .attr('x', (a) => xScale(a.the_type))
        .attr('width', xScale.bandwidth())

    chart.selectAll('#limit').remove()
    chart.selectAll('.divergence').remove()
    })

barGroups 
    .append('text')
    .attr('class', 'price')
    .attr('x', (a) => xScale(a.the_type) + xScale.bandwidth() / 2)
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
    .text(country_city_d3 + " " + xxx_title)

emoji_description_keys = Object.keys(xxx_emoji);
for(i = 0; i < emoji_description_keys.length; i++) {
    emoji_description_tag = document.createElement("h3");
    emoji_description_str = emoji_description_keys[i] + ": " + xxx_emoji[emoji_description_keys[i]] + "\n";
    emoji_description_tag.innerHTML = emoji_description_str;
    emoji_description_tag.setAttribute("color", "white");
    document.getElementById(xxx_divtag).appendChild(emoji_description_tag);
}