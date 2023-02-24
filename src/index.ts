import { Application, Request, Response } from 'express'
import http = require('http')
import express = require('express')
const PORT = 8080
var app: Application = express()
app.get('/', (req: Request, res: Response) => {
    res.send('Express is successfully running!')
})
app.listen(PORT, () => {
    console.log('Server is running at http://localhost:${PORT}')
},)
