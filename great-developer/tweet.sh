#!/bin/zsh

# Optimizes an image generated by https://imgize.me

SOURCE="/Users/matthewturland/Downloads/tweet_imgize.png"
convert -shave 55x55 -trim -fuzz 1% -bordercolor white -border 10x10 $SOURCE $1
rm -f $SOURCE
