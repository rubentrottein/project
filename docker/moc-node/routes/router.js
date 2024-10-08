const { getAllArticles, createArticle, getArticleById, deleteArticle } = require("../controllers/ArticleController")
const router = require("express").Router()

//General
router.get("/articles", getAllArticles)
router.get("/articles/get", getArticleById)
router.post("/articles/add", createArticle)
router.delete("/articles/delete/:id", deleteArticle)

module.exports = router