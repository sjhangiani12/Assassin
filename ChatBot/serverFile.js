const config = require('./config.js')

touch seniorAssassin.js

npm install --save restify botbuilder


pokebot.js:
const restify = require('resitfy')
const builder = require('botbuilder')
const server = restify.creeateServer().listen(8080)