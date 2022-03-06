import sys
from pyspark.sql import SparkSession


country = sys.argv[1]
if len(sys.argv) >= 3:
    for i in range(2,len(sys.argv)):
        country = country + " " + sys.argv[i]

spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()
path = "/home/datavis/COVID-19/csse_covid_19_data/csse_covid_19_daily_reports"
df = spark.read.option("header", True).csv(path)
# df.show()
dataFrame = df.filter(df.Country_Region == country)
dataFrame.show()

