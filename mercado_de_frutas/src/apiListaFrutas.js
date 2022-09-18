const https = require("https");
let dados = "";

const resposta = https.get(
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

module.exports = { dados };
