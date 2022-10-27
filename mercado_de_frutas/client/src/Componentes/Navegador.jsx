import { Link, useMatch, useResolvedPath } from "react-router-dom";

export default function Navegador() {
  return (
    <nav className="nav">
      <Link
        to="/"
        className="site-title">
        Mercado de Frutas
      </Link>
      <ul>
        <CustomLink to="/Informacoes">Informações das Frutas</CustomLink>
        <CustomLink to="/Carrinho">Carrinho</CustomLink>
      </ul>
    </nav>
  );
}

function CustomLink({ to, children, ...props }) {
  const resolvedPath = useResolvedPath(to);
  const isActive = useMatch({ path: resolvedPath.pathname, end: true });

  return (
    <li className={isActive ? "active" : ""}>
      <Link
        to={to}
        {...props}>
        {children}
      </Link>
    </li>
  );
}
