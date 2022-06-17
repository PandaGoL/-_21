package main

import (
	"log"
	"net/http"
)

func main() {

	http.HandleFunc("/gofromdocker/", homePage)
	log.Print("Server start on port 3000")
	err := http.ListenAndServe(":3000", nil)
	if err != nil {
		log.Fatal(err)
	}
	log.Print("ByBy")
}

func homePage(w http.ResponseWriter, r *http.Request) {
	http.ServeFile(w, r, "./website/index.html")
}
