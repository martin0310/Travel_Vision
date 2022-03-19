const svg = d3.select('svg');

const width = +svg.attr('width'); // -- > type : number
const height = +svg.attr('height'); // -- > type : number

// const projection = d3.geoMercator();
const projection = d3.geoNaturalEarth1();
const pathGenerator = d3.geoPath().projection(projection);

// d3.tsv('https://unpkg.com/browse/world-atlas@1.1.4/world/110m.tsv')
//     .then(data => console.log(data));

// // d.name for title
// //d.iso_n3 for id    

// d3.json('https://unpkg.com/world-atlas@1.1.4/world/110m.json')
//     .then(data =>{
//         const countries = topojson.feature(data,data.objects.countries);
//         console.log(countries);

//         const paths = svg.selectAll('path')
//                         .data(countries.features)
//                         .enter().append('path')
//                         .attr('class','country')
//                         .attr('d', d => pathGenerator(d))
//                         .append('title')
//                         .text('Hello');
//                         // .attr('class','title');
                        
//     });

const g = svg.append('g');

// g.append('path')
//     .attr('class', 'sphere')
//     .attr('d', pathGenerator({type: 'Sphere'}));

svg.call(d3.zoom().on('zoom', () => {
  g.attr('transform', d3.event.transform);
//   g.on('click',() =>
//       console.log('aaa')
//   )
}));

Promise.all([
  d3.tsv('https://unpkg.com/world-atlas@1.1.4/world/50m.tsv'),
  d3.json('https://unpkg.com/world-atlas@1.1.4/world/50m.json')
]).then(([tsvData, topoJSONdata]) => {
  
  const countryName = tsvData.reduce((accumulator, d) => {
    accumulator[d.iso_n3] = d.name;
    return accumulator;
  }, {});
  
  /*
  const countryName = {};
  tsvData.forEach(d => {
    countryName[d.iso_n3] = d.name;
  });
  */
  
  const countries = topojson.feature(topoJSONdata, topoJSONdata.objects.countries);
  g.selectAll('path').data(countries.features)
    .enter().append('path')
      .attr('class', 'country')
      .attr('d', pathGenerator)
      .on('click',() =>
            console.log('aaa')
        )
      .append('title')
      .text(d => countryName[d.id]);
  
});