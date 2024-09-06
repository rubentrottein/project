const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const ArticleSchema = new Schema({
    title: {
        type: String,
        required: true
    },
    image: {
        type: String
    },
    alt: {
        type: String
    },
    intro: {
        type: String
    },
    content: {
        type: String
    },
    category: {
        type: String
    }
});

const Article = mongoose.model('Article', ArticleSchema);

module.exports = Article;
