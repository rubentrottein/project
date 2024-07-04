const ARTICLE = require("../models/Article");

const getAllArticles = async (req, res) =>{
    try {
        const article = await ARTICLE.find();
        res.json(article);
    } catch (error) {
        res.json({message: 'Error fetching Articles', error});
    }
}

module.exports = { getAllArticles };