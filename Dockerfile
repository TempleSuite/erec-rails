FROM ruby:2.2.1
MAINTAINER Katelyn Sievert <katelyn.sievert@gmail.com>
ENV GEM_HOME /bundle/ruby-2.2.1

RUN apt-get update -qq && apt-get install -y build-essential libpq-dev
RUN mkdir /code /bundle

WORKDIR /code
ADD . /code
