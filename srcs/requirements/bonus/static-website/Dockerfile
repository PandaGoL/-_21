FROM golang:alpine 

WORKDIR /app

COPY ./conf/ ./

RUN go build -o site

EXPOSE 3000 
ENTRYPOINT ./site