from bs4 import BeautifulSoup
import requests
import json

cost_of_living_html = requests.get('https://www.numbeo.com/cost-of-living/')

# print(cost_of_living_html.text)

soup = BeautifulSoup(cost_of_living_html.text, "html.parser")

country_data = soup.find(id='country').select("option")

#print(country_data)

# print country_list -------------
country_list = []
country_index = 0
for element in country_data:
    # the first(0) element is SELECT
    if country_index != 0:
        # print(element.text)
        country_list.append(element.text)
    country_index = country_index + 1
# country_list[0].append('aaa')
print(country_list)
print('-----------')

#----------------

country_city_tuple_list = []

# FAKE TUPLE HAHA 20220128
# make tuple list (先記錄 country)
for e in country_list:

    country_city_tuple_list.append('(' + e + ',not_a_city)')
# --------------------------------------------

#Create country-city dictionary ----------

country_city_dict = {}
for i in range(0,len(country_list)):
    country_url_right_half = country_list[i].replace(' ','+')
    country_url = 'https://www.numbeo.com/cost-of-living/country_result.jsp?country=' + country_url_right_half
    print(country_url)
    country_temp_html = requests.get(country_url)
    soup_temp_country = BeautifulSoup(country_temp_html.text, "html.parser")
    city_list = []
    city_data = soup_temp_country.find(id='city').select("option")
    city_index = 0
    for city_element in city_data:
        # the first(0) element is SELECT
        if city_index != 0:
            city_list.append(city_element.text)
        city_index = city_index + 1
    country_city_dict_key = country_list[i]
    # print(type(country_city_dict_key))
    # country_city_dict.update(country_city_dict_key = city_list)
    country_city_dict[country_city_dict_key] = city_list

print(country_city_dict)

with open('country_city_dict.json', "w") as outfile:
    json.dump(country_city_dict, outfile)
#------------------------------------------

# make tuple list (city)

for e in country_city_dict:

    for ee in country_city_dict[e]:

        country_city_tuple_list.append('(' + e + ',' + ee + ')')

# ---------------------------------------------

# print(country_city_tuple_list)

#Create cost_of_living_Dictionary 

crawl_country_city_dictionary = {}

total_len = len(country_city_tuple_list)

current_proc = 1

# limit_country = 3
# limit_count = 1
for e in country_city_tuple_list:

    print(e + " [" + str(current_proc) + " / " + str(total_len) + "]", end='')

    if e[e.find(','):].replace(',', '').replace(')', '').__eq__('not_a_city'):

        # if(limit_count == limit_country):

        #     break

        # limit_count = limit_count + 1
        
        # print(e)
        
        crawl_country_html = requests.get('https://www.numbeo.com/cost-of-living/country_result.jsp?country=' + e[1:e.find(',')])
        soup2 = BeautifulSoup(crawl_country_html.text, "lxml")
        crawl_country_data = soup2.find_all("div", class_="category_title")
        type_item_count_dict = {"Restaurants" : 8, "Markets" : 19, "Transportation" : 8, "Utilities (Monthly)" : 3, "Sports And Leisure" : 3, "Childcare" : 2, "Clothing And Shoes" : 4, "Rent Per Month" : 4, "Buy Apartment Price" : 2, "Salaries And Financing" : 2}
        crawl_country_data2 = soup2.select("table.data_wide_table tr td")
        crawl_cost_of_living_dictionary_temp = {}
        crawl_country_city_dictionary[e] = []
        # crawl_country_city_dictionary[e].append()
        crawl_country_col_type_dict = {}
        counter = 0
        for element in crawl_country_data:

            item_count = type_item_count_dict[element.getText()]

            # print(counter)

            temp_dict = {}

            for i in range(counter, counter + item_count):

                # 因為 albania_data2 的數量是 item_count * 3，所以 i 要 x3 然後 +1, +2
                temp_dict[crawl_country_data2[i*3].text] = {"Median" : crawl_country_data2[i*3+1].text.replace('\n', '').replace('\xa0', ''), "range" : crawl_country_data2[i*3+2].text.replace('\n', '')}

            crawl_country_col_type_dict[element.getText()] = temp_dict

            counter = counter + item_count

        # print(albania_col_type_dict)

        crawl_cost_of_living_dictionary_temp['cost_of_livings_type'] = crawl_country_col_type_dict

        crawl_country_city_dictionary[e].append(crawl_cost_of_living_dictionary_temp)

        # print(albania_dict)

    # a city
    else:

        # 左右瓜弧刪掉
        # space 換 dash
        city_name = e[e.find(','):].replace(',', '').replace(')', '').replace('(', '').replace(' ', '-')

        country_name = e[1:e.find(',')].replace(' ','-')  

        if country_name.__eq__('United-States'):

            # "city, state"
            temp = e[e.find(',') + 1:-1]

            city_name = temp[0:temp.find(',')]

            country_name = temp[temp.find(',') + 2:] + country_name

        # print("CITY NAME: " + city_name + " XDD :DD")

        crawl_city_html = requests.get('https://www.numbeo.com/cost-of-living/in/' + city_name + '-' + country_name)

        if "Cannot find city id for" in crawl_city_html.text:

            crawl_city_html = requests.get('https://www.numbeo.com/cost-of-living/in/' + city_name)

        soup2 = BeautifulSoup(crawl_city_html.text, "lxml")
        crawl_city_data = soup2.find_all("div", class_="category_title")
        type_item_count_dict = {"Restaurants" : 8, "Markets" : 19, "Transportation" : 8, "Utilities (Monthly)" : 3, "Sports And Leisure" : 3, "Childcare" : 2, "Clothing And Shoes" : 4, "Rent Per Month" : 4, "Buy Apartment Price" : 2, "Salaries And Financing" : 2}
        crawl_city_data2 = soup2.select("table.data_wide_table tr td")
        crawl_cost_of_living_dictionary_temp = {}
        crawl_country_city_dictionary[e] = []
        # crawl_country_city_dictionary[e].append()
        crawl_city_col_type_dict = {}
        counter = 0
        for element in crawl_city_data:

            item_count = type_item_count_dict[element.getText()]

            # print(counter)

            temp_dict = {}

            for i in range(counter, counter + item_count):

                # 因為 albania_data2 的數量是 item_count * 3，所以 i 要 x3 然後 +1, +2
                temp_dict[crawl_city_data2[i*3].text] = {"Median" : crawl_city_data2[i*3+1].text.replace('\n', '').replace('\xa0', ''), "range" : crawl_city_data2[i*3+2].text.replace('\n', '')}

            crawl_city_col_type_dict[element.getText()] = temp_dict

            counter = counter + item_count

        # print(albania_col_type_dict)

        crawl_cost_of_living_dictionary_temp['cost_of_livings_type'] = crawl_city_col_type_dict

        crawl_country_city_dictionary[e].append(crawl_cost_of_living_dictionary_temp)

        # print(albania_dict)

    print(" <Done>")
    current_proc = current_proc + 1


