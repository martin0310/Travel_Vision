from pyspark.sql import SparkSession
import json
import sys

# for i in range(len(sys.argv)):
# 
#     print(i, sys.argv[i])

# 0 program name
# 1 datatype
# 2 first country parameter
country_city = sys.argv[2]
# 所以從 3 開始
for i in range(3, len(sys.argv)):
    country_city = country_city + " " + sys.argv[i]

spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()

# df = spark.read.option('inferSchema', 'true').option("delimiter", ",").option('header', 'true').csv('./population_by_country_2020.csv')
# df = spark.read.json("/home/datavis/numbeo_data/(Afghanistan,not_a_city).json")
path = "/home/datavis/numbeo_data/" + country_city + ".json"
# df = spark.read.json("/home/datavis/numbeo_data/" + country_city + ".json")
df = spark.read.json(path)
# df = spark.read.json("/home/datavis/numbeo_data/*.json") #loop through all json file in numbeo_data

# df.printSchema()
# df.show()

datatype = sys.argv[1]

# print("country_city: " + country_city)
# print("datatype: " + datatype)

#get col
if datatype == 'COL':
    print(json.loads(df.select(country_city).toJSON().collect()[0])[country_city][0])

# print(type(json.loads(df.select("(Afghanistan,not_a_city)").toJSON().collect()[0])["(Afghanistan,not_a_city)"][0]))

# get PP
if datatype == 'PP':
    print(json.loads(df.select(country_city).toJSON().collect()[0])[country_city][1])


