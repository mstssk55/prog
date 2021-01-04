# import requests
import requests
from urllib.request import urlopen
from bs4 import BeautifulSoup
from flask import Flask,render_template

    
app = Flask(__name__)
@app.route("/")
def index():
    tech_array=[]
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
                tech_array.append(data_list)

        return render_template("index.html",tech_array=tech_array[:100])



if __name__ == "__main__":
    app.run()
