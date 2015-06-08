FROM ruby:2.2.1
MAINTAINER Katelyn Sievert <katelyn.sievert@gmail.com>

RUN apt-get update -qq && apt-get install -y build-essential libpq-dev
RUN mkdir /code

WORKDIR /code
ADD Gemfile ./Gemfile
ADD Gemfile.lock ./Gemfile.lock
RUN bundle install

ADD . /code
