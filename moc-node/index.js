const express = require("express")
const app = express()
const port = 3999
const mongoose = require("mongoose")
const cors = require('cors')

// Use CORS middleware
app.use( cors() )
app.use( express.urlencoded({ extended:false }) )

main().catch( err => console.log( err ) );
async function main(){
    await mongoose.connect( 'mongodb://localhost:27017/moc_db' )
    console.log( "[DATABASE] MongoDb -- MOCKUP -- is connected" )
}

app.use( express.json() )
app.use( '/api/school', require('./routes/router') )
app.listen( port, ()=> console.log( `[Server] is running on Port : ${port}` ) )