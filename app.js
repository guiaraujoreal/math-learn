const express = require('express');
const path = require('path');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');
app.get('/', (req, res) => {
    waApi.getSimple('2x-30=6').then((url) => {
        res.send(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>Imagem da API</title>
            </head>
            <body>
                <h1>Imagem da API Wolfram Alpha</h1>
                <div id="image-container">
                    <img src="${url}" alt="Imagem da API">
                </div>
            </body>
            </html>
        `);
    }).catch((error) => {
        console.error(error);
        res.send('Erro ao obter a imagem da API.');
    });
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});