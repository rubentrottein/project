const mongoose = require('mongoose');
const { startServer } = require('./index.js');

describe('MongoDB Connection and Server Startup', () => {
    let server;

    afterAll(async () => {
        if (server && server.close) {
            await server.close();  // Fermeture du serveur
        }
        await mongoose.disconnect();  // Déconnexion de MongoDB
    });

    test('devrait se connecter à MongoDB et démarrer le serveur', async () => {
        server = await startServer();  // Démarre le serveur
        expect(server).toBeTruthy();  // Vérifie que le serveur est démarré
    });

    test('devrait lancer une erreur en cas de connexion MongoDB échouée', async () => {
        jest.spyOn(mongoose, 'connect').mockImplementationOnce(() => {
            throw new Error("Échec de connexion à MongoDB");
        });
        await expect(startServer()).rejects.toThrow("Échec de connexion à MongoDB");
    });
});