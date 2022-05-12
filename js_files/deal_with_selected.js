function dealWithSelectedCountry(selectedCountry){

    country_dropdown = document.getElementById("country-dropdown");

    while(country_dropdown.lastChild) {
        country_dropdown.removeChild(country_dropdown.lastChild);
    }

    temp_option_tag = document.createElement("option");
    temp_option_tag.innerHTML = selectedCountry;
    temp_option_tag.setAttribute("value", selectedCountry);
    console.log(temp_option_tag)
    document.getElementById("country-dropdown").appendChild(temp_option_tag);

    var setSelect = document.getElementById("country-dropdown");
    setSelect.value = selectedCountry;

    // console.log(setSelect)
    // setSelect.options[1].selected = true;
}

function dealWithSelectedCity(selectedCity){

    city_dropdown = document.getElementById("city-dropdown");
    console.log(city_dropdown)
    while(city_dropdown.lastChild) {
        city_dropdown.removeChild(city_dropdown.lastChild);
    }

    temp_option_tag = document.createElement("option");
    temp_option_tag.innerHTML = selectedCity;
    temp_option_tag.setAttribute("value", selectedCity);
    console.log(temp_option_tag)
    document.getElementById("city-dropdown").appendChild(temp_option_tag);

    var setSelect = document.getElementById("city-dropdown");
    setSelect.value = selectedCity;
    // console.log(selectedCity)

    // setSelect.options[1].selected = true;
}

function getWeatherData(city){  
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=6ba1ce1f333524ab31e1f761a4e197ff&units=metric')  
    .then(function(resp) { return resp.json() })
    .then(function(data) {
        document.getElementById("weather").innerHTML = ""
        document.getElementById("weather").innerHTML = "Current Temperature: " + data.main.temp + "<br>" + " Temperature Max: " + data.main.temp_max + "<br>" + "Temperature min: " +  data.main.temp_min + "<br>" + "Feels Like: " + data.main.feels_like + "<br>" + "Weather: " + data.weather[0].main
        console.log(data);
    })
  }

// const circle_tag = d3.selectAll('circle')
//             circle_tag
//             .on('click',(d) => {
//                 console.log('aaa')
//             // getWeatherData(city)
//             // dealWithSelected(selectedCountry,selectedCity)
//             });
// console.log(circle_tag)