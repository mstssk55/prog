# coding: UTF-8

# my_name = "Yohei"
# age =20
# is_good = True
# unittest = 1

# print type(my_name)
# print my_name + ":" +str(age)

# users = ["Yo","Ken","Nao","Shin","Lee"]
# print users[0]
# print users[1:4]
# print users[3:]
# print users[1::2]
# print users[::-1]
# users.append("Miu")
# print users[::-1]
# users.remove("Nao")
# print users[::-1]
# users = [u.lower()for u in users if u.find("e") !=-1]
# print users


# user_dict= {
#     "Yohei":30,
#     "John":35
# }
# print user_dict["Yohei"]
# print user_dict.get("Nao","none")
# for k,v in user_dict.items():
#     print(k,v)

# user_dict["Yohei"]=39
# del user_dict["John"]
# for k,v in user_dict.items():
#     print(k,v)

# set_={
#     "Tennis","Ramen","Programming"
# }
# for s in set_:
#     print(s)

# set_.add("Gs")
# set_.remove("Ramen")
# for s in set_:
#     print(s)

# set1 = set([1,2,3,4,5])
# set2 = set([3,4,5])
# print set1 - set2

# def add(a,b):
#     return a+b
# result = add(10,20)
# print result

# def pow(a,b=2):
#     return a **b
# result = pow(10,3)
# print result

# def create_date(year=0,month=0,date=0):
#     return str(year)+"."+str(month)+"."+str(date)
# print create_date(year=2017,date=10)

# <2----------------------------------------------------->

# text = u"じこーだすまあさかんでのみしーゅっみてはたなのんしだいろな"
# print (text[::2])
# print (text[1::2])

# def myself(name,age):
#     return "私の名前は"+name+"で"+str(age)+"歳です"
# print myself("Yohei",30)

# set1= set([1,2,1,3])
# set2= set([1,2])
# print set1 - set2

# text = u"じこーだすまあさかんでのみしーゅっみてはたなのんしだいろな"
# print(text[0])


# all = set("「ではみなさんは、そういうふうに川だと云いわれたり、乳の流れたあとだと云われたりしていたこのぼんやりと白いものがほんとうは何かご承知ですか。」先生は、黒板に吊つるした大きな黒い星座の図の、上から下へ白くけぶった銀河帯のようなところを指さしながら、みんなに問といをかけました。カムパネルラが手をあげました。それから四五人手をあげました。ジョバンニも手をあげようとして、急いでそのままやめました。たしかにあれがみんな星だと、いつか雑誌で読んだのでしたが、このごろはジョバンニはまるで毎日教室でもねむく、本を読むひまも読む本もないので、なんだかどんなこともよくわからないという気持ちがするのでした。ところが先生は早くもそれを見附みつけたのでした。「ジョバンニさん。あなたはわかっているのでしょう。」ジョバンニは勢いきおいよく立ちあがりましたが、立って見るともうはっきりとそれを答えることができないのでした。ザネリが前の席からふりかえって、ジョバンニを見てくすっとわらいました。ジョバンニはもうどぎまぎしてまっ赤になってしまいました。先生がまた云いました。「大きな望遠鏡で銀河をよっく調べると銀河は大体何でしょう。」やっぱり星だとジョバンニは思いましたがこんどもすぐに答えることができませんでした。先生はしばらく困ったようすでしたが、眼めをカムパネルラの方へ向けて、「ではカムパネルラさん。」と名指しました。するとあんなに元気に手をあげたカムパネルラが、やはりもじもじ立ち上ったままやはり答えができませんでした。先生は意外なようにしばらくじっとカムパネルラを見ていましたが、急いで「では。よし。」と云いながら、自分で星図を指さしました。「このぼんやりと白い銀河を大きないい望遠鏡で見ますと、もうたくさんの小さな星に見えるのです。ジョバンニさんそうでしょう。」ジョバンニはまっ赤になってうなずきました。けれどもいつかジョバンニの眼のなかには涙なみだがいっぱいになりました。そうだ僕ぼくは知っていたのだ、勿論もちろんカムパネルラも知っている、それはいつかカムパネルラのお父さんの博士のうちでカムパネルラといっしょに読んだ雑誌のなかにあったのだ。それどこでなくカムパネルラは、その雑誌を読むと、すぐお父さんの書斎しょさいから巨おおきな本をもってきて、ぎんがというところをひろげ、まっ黒な頁ページいっぱいに白い点々のある美しい写真を二人でいつまでも見たのでした。それをカムパネルラが忘れる筈はずもなかったのに、すぐに返事をしなかったのは、このごろぼくが、朝にも午后にも仕事がつらく、学校に出てももうみんなともはきはき遊ばず、カムパネルラともあんまり物を云わないようになったので、カムパネルラがそれを知って気の毒がってわざと返事をしなかったのだ、そう考えるとたまらないほど、じぶんもカムパネルラもあわれなような気がするのでした。先生はまた云いました。「ですからもしもこの天あまの川がわがほんとうに川だと考えるなら、その一つ一つの小さな星はみんなその川のそこの砂や砂利じゃりの粒つぶにもあたるわけです。またこれを巨きな乳の流れと考えるならもっと天の川とよく似ています。つまりその星はみな、乳のなかにまるで細かにうかんでいる脂油しゆの球にもあたるのです。そんなら何がその川の水にあたるかと云いますと、それは真空という光をある速さで伝えるもので、太陽や地球もやっぱりそのなかに浮うかんでいるのです。つまりは私どもも天の川の水のなかに棲すんでいるわけです。そしてその天の川の水のなかから四方を見ると、ちょうど水が深いほど青く見えるように、天の川の底の深く遠いところほど星がたくさん集って見えしたがって白くぼんやり見えるのです。この模型をごらんなさい。」先生は中にたくさん光る砂のつぶの入った大きな両面の凸とつレンズを指しました。「天の川の形はちょうどこんななのです。このいちいちの光るつぶがみんな私どもの太陽と同じようにじぶんで光っている星だと考えます。私どもの太陽がこのほぼ中ごろにあって地球がそのすぐ近くにあるとします。みなさんは夜にこのまん中に立ってこのレンズの中を見まわすとしてごらんなさい。こっちの方はレンズが薄うすいのでわずかの光る粒即すなわち星しか見えないのでしょう。こっちやこっちの方はガラスが厚いので、光る粒即ち星がたくさん見えその遠いのはぼうっと白く見えるというこれがつまり今日の銀河の説なのです。そんならこのレンズの大きさがどれ位あるかまたその中のさまざまの星についてはもう時間ですからこの次の理科の時間にお話します。では今日はその銀河のお祭なのですからみなさんは外へでてよくそらをごらんなさい。ではここまでです。本やノートをおしまいなさい。」そして教室中はしばらく机つくえの蓋ふたをあけたりしめたり本を重ねたりする音がいっぱいでしたがまもなくみんなはきちんと立って礼をすると教室を出ました。")
# num = 0
# for s in all:
#     print s
#     num += 1
#     print num

