const ARTICLE = require("../models/Article");

const getAllArticles = async (req, res) =>{
    try {
        const article = await ARTICLE.find();
        res.json(article);
    } catch (error) {
        res.json({message: 'Error fetching Articles', error});
    }
}

const createArticle = (req, res) =>{
    try {
        const newArticle = new ARTICLE();
        newArticle.title = req.title;
        res.json({message : "Nouvel article crée" , summary : newArticle});
    } catch (error) {
        res.json({message: 'Erreur dans la création d\'un article', error});
    }
}

module.exports = { getAllArticles, createArticle };