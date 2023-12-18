# Agoda Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs’ [Agoda Scraper](https://oxylabs.io/products/scraper-api/web/agoda?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Agoda website effortlessly. This brief guide explains how an Agoda Scraper works and provides code examples to understand better how you can use it hassle-free.

### How it works

You can get Agoda results by providing your own URLs to our service. We can return the HTML for any Agoda page you like.

#### Python code example

The example below illustrates how you can get HTML of Agoda page.

```python
import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal',
    'url': 'https://www.agoda.com/?cid=1891458&tag=24bd4b3f-b6a1-50d5-e639-d9c49ca41c49&gclid=cj0kcqia7oqrbhd9arisak3uxh0kts4hidqpr1aegsv5v_2puktdlkqbnwfahx2kuewg9gmwkerfz_oaalcyealw_wcb&ds=d0lupzqbrarv6xh%2f'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/agoda-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "\r\n<!DOCTYPE html>\r\n<html lang=\"en\" kite-lang=\"en\" class=\"chrome no-js\" dir=\"ltr\">\r\n<head>\r\n    <meta ... </html>",
      "created_at": "2023-12-18 11:18:54",
      "updated_at": "2023-12-18 11:18:55",
      "page": 1,
      "url": "https://www.agoda.com/?cid=1891458&tag=24bd4b3f-b6a1-50d5-e639-d9c49ca41c49&gclid=cj0kcqia7oqrbhd9arisak3uxh0kts4hidqpr1aegsv5v_2puktdlkqbnwfahx2kuewg9gmwkerfz_oaalcyealw_wcb&ds=d0lupzqbrarv6xh%2f",
      "job_id": "7142473296947229697",
      "status_code": 200
    }
  ]
}
```
With our Agoda Scraper, you can seamlessly harvest accessible data from any Agoda web page. Gather essential hotel information, such as rates, guest reviews, or hotel descriptions, to assess the industry landscape and stay a step ahead of your rivals. If you have any queries, our support team is always ready to assist you via live chat or drop us an email at hello@oxylabs.io.