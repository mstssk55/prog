from urllib.request import urlopen
from bs4 import BeautifulSoup


with urlopen("https://jp.techcrunch.com/") as res:
    html = res.read().decode("utf-8")
soup = BeautifulSoup(html, "html.parser")

# titles = soup.select(".post-title a")
# url = soup.select(".post-title a")
# titles = [t.string for t in titles]
# url = [i.get("href") for i in url]

# from pprint import pprint
# pprint(titles)
# pprint(url)

tech_array =[]

for div in soup.select(".post-title a"):
    title = div.string
    url = div.get("href")
    data_list = []
    data_list.append(title)
    data_list.append(url)
    tech_array.append(data_list)

from pprint import pprint
pprint(tech_array)
# pprint(url)
#     test = div
#     print test
    # title = div.a
    # url = div.a
    # data_list = []
    # data_list.append(title.get_text())
    # data_list.append(url.get("href"))
    # tech_array.append(data_list)
# from pprint import pprint
# pprint(test)


# return render_template("index.html",tech_array=tech_array)
# if __name__ == "__main__":
#     app.run()



# # titles = soup.select(".articleListItem h2")
# # titles = [t.string for t in titles]
# # from pprint import pprint
# # pprint(titles)
# # titles = soup.select("h2 .css-qrra2n")
# # titles = [t.string for t in titles]
# # from pprint import pprint
# # pprint(titles)

# titles = soup.select("li h1 a")
# titles = [t.string for t in titles]

# from pprint import pprint
# pprint(titles)
