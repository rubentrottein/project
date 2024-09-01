const mongoose = require( 'mongoose' )
const Schema = mongoose.Schema

const ArticleSchema = new Schema({
    title: {
        type: String,
        required: true
    },
    image : {
        type: String,
        required : false
    },
    category : {
        type: String,
        required : false
    }
})

const Article = mongoose.model('Article', ArticleSchema)
module.exports = Article