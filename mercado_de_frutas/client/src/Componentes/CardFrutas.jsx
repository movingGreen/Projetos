import React from "react";
import { Link } from "react-router-dom";

export default function CardFrutas({ fruta }) {
  return (
    <div className="col">
      <Link to={`/Informacoes?fruta=${fruta.id}`}>
        <div className="card">
          <p>{fruta.name}</p>
          <p>{fruta.id}</p>
        </div>
      </Link>
    </div>
  );
}
