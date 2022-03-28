import json
from pyspark.sql import SparkSession

country_city_dict_data = json.load(open('Crawler/country_city_dict.json')) # type -- > dict

# spark = SparkSession.builder.master('local[*]').config('spark.executor.memory','32g').config('spark.driver.memory','32g').config('spark.driver.maxResultsSize','0').appName('spark_application').getOrCreate()
spark = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()
# spark2 = SparkSession.builder.master('local[*]').appName('spark_application').getOrCreate()
path = "worldcities.csv"
df = spark.read.option("header", True).csv(path)
# df_temp = spark.read.option("header", True).csv(path)
# df_final = spark.read.option("header", True).csv(path)

# df.show()

# dataFrameFinal = df_final.filter(df_final.country == 'aaa')



# dataFrameFinal = df_final.filter(df_final.country == 'aaa')

# dataFrameFinal.write.option("header",True).csv('/var/www/html/Temp_World_Map_Lat_Lon.csv')

# dataFrameFinal.coalesce(1).write.format("com.databricks.spark.csv").option("header", "true").save("temp.csv")

total = len(country_city_dict_data)
cur_country = 1
output_dict = {}
for key in country_city_dict_data:
    print(key + " " + str(cur_country) + "/" + str(total))
    # if(key == 'United States'):
    #     cur_country = cur_country + 1
    #     continue
    # dataFrameTemp = df_temp.filter(df_temp.country == 'aaa'
    temp_output_country_dict = {}
    for element in country_city_dict_data[key]:

        city_temp_dict = {}
        # city_temp_dict[element] = {}
        # dataFrameTemp = dataFrameTemp.union(df.filter(df.country == key).filter(df.city_ascii == element))
        if len(df.filter(df.country == key).filter(df.city_ascii == element).head(1)) != 0:
            city_temp_dict['Lat'] = df.filter(df.country == key).filter(df.city_ascii == element).first()['lat']
            city_temp_dict['Long'] = df.filter(df.country == key).filter(df.city_ascii == element).first()['lng']
            temp_output_country_dict[element] = city_temp_dict
            # temp_output_list.append(city_temp_dict)

            # print(df.filter(df.country == key).filter(df.city_ascii == element).first()['city_ascii'])
            # print(type(df.filter(df.country == key).filter(df.city_ascii == element).first()['city_ascii']))
            
    # output_path = 'World_Country_Lat_Long' + '/' +key
    # dataFrameTemp.coalesce(1).write.option("header",True).format("csv").mode("overwrite").save(output_path)
    # dataFrameFinal = dataFrameFinal.union(dataFrameTemp)
    output_dict[key] = temp_output_country_dict
    print(temp_output_country_dict)
    cur_country = cur_country + 1

f = open("World_Cities_Lat_Long.json", "w")
json.dump(output_dict, f)
f.close()   
# print(output_dict)
# dataFrameFinal.coalesce(1).write.option("header",True).format("csv").mode("overwrite").save("World_Lat_Long_Data")
    
    # dataFrameFinal = dataFrameFinal.union(dataFrame)

# dataFrameFinal.show()
# dataFrameFinal.coalesce(1).write.format("com.databricks.spark.csv").option("header", "true").save("World_Cities_Lat_Long.csv")
# dataFrameFinal.write.csv('/var/www/html/World_Map_Lat_Lon')
# dataFrameFinal.write.option("header",True).csv("World_Cities_Lat_Long.csv")



# dataFrameFinal.coalesce(1).write.option("header",True).format("csv").mode("overwrite").save("World_Lat_Long_Data")



# dataFrame.show()d
