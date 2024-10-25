const ARTICLE = require("../models/Article")

const getAllArticles = async ( req, res ) =>{
    try {
        const article = await ARTICLE.find()
        res.json( article )
    } catch (error) {
        res.json( { message: 'Error fetching Articles', error } )
    }
}

const getArticleById = async ( req, res ) =>{
    try {
        const article = await ARTICLE.findById(req.body._id)
        res.json( article )
    } catch ( error ) {
        res.json( { message: 'Error fetching Articles', error } )
    }
}
const deleteArticle = async (req, res) => {
    try {
        const articleId = req.params.id; // ID de l'article passé dans les paramètres de l'URL
        const deletedArticle = await ARTICLE.findByIdAndDelete(articleId);

        if (!deletedArticle) {
            return res.status(404).json({ message: 'Article non trouvé' });
        }

        res.json({ message: 'Article supprimé avec succès', article: deletedArticle });
    } catch (error) {
        res.status(500).json({ message: 'Erreur lors de la suppression de l\'article', error });
    }
};


const createArticle = async (req, res) =>{
    try {
        const newArticle = new ARTICLE()
        newArticle.title = req.body.title;
        if(req.body.image) newArticle.image = req.body.image;
        if(req.body.category) newArticle.category = req.body.category;

        await newArticle.save()
        
        res.json( { "message" : "Nouvel article crée" , "summary" : newArticle.title } )
    } catch (error) {
        res.json( { "message": "Erreur dans la création d'un article", "error" : error } )
    }
}


module.exports = { getAllArticles, createArticle, getArticleById, deleteArticle }