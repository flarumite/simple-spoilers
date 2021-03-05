#!/bin/bash
echo "This relies on you having prettier installed globally"
echo "If you don't, run: npm i -g prettier"
echo

prettier --write "**/*.{less,md,json,js,ts,jsx,tsx,yml}"
