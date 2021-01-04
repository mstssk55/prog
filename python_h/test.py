import requests
from urllib.request import urlopen
from bs4 import BeautifulSoup
with open('keys.csv') as csv_file:


    for keys in csv_file:
        s_url = 'https://search.rakuten.co.jp/search/mall/' + format(keys)
        with urlopen(s_url) as res:
            html = res.read().decode("utf-8")
        soup = BeautifulSoup(html, "html.parser")
        for div in soup.select(".searchresultitem"):
            title = div.h2.a.get("title")
            url = div.h2.a.get("href")
            price = div.find(class_='important').text

            eye = div.a.img.get("src")
            data_list = []
            data_list.append(format(keys))
            data_list.append(title)
            data_list.append(url)
            data_list.append(price)
            data_list.append(eye)
            print (data_list)
            # tech_array.append(data_list)
        # titles = soup.select(".title a")
        # titles = [t.string for t in titles]
        # from pprint import pprint
        # pprint(titles[:10])


