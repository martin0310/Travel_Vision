// console.log(Object.keys(country_city).length);
country_count = Object.keys(country_city).length;
for(i = 0; i < country_count; i++) {
    // console.log(i);
    temp_option_tag = document.createElement("option");
    country_name = Object.keys(country_city)[i];
    temp_option_tag.innerHTML = country_name;
    temp_option_tag.setAttribute("value", country_name);
    document.getElementById("country-dropdown").appendChild(temp_option_tag);
}

// if country selected
function coutrySelected(country){

    city_dropdown = document.getElementById("city-dropdown");
        
    // clear previous options
    while(city_dropdown.lastChild) {
        city_dropdown.removeChild(city_dropdown.lastChild);
    }
    select_text = "---Select city---";
    temp_option_tag = document.createElement("option");
    temp_option_tag.innerHTML = select_text;
    city_dropdown.appendChild(temp_option_tag);

    city_count = country_city[country].length

    for(i = 0; i < city_count; i++) {
        // generate new options
        temp_option_tag = document.createElement("option");
        city_name = country_city[country][i];
        temp_option_tag.innerHTML = city_name;
        temp_option_tag.setAttribute("value", city_name);
        city_dropdown.appendChild(temp_option_tag);
    }
}