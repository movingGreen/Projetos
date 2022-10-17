import { useState, useEffect } from "react";
import Axios from "axios";
import CardFrutas from "../Componentes/CardFrutas";

export default function MercadoDeFrutas() {
  const [listaDeFrutas, setlistaDeFrutas] = useState([]);

  useEffect(() => {
    Axios.get("http://localhost:3001/listaDeFrutas").then((response) => {
      setlistaDeFrutas(response.data);
      console.log(listaDeFrutas);
    });
  }, []);

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
