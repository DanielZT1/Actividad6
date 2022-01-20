const mosca = require('mosca')

const broker = new mosca.Server({
    port: 9000
})

broker.on('ready', () => {
        console.log('Mosca is Ready!!')
})

    broker.on('clientConnected', (client) =>{
            console.log('New Client: ' + client.id)
    })

    broker.on('published', (packet) =>{
        console.log(packet.payload.toString())
    })