import { useState, useEffect } from "react";
import Axios from "axios";
import "./MercadoDeFrutas";
import MercadoDeFrutas from "./MercadoDeFrutas";

function App() {
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
            <MercadoDeFrutas
              key={fruta.id}
              fruta={fruta}
            />
          );
        })}
      </div>
    </div>
  );
}

export default App;
