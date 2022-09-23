import { useState, useEffect } from "react";
import Axios from "axios";

function App() {
  const [listaDeFrutas, setlistaDeFrutas] = useState([]);

  useEffect(() => {
    Axios.get("http://localhost:3001/listaDeFrutas").then((response) => {
      setlistaDeFrutas(response.data);
      console.log(listaDeFrutas);
    });
  }, []);

  return (
    <>
      <ul>
        {listaDeFrutas.map((fruta) => {
          return <li>{fruta.name}</li>;
        })}
      </ul>
    </>
  );
}

export default App;
