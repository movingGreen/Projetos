import React from "react";
import useFetch from "./useFetch";

function App() {
  const [dados] = useFetch("https://www.fruityvice.com/api/fruit/all");

  return (
    <div className="App">
      {dados &&
        dados.map((item, index) => {
          return <p key={index}>{JSON.stringify(item)}</p>;
        })}
    </div>
  );
}

export default App;