# num = []
# for i in range(101):
#     num.append(i)

# print num

# num = [u"円"+str(num[e]) for e in num ]
# print num

# class MyClass(object):
#     pass
# me = MyClass()
# print(me)

# class EmptyClass(object):
#     pass
# holder = EmptyClass()
# holder.name = "masat"
# holder.age = 30
# print holder
# print(holder.name,holder.age)

# import my_special as ms

# ms.num()


# from my_special import num

# num()

# from myutils import my_module
# print my_module.myself()

# import myutils.my_module
# print myutils.my_module.myself()

# import datetime
# # print datetime.date.today()
# # adate = datetime.date(2019,5,5)
# # print(adate)

# # # print datetime.date.fromtimestamp(1442189545)

# # # print datetime.date.today() - datetime.date(2020,8,24)
# # adate.replace(year=2000)
# # print adate
# # print adate.weekday()
# aDate = datetime.date(2015, 1, 1)
# print aDate
# aDate = aDate.replace(year=2026)
# aDate = aDate.replace(month=2)
# aDate = aDate.replace(day=2)

# print aDate

# from urllib.request import urlopen
# from bs4 import BeautifulSoup

# with urlopen("https://qiita.com/") as res:
#     html = res.read().decode("utf-8")

# soup = BeautifulSoup(html, "html.parser")

# # titles = soup.select(".articleListItem h2")
# # titles = [t.string for t in titles]
# # from pprint import pprint
# # pprint(titles)
# # titles = soup.select("h2 .css-qrra2n")
# # titles = [t.string for t in titles]
# # from pprint import pprint
# # pprint(titles)

# titles = soup.select("h2 a")
# titles = [t.string for t in titles]
# from pprint import pprint
# pprint(titles)
# # atags=soup.find_all('a')       #全aタグ取得
# # print('aタグ数：', len(atags))  #aタグ数取得
# # for atags in atags[:5]:
# #     print('タイトル：',atags.text)   #aタグのテキスト取得
# #     print('リンク：',atags['href'])

# from urllib.request import urlopen
# from bs4 import BeautifulSoup

# with urlopen("https://travel.rakuten.co.jp/yado/hokkaido/sapporo.html?lid=jparea_undated_arealink") as res:
#     html = res.read().decode("utf-8")

# soup = BeautifulSoup(html, "html.parser")

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

from urllib.request import urlopen
from bs4 import BeautifulSoup


from flask import Flask,render_template


# app = Flask(__name__)
# @app.route("/")
# def index():
#     tech_array=[]
#     with urlopen("https://jp.techcrunch.com/") as res:
#         html = res.read().decode("utf-8")
#     soup = BeautifulSoup(html, "html.parser")
#     for div in soup.select(".post-title a"):
#         title = div.string
#         url = div.get("href")
#         data_list = []
#         data_list.append(title)
#         data_list.append(url)
#         tech_array.append(data_list)

#     return render_template("index.html",tech_array=tech_array[:5])
# if __name__ == "__main__":
#     app.run()


app = Flask(__name__)
@app.route("/")
def index():
    tech_array=[]
    with urlopen("https://jp.techcrunch.com/") as res:
        html = res.read().decode("utf-8")
    soup = BeautifulSoup(html, "html.parser")
    for div in soup.select(".block-content"):
        title = div.h2.a.string
        url = div.h2.a.get("href")
        dis = div.p.text[:100]
        eye = div.span.a.img.get("src")
        data_list = []
        data_list.append(title)
        data_list.append(url)
        data_list.append(dis)
        data_list.append(eye)
        tech_array.append(data_list)

    return render_template("index.html",tech_array=tech_array[:5])
if __name__ == "__main__":
    app.run()
