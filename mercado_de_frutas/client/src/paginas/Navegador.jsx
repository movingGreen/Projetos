import { Outlet, Link } from "react-router-dom";

const Navegador = () => {
  return (
    <>
      <nav>
        <ul>
          <li>
            <Link to="/">Mercado de Frutas</Link>
          </li>
          <li>
            <Link to="/Informacoes">Informações da Fruta</Link>
          </li>
          <li>
            <Link to="/Carrinho">Carrinho</Link>
          </li>
        </ul>
      </nav>

      <Outlet />
    </>
  );
};

export default Navegador;
