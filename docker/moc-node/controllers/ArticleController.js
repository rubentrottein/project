const Article = require("../models/Article");

const getAllArticles = async (req, res) =>{
    try {
        const article = await Article.find();
        res.json(article);
    } catch (error) {
        res.json({message: 'Error fetching Articles', error});
    }
}

const createArticle = async (req, res) =>{
    try {
        const newArticle = new Article();
        newArticle.title = req.body.title;
        newArticle.image = req.body.image;
        newArticle.image = req.body.alt;
        newArticle.intro = req.body.intro;
        newArticle.content = req.body.content;
        newArticle.category = req.body.category;
        await newArticle.save();
        res.status(201).json({message : "Nouvel article crée" , summary : newArticle});
    } catch (error) {
        res.status(500).json({message: 'Erreur dans la création d\'un article', error});
    }
}

module.exports = { getAllArticles, createArticle };