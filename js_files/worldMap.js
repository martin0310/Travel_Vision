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
const g_tag = d3.select('g');

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
  d3.json('http://140.123.173.10/World_Cities_Lat_Long.json')
]).then(([tsvData, topoJSONdata,World_Cities_Lat_Long]) => {
  
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
  console.log(World_Cities_Lat_Long)
  // console.log(World_Cities_Lat_Long) type -- > object
  const countries = topojson.feature(topoJSONdata, topoJSONdata.objects.countries);
  g.selectAll('path').data(countries.features)
    .enter().append('path')
      .attr('class', 'country')
      .attr('d', pathGenerator)
      .on('click',(d) =>{
        country = countryName[d.id]
        const circle_romove = d3.selectAll('circle').remove()
        for(var city in World_Cities_Lat_Long[country]){
          // console.log(d3.mouse(d3.event.currentTarget)) -- > x y 座標
          // console.log(projection.invert(d3.mouse(d3.event.currentTarget))) -- > 經緯度
          // console.log(d3.mouse(d3.event.currentTarget)[0]) -- > x 軸座標
          // console.log(countryName[d.id])
          // console.log(World_Cities_Lat_Long[country])
          // console.log(World_Cities_Lat_Long[country][city])
          // console.log(+World_Cities_Lat_Long[country][city]['Lat'])
          // console.log(typeof(+World_Cities_Lat_Long[country][city]['Lat']))
          // console.log(this)
          long_lat_list = projection([+World_Cities_Lat_Long[country][city]['Long'],+World_Cities_Lat_Long[country][city]['Lat']])
          console.log(projection([+World_Cities_Lat_Long[country][city]['Long'],+World_Cities_Lat_Long[country][city]['Lat']]))

          g_tag.append('circle')
          .attr('cx',long_lat_list[0]).attr('cy',long_lat_list[1])
          .attr('r','0.5').attr('fill','yellow')
          
          // svg.append('circle')
          // .attr('cx',projection.invert(d3.mouse(+World_Cities_Lat_Long[country][city]['Lat']))).attr('cy',projection.invert(d3.mouse(+World_Cities_Lat_Long[country][city]['Long'])))
          // .attr('r','0.5').attr('fill','red')
        }
        // g.append('circle').attr('cx',projection.invert(d3.mouse(d3.event.currentTarget)[0]))
        // .attr('cy',projection.invert(d3.mouse(d3.event.currentTarget)[1]))
        // .attr('fill','red')
        // console.log(projection.invert(d3.mouse(d3.event.currentTarget)[0]))
        // console.log(typeof(projection.invert(d3.mouse(d3.event.currentTarget)[0])))

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