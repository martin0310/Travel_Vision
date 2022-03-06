import json
from pyspark.sql import SparkSession


spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()
path = "/home/datavis/COVID-19/csse_covid_19_data/csse_covid_19_daily_reports/10-03-2021.csv"
df = spark.read.option("header", True).csv(path)
# df.show()
dataFrame = df.select('Country_Region')
# df.select('Country_Region').show()
dataFrame.show()
# print(type(df.select('Country_Region'))) type : <class 'pyspark.sql.dataframe.DataFrame'>
# dataFrame.foreach(lambda x: 
#     print(type(x))
#     ) 
country_list = df.select("Country_Region").rdd.flatMap(lambda x: x).collect()
# print(country_list) -- > Is a list
# print(type(country_list[0])) -- > Element inside is a string

# Write to file  
country_dict = {"country" : country_list}
# print(country_dict)
# f = open("/home/datavis/covid_country.txt", "w")
# # for element in country_list:
# #     # print(element + "\n")
# #     # print(type(element))
# #     f.write(element + "\n")

# # country_list_to_string = "".join(country_list)
# f.write(country_list_to_string)
# f.close()

with open('/home/datavis/covid_country.json', 'w') as convert_file:
     convert_file.write(json.dumps(country_dict))


