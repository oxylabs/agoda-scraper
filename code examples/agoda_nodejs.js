import fetch from 'node-fetch';

const username = 'YOUR_USERNAME';
const password = 'YOUR_PASSWORD';
const body = {
  'source': 'universal',
  'url': 'https://www.agoda.com/?cid=1891458&tag=24bd4b3f-b6a1-50d5-e639-d9c49ca41c49&gclid=cj0kcqia7oqrbhd9arisak3uxh0kts4hidqpr1aegsv5v_2puktdlkqbnwfahx2kuewg9gmwkerfz_oaalcyealw_wcb&ds=d0lupzqbrarv6xh%2f'};
  
const response = await fetch('https://realtime.oxylabs.io/v1/queries', {
  method: 'post',
  body: JSON.stringify(body),
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Basic ' + Buffer.from(`${username}:${password}`).toString('base64'),
  }
});

console.log(await response.json());