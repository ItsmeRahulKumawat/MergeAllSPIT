from serpapi import GoogleSearch
import sys

id = sys.argv[1]
params = {
  "engine": "google_scholar_author",
  "author_id": id,
  "api_key": "dc6cffab505c9fa7737419184008156209727fee5ee5812a9d5260eb548514e0",
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