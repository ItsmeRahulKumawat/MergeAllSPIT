
from serpapi import GoogleSearch

params = {
  "engine": "google_scholar_author",
  "view_op": "view_citation",
  "citation_id": "VwSP2uoAAAAJ:u-x6o8ySG0sC",
  "api_key": "dc6cffab505c9fa7737419184008156209727fee5ee5812a9d5260eb548514e0"
}

search = GoogleSearch(params)
results = search.get_dict()
citation = results["citation"]


res = [sub['title'] for sub in citation]

print(res)