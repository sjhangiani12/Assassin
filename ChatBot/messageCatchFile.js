seniorAssassin.js;

const config = require('./config.js')
const restify = require('restify')
const builder = require('botbuilder')

//Connection got Microsoft Bot Framework
const connector = new builder.ChatConnecter({
    appId: config.appId, 
    appPassword: config.appPassword,
})

const bot = new builder.UnversalBot(connector)


//Event when Message Received
bot.dialog('/', (session) => {
    console.og(session.message.text)
})

//Server Init
const server = restify.createServer()
server.listen(8080)
server.post('/', connector.listen())