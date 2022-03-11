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
col_d3_market_tag = document.createElement("div");
xxx_divtag = "col_d3_market_tag";
col_d3_market_tag.setAttribute("id", xxx_divtag);
document.getElementById("cost_of_living_d3").appendChild(col_d3_market_tag);

svg_market_tag = document.createElementNS(svg_url, "svg");
svg_market_tag.setAttribute("viewBox", '0 0 900 650');
document.getElementById(xxx_divtag).appendChild(svg_market_tag);

svg_xxx_tag = svg_market_tag;
xxx_type = col_data["cost_of_livings_type"]["Markets"];
xxx_emoji = col_market_emoji;
xxx_title = "Markets";

js_market_tag = document.createElement("script");
js_market_tag.type = "text/javascript";
js_market_tag.src = "js_files/col_bar_chart.js";
document.getElementById(xxx_divtag).appendChild(js_market_tag);
