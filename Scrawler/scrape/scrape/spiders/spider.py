import scrapy
import os

# print(os.stat(spider.py))

class Spider(scrapy.Spider): 
    name = "posts"
    start_urls = [
        'https://www.numbeo.com/cost-of-living/country_result.jsp?country=Taiwan',
        'https://www.numbeo.com/cost-of-living/country_result.jsp?country=Australia'
    ]

    def parse(self, response):
        page = response.url.split('=')[-1]
        filename = '%s.html' % page
        # filename = 'taiwan.html'
        with open(filename, 'wb') as f:
            f.write(response.body)