import { React, useState } from "react";
import ReactDOM from "react-dom/client";
import { RouterProvider } from "react-router-dom";
import Roteador from "./App";

function ComponenteRoot() {
  const [carrinho, setCarrinho] = useState(5);

  return (
    <React.StrictMode>
      <RouterProvider router={Roteador} />
    </React.StrictMode>
  );
}

const root = ReactDOM.createRoot(document.getElementById("root"));

root.render(<ComponenteRoot />);
