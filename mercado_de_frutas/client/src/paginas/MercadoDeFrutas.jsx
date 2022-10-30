import { useState, useEffect } from "react";
import Axios from "axios";
import CardFrutas from "../Componentes/CardFrutas";

export default function MercadoDeFrutas() {
  const CHAVE_LISTA_FRUTAS = "listaFrutas";
  const [listaDeFrutas, setlistaDeFrutas] = useState([]);

  useEffect(() => {
    const listaDeFrutasSalvas = JSON.parse(
      localStorage.getItem(CHAVE_LISTA_FRUTAS)
    );

    if (listaDeFrutasSalvas) {
      setlistaDeFrutas(listaDeFrutasSalvas);
    } else {
      Axios.get("http://localhost:3001/listaDeFrutas").then((response) => {
        setlistaDeFrutas(response.data);
        console.log(listaDeFrutas);
      });
    }
  }, []);

  useEffect(() => {
    localStorage.setItem(CHAVE_LISTA_FRUTAS, JSON.stringify(listaDeFrutas));
  }, [listaDeFrutas]);

  return (
    <div className="container text-center">
      <h1>Mercado de Frutas</h1>
      <hr />
      <div className="row row-cols-5">
        {listaDeFrutas.map((fruta) => {
          return (
            <CardFrutas
              key={fruta.id}
              fruta={fruta}
            />
          );
        })}
      </div>
    </div>
  );
}
