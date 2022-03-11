import json
import sys
from pyspark.sql import SparkSession
from pyspark.sql import functions as F

start_time = sys.argv[len(sys.argv) - 2]
end_time = sys.argv[len(sys.argv) - 1]

original_start_time = start_time
original_end_time = end_time

start_time = start_time.split("-")
end_time = end_time.split("-")

# start_time[1] -- > month
# end_time[1] -- > month
# start_time[2] -- > date in month
# end_time[2] -- > date in month
# start_time[0] -- > year
# end_time[0] -- > year

start_month = start_time[1]
end_month = end_time[1]
start_date_in_month = start_time[2]
end_date_in_month = end_time[2]

new_start_time = start_time[1] + "-" + start_time[2] + "-" + start_time[0]
new_end_time = end_time[1] + "-" + end_time[2] + "-" + end_time[0]

country = sys.argv[1]
# if len(sys.argv) >= 3 :

for i in range(2,len(sys.argv) - 2):
     country = country + " " + sys.argv[i]

spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()
path = "/home/datavis/COVID-19/csse_covid_19_data/csse_covid_19_daily_reports"

# path = "/home/datavis/COVID-19/csse_covid_19_data/csse_covid_19_daily_reports"
df = spark.read.option("header", True).csv(path)
# df.show()
dataFrame = df.filter(df.Country_Region == country)
dataFrame = dataFrame.filter(F.col("Last_Update").between(original_start_time + ' 00:00:00',original_end_time + ' 23:59:00'))
# dataFrame.filter(F.col("Last_Update").between(original_start_time + ' 00:00:00',original_end_time + ' 23:59:00')).show()
# dataFrame.show()
dataFrameJsonList = dataFrame.toJSON().collect() # -- > to List
# print(dataFrameJsonList)
# print(dataFrameJsonList[0])

ini_dict = {}

for element in dataFrameJsonList:
     ini_dict[json.loads(element)['Last_Update'].split(" ",1)[0]] = element

print(ini_dict)

# print(json.loads(dataFrameJsonList[0])['Last_Update'])
# print(type(dataFrameJsonList[0]))
# print(type(dataFrameJsonList))
# dataFrame.show()

# print(new_start_time)
# print(new_end_time)
# print(df_1)
# print(df_2)
