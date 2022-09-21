const express = require("express");
const app = express();
const cors = require("cors");
const https = require("https");

app.use(cors());
app.use(express.json());

app.get("/listaFrutas", (req, res) => {
  const apiListaFrutas = https.get(
    "https://www.fruityvice.com/api/fruit/all",
    (resposta) => {
      resposta.setEncoding("utf-8");

      resposta.on("data", (parte) => {
        dados += parte;
      });
      resposta.on("end", () => {
        // const parseDados = JSON.parse(dados);
        // console.log(dados);
      });
    }
  );
});

app.listen(3001, () => {
  console.log("servidor rodando na porta 3001 supimpa");
});
