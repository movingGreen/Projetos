import React from "react";
import { createBrowserRouter, Route } from "react-router-dom";
import Carrinho from "./paginas/Carrinho";
import InformacaoFruta from "./paginas/InformacaoFruta";
import MercadoDeFrutas from "./paginas/MercadoDeFrutas";
import Navegador from "./Componentes/Navegador";
import PaginaErro from "./paginas/PaginaErro";

const Roteador = createBrowserRouter([
  {
    path: "/",
    element: <Navegador />,
    errorElement: <PaginaErro />,
    // loader: rootLoader,
    // action: rootAction,
    children: [
      {
        errorElement: <PaginaErro />,
        children: [
          { index: true, element: <MercadoDeFrutas /> },
          {
            path: "Informacoes",
            element: <InformacaoFruta />,
            // loader: contactLoader,
            // action: contactAction,
          },
          {
            path: "Carrinho",
            element: <Carrinho />,
            // loader: contactLoader,
            // action: editAction,
          },
        ],
      },
    ],
  },
]);

export default Roteador;
