import requests

try:
    response = requests.get("https://www.numbeo.com/cost-of-living/in/Mazar-i-sharif-Afghanistan")
    print("URL is valid and exists on the internet")
except requests.ConnectionError as exception:
    print("URL does not exist on Internet")