FROM ruby:2.2.1
MAINTAINER Katelyn Sievert <katelyn.sievert@gmail.com>

RUN apt-get update -qq && apt-get install -y build-essential libpq-dev
RUN mkdir /code /bundle

RUN gem install bundler

WORKDIR /code
ADD . /code
