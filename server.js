const path = require("path")
const http = require("http")

const express = require("express")
const socket = require("socket.io")
const io = socket()

const app = express()
const server = http.createServer(app)

app.use(express.static(path.join(__dirname, 'public')))

io.on("connection", socket =>{
    console.log("connected")
    socket.emit("message", "Connected with server")
    socket.broadcast.emit('message', 'a user connected')
    socket.on("disconnect", () =>{
        io.emit("message", "user disconnected")
    })
})

const port = 3000 || process.env.PORT;

app.listen(port, () => console.log(`listining to the port ${port}`))