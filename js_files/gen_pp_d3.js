svg_url = "http://www.w3.org/2000/svg";

// restaurant
// 建立子 tag
// col_d3_restaurant_tag = document.createElement("div");
// xxx_divtag = "col_d3_restaurant_tag";
// col_d3_restaurant_tag.setAttribute("id", xxx_divtag);
// document.getElementById("cost_of_living_d3").appendChild(col_d3_restaurant_tag);
// // svg tag
// svg_restaurant_tag = document.createElementNS(svg_url, "svg");
// svg_restaurant_tag.setAttribute("viewBox", '0 0 900 650');
// document.getElementById(xxx_divtag).appendChild(svg_restaurant_tag);
// // 參數設定
// svg_xxx_tag = svg_restaurant_tag;
// xxx_type = col_data["cost_of_livings_type"]["Restaurants"];
// xxx_emoji = col_restaurant_emoji;
// xxx_title = "Restaurants";
// // divtag 已賦值
// // import js
// js_restaurant_tag = document.createElement("script");
// js_restaurant_tag.type = "text/javascript";
// js_restaurant_tag.src = "js_files/col_bar_chart.js";
// document.getElementById(xxx_divtag).appendChild(js_restaurant_tag);

// market
// 建立子 tag
pp_d3_type_tag = document.createElement("div");
xxx_divtag = "pp_d3_type_tag";
pp_d3_type_tag.setAttribute("id", xxx_divtag);
document.getElementById("property_price_d3").appendChild(pp_d3_type_tag);

svg_type_tag = document.createElementNS(svg_url, "svg");
svg_type_tag.setAttribute("viewBox", '0 0 900 650');
document.getElementById(xxx_divtag).appendChild(svg_type_tag);

svg_xxx_tag = svg_type_tag;
xxx_type = pp_data["property_prices_type"][pp_type_var_js];
xxx_emoji = pp_emoji_type[pp_type_var_js];
xxx_title = pp_type_var_js;

js_type_tag = document.createElement("script");
js_type_tag.type = "text/javascript";
js_type_tag.src = "js_files/bar_chart.js";
document.getElementById(xxx_divtag).appendChild(js_type_tag);