# print(crawl_country_city_dictionary)
with open("country_city_dictionary.json", "w") as outfile:
    json.dump(crawl_country_city_dictionary, outfile)
#----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
'''
# test code
albania_html = requests.get('https://www.numbeo.com/cost-of-living/country_result.jsp?country=Albania')

soup = BeautifulSoup(albania_html.text, "lxml")

albania_data = soup.find_all("div", class_="category_title")


#2022/01/26 test_code ------------ crawl detailed data


type_item_count_dict = {"Restaurants" : 8, "Markets" : 19, "Transportation" : 8, "Utilities (Monthly)" : 3, "Sports And Leisure" : 3, "Childcare" : 2, "Clothing And Shoes" : 4, "Rent Per Month" : 4, "Buy Apartment Price" : 2, "Salaries And Financing" : 2}
type_count = len(type_item_count_dict)

albania_data2 = soup.select("table.data_wide_table tr td")
print("++++++++++++++++++++++++++++++++++")
print(type(albania_data2)) # bs4.element.ResultSet
# print(albania_data2)

albania_dict = {
        
        # "cost_of_livings_type" : [

        #       "restaurant" : ["Water" : ["$100", "$90~110"],
        #                                        "beer" : []],

        #         "restaurant2" : [{}, {}, {}]

        # ]
}


albania_col_type_dict = {}
counter = 0
for e in albania_data:

    item_count = type_item_count_dict[e.getText()]

    print(counter)

    temp_dict = {}

    for i in range(counter, counter + item_count):

        # 因為 albania_data2 的數量是 item_count * 3，所以 i 要 x3 然後 +1, +2
        temp_dict[albania_data2[i*3].text] = {"Median" : albania_data2[i*3+1].text.replace('\n', '').replace('\xa0', ''), "range" : albania_data2[i*3+2].text.replace('\n', '')}

    albania_col_type_dict[e.getText()] = temp_dict

    counter = counter + item_count

# print(albania_col_type_dict)

albania_dict['cost_of_livings_type'] = albania_col_type_dict

# print(albania_dict)
'''

'''
result = ''
i = 0
for element in albania_data2:
    # print(type(element))
    # if(i%3 == 1):
    #     print(element.text, end = '')
    # else:
    #     print(element.text)
    # result = result + element.text + '\n'
    # i = i + 1
    
    # print(element.text)

    haha = 0
'''
    

# print(result)
# print(albania_data2[0].text)
# print(albania_data2[1].text, end = '')
# print(albania_data2[2].text)
# print(albania_data2[3].text)

# -----------------------------------------


# country_html = []

# i = 1
# for c in country_data:

#     print("Crawling " + c.getText() + " (" + str(i) + "/" + str(len(country_data)) + ")")

#     t = requests.get('https://www.numbeo.com/cost-of-living/country_result.jsp?country=' + c.getText())

#     country_html.append(t)

#     i = i + 1


# print(country_html[3])

# 'https://www.numbeo.com/cost-of-living/country_result.jsp?country='

print("END")
