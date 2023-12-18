package main

import (
	"bytes"
	"encoding/json"
	"fmt"
	"io/ioutil"
	"net/http"
)

func main() {
	const Username = "YOUR_USERNAME"
	const Password = "YOUR_PASSWORD"

	payload := map[string]string{
		"source": "universal",
		"url": "https://www.agoda.com/?cid=1891458&tag=24bd4b3f-b6a1-50d5-e639-d9c49ca41c49&gclid=cj0kcqia7oqrbhd9arisak3uxh0kts4hidqpr1aegsv5v_2puktdlkqbnwfahx2kuewg9gmwkerfz_oaalcyealw_wcb&ds=d0lupzqbrarv6xh%2f",
	}

	jsonValue, _ := json.Marshal(payload)

	client := &http.Client{}
	request, _ := http.NewRequest("POST",
		"https://realtime.oxylabs.io/v1/queries",
		bytes.NewBuffer(jsonValue),
	)

	request.SetBasicAuth(Username, Password)
	response, _ := client.Do(request)

	responseText, _ := ioutil.ReadAll(response.Body)
	fmt.Println(string(responseText))
}