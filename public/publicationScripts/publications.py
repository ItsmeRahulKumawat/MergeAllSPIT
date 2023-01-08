from serpapi import GoogleSearch
import sys

id = sys.argv[1]
key = sys.argv[2]
params = {
  "engine": "google_scholar_author",
  "author_id": id,
  "api_key": key,
  "sort":"pubdate",
  "start":0,
  "num":100,
}

search = GoogleSearch(params)
results = search.get_dict()
articles = results["articles"]

res1 = [ sub['publication'] for sub in articles ]

params = {
  "engine": "google_scholar_author",
  "author_id": id,
  "api_key": key,
  "sort":"pubdate",
  "start":100,
  "num":100,
}

search = GoogleSearch(params)
results = search.get_dict()
articles = results["articles"]

res2 = [ sub['publication'] for sub in articles ]

print(res1+res2)
