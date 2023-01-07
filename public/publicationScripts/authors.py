from serpapi import GoogleSearch
import sys

id = sys.argv[1]
key = sys.argv[2]
params = {
  "engine": "google_scholar_author",
  "author_id": id,
  "api_key": key,
  "sort":"pubdate"
}

search = GoogleSearch(params)
results = search.get_dict()
articles = results["articles"]

res_a = [ sub['authors'] for sub in articles ]

res = []
for el in res_a:
   sub = el.split(', ')
   res.append(sub)

print(res)