import React from "react";
import { Route, Routes } from "react-router-dom";
import Carrinho from "./paginas/Carrinho";
import InformacaoFruta from "./paginas/InformacaoFruta";
import MercadoDeFrutas from "./paginas/MercadoDeFrutas";
import Navegador from "./Componentes/Navegador";
import PaginaErro from "./paginas/PaginaErro";

export default function App() {
  return (
    <>
      <Navegador />
      <div className="container">
        <Routes>
          <Route
            path="/"
            element={<MercadoDeFrutas />}
          />
          <Route
            path="/Informacoes"
            element={<InformacaoFruta />}
          />
          <Route
            path="/Carrinho"
            element={<Carrinho />}
          />
        </Routes>
      </div>
    </>
  );
}
