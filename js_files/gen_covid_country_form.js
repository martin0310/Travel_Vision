console.log(covid_country)
// console.log(Object.keys(country)); 
console.log(Object.values(covid_country)[0][0])

covid_country_count = Object.values(covid_country)[0].length // length : 4004 
// console.log(Object.values(country)[0][4003])

covid_country_arr = []
for(i = 0; i < covid_country_count; i++){
    if(!covid_country_arr.includes(Object.values(covid_country)[0][i])){
        covid_country_arr.push(Object.values(covid_country)[0][i])
    }
}

// console.log(country_arr)

for(i = 0; i < covid_country_arr.length; i++) {
    // generate new options
    temp_option_tag = document.createElement("option");
    covid_country_name = covid_country_arr[i];
    temp_option_tag.innerHTML = covid_country_name;
    temp_option_tag.setAttribute("value", covid_country_name);
    document.getElementById("country-dropdown").appendChild(temp_option_tag);

}


// Object.entries(country).map(item => {
//     console.log(item)
//   })
// console.log('aaa')

// country_covid_count = Object.keys(country)[0].length;
// console.log(country_covid_count)
// console.log(Object.keys(country)[0][0])

// country = JSON.stringify(country)
// print(country)
