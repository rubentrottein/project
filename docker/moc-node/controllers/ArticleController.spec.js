const { createArticle } = require('./ArticleController');
const Article = require('../models/Article');

jest.mock('../models/Article'); // Mock the entire module

describe('createArticle', () => {
    it('should create a new article when title is provided', async () => {
        const req = {
            body: { title: 'Test Article' }
        };
        const res = {
            json: jest.fn()
        };
        const saveMock = jest.fn().mockResolvedValue({});
        
        // Mock the Article constructor to return an object with a save function
        Article.mockImplementation(() => ({
            save: saveMock
        }));

        await createArticle(req, res);

        expect(Article).toHaveBeenCalledTimes(1);
        expect(saveMock).toHaveBeenCalledTimes(1);
        expect(res.json).toHaveBeenCalledWith({ 
            message: "Nouvel article crée", 
            summary: expect.any(Object) 
        });
    });
});
