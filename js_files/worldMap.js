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

// console.log(d3.csv('https://gist.githubusercontent.com/martin0310/0e57652a6eac0ea7150b99bff58adb27/raw/8cf830684ab45e8643150008b88852d767919df2/worldcities.csv',d => console.log(d)))
Promise.all([
  d3.tsv('https://unpkg.com/world-atlas@1.1.4/world/50m.tsv'),
  d3.json('https://unpkg.com/world-atlas@1.1.4/world/50m.json'),
  d3.csv('http://140.123.173.10/worldcities.csv')
]).then(([tsvData, topoJSONdata,worldCities]) => {
  
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
  console.log(worldCities)
 console.log(worldCities[0]['country'])
  // console.log(worldCities) type -- > object
  const countries = topojson.feature(topoJSONdata, topoJSONdata.objects.countries);
  g.selectAll('path').data(countries.features)
    .enter().append('path')
      .attr('class', 'country')
      .attr('d', pathGenerator)
      .on('click',(d) =>{
        // console.log(projection.invert(d3.mouse(d3.event.currentTarget)))
        // console.log(d3.mouse(d3.event.currentTarget))
        console.log(countryName[d.id])
    }
  )
      .append('title')
      .text(d => countryName[d.id])
      
      

    console.log(topoJSONdata)
    // console.log('aaa')
    
  //   const country = d3.selectAll('path')
  // console.log(typeof(country))
  // console.log(country)
});

// const country = svg.selectAll('path')
// console.log(country)
//  -->  not working