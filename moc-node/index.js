const express = require("express");
const mongoose = require("mongoose");
const cors = require('cors');

const app = express();
const port = 3999;

// Configuration du middleware
app.use(express.json());
app.use(cors());
app.use(express.urlencoded({ extended: false }));

// Routes
app.use('/api/school', require('./routes/router'));

// Fonction pour démarrer l'application
async function startServer() {
    try {
        await mongoose.connect('mongodb://localhost:27017/moc_db');
        console.log("[DATABASE] MongoDb -- MOCKUP -- is connected");

        const server = app.listen(port, () => {
            console.log(`[Server] is running on Port : ${port}`);
        });

        return server; // Retourne l'instance du serveur pour fermeture ultérieure
    } catch (err) {
        console.error(err);
        throw err;
    }
}

// Démarrage du serveur (utilisé en dehors des tests)
if (require.main === module) {
    startServer();
}

module.exports = { startServer };