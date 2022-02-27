from pyspark.sql import SparkSession
import json
import sys

country_city = sys.argv[1]

# 0 program name
# 1 first parameter
# 所以從 2 開始
for i in range(2, len(sys.argv)):
    country_city = country_city + " " + sys.argv[i]

print(country_city)
spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()

# df = spark.read.option('inferSchema', 'true').option("delimiter", ",").option('header', 'true').csv('./population_by_country_2020.csv')
# df = spark.read.json("/home/datavis/numbeo_data/(Afghanistan,not_a_city).json")
path = "/home/datavis/numbeo_data/" + country_city + ".json"
# df = spark.read.json("/home/datavis/numbeo_data/" + country_city + ".json")
df = spark.read.json(path)
# df = spark.read.json("/home/datavis/numbeo_data/*.json") #loop through all json file in numbeo_data

# df.printSchema()
# df.show()

#get col
print(json.loads(df.select(country_city).toJSON().collect()[0])[country_city][0])
# print(type(json.loads(df.select("(Afghanistan,not_a_city)").toJSON().collect()[0])["(Afghanistan,not_a_city)"][0]))
# get PP
print(json.loads(df.select(country_city).toJSON().collect()[0])[country_city][1])


