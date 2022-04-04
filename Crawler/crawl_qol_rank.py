import json
from bs4 import BeautifulSoup
import requests

rank_qol_html = requests.get('https://www.numbeo.com/quality-of-life/rankings_current.jsp?displayColumn=0')
soup_qol = BeautifulSoup(rank_qol_html.text, "html.parser")
rank_qol_data = soup_qol.find(id='t2').select('td')


rank_crime_html = requests.get('https://www.numbeo.com/crime/rankings_current.jsp')
soup_crime = BeautifulSoup(rank_crime_html.text, "html.parser")
rank_crime_data = soup_crime.find(id='t2').select('td')

rank_pollution_html = requests.get('https://www.numbeo.com/quality-of-life/rankings_current.jsp?displayColumn=7')
soup_pollution = BeautifulSoup(rank_pollution_html.text, "html.parser")
rank_pollution_data = soup_pollution.find(id='t2').select('td')

rank_traffic_html = requests.get('https://www.numbeo.com/quality-of-life/rankings_current.jsp?displayColumn=6')
soup_traffic = BeautifulSoup(rank_traffic_html.text, "html.parser")
rank_traffic_data = soup_traffic.find(id='t2').select('td')

rank_hc_html = requests.get('https://www.numbeo.com/quality-of-life/rankings_current.jsp?displayColumn=3')
soup_hc = BeautifulSoup(rank_hc_html.text, "html.parser")
rank_hc_data = soup_hc.find(id='t2').select('td')

#Crime 
rank_crime_data_dict = {}
for i in range(len(rank_crime_data)):
    if i % 4 == 0:
        # print(rank_qol_data[i])
        rank_crime_data_dict[int(i/4) + 1] = []
        rank_crime_data_dict[int(i/4) + 1].append(rank_crime_data[int(i) + 1].text)
        rank_crime_data_dict[int(i/4) + 1].append(rank_crime_data[int(i) + 2].text)
        rank_crime_data_dict[int(i/4) + 1].append(rank_crime_data[int(i) + 3].text)

#QOL    
rank_qol_data_dict = {}
for i in range(len(rank_qol_data)):
    if i % 3 == 0:
        # print(rank_qol_data[i])
        rank_qol_data_dict[int(i/3) + 1] = []
        rank_qol_data_dict[int(i/3) + 1].append(rank_qol_data[int(i) + 1].text)
        rank_qol_data_dict[int(i/3) + 1].append(rank_qol_data[int(i) + 2].text)

#Pollution
rank_pollution_data_dict = {}
sort_rank_pollution_data_dict_list =  []
final_rank_pollution_data_dict = {}
for i in range(len(rank_pollution_data)):
    if i % 3 == 0:
        # print(rank_qol_data[i])
        rank_pollution_data_dict[rank_pollution_data[i + 2].text] = rank_pollution_data[i + 1].text
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 1].text)
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 2].text)
        # rank_pollution_data_dict = sorted(rank_pollution_data_dict.keys())
        sort_rank_pollution_data_dict_list = sorted(rank_pollution_data_dict.keys(), reverse=True)
for element in sort_rank_pollution_data_dict_list:
    final_rank_pollution_data_dict[rank_pollution_data_dict[element]] = element


#Traffic
rank_traffic_data_dict = {}
sort_rank_traffic_data_dict_list =  []
final_rank_traffic_data_dict = {}
for i in range(len(rank_traffic_data)):
    if i % 3 == 0:
        # print(rank_qol_data[i])
        rank_traffic_data_dict[rank_traffic_data[i + 2].text] = rank_traffic_data[i + 1].text
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 1].text)
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 2].text)
        # rank_pollution_data_dict = sorted(rank_pollution_data_dict.keys())
        sort_rank_traffic_data_dict_list = sorted(rank_traffic_data_dict.keys(), reverse=True)
for element in sort_rank_traffic_data_dict_list:
    final_rank_traffic_data_dict[rank_traffic_data_dict[element]] = element


#HC
rank_hc_data_dict = {}
sort_rank_hc_data_dict_list =  []
final_rank_hc_data_dict = {}
for i in range(len(rank_hc_data)):
    if i % 3 == 0:
        # print(rank_qol_data[i])
        rank_hc_data_dict[rank_hc_data[i + 2].text] = rank_hc_data[i + 1].text
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 1].text)
        # rank_pollution_data_dict[int(i/3) + 1].append(rank_pollution_data[int(i) + 2].text)
        # rank_pollution_data_dict = sorted(rank_pollution_data_dict.keys())
        sort_rank_hc_data_dict_list = sorted(rank_hc_data_dict.keys(), reverse=True)
for element in sort_rank_hc_data_dict_list:
    final_rank_hc_data_dict[rank_hc_data_dict[element]] = element

print(rank_crime_data_dict)
print(rank_qol_data_dict)
print(final_rank_pollution_data_dict)
print(final_rank_traffic_data_dict)
print(final_rank_hc_data_dict)

with open("rank_crime.json", "w") as outfile:
    json.dump(rank_crime_data_dict, outfile)

with open("rank_qol.json", "w") as outfile:
    json.dump(rank_qol_data_dict, outfile)

with open("rank_pollution.json", "w") as outfile:
    json.dump(final_rank_pollution_data_dict, outfile)

with open("rank_traffic.json", "w") as outfile:
    json.dump(final_rank_traffic_data_dict, outfile)

with open("rank_hc.json", "w") as outfile:
    json.dump(final_rank_hc_data_dict, outfile)