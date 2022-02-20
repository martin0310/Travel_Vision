from pyspark.sql import SparkSession
import json

spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()

df = spark.read.option('inferSchema', 'true').option("delimiter", ",").option('header', 'true').csv('./population_by_country_2020.csv')
#df = spark.read.option("delimiter", ";").csv('./mbsa.csv')
df.show(100)
aaa = df.select("Country (or dependency)")

listaaa = aaa.toJSON().collect()
print(type(listaaa))
listdictaaa = []

for e in listaaa:
    listdictaaa.append(json.loads(e))

print(listdictaaa[0]["Country (or dependency)"])
#spark.stop()
