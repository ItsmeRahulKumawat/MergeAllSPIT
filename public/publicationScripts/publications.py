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

res = [ sub['publication'] for sub in articles ]

print(res)
