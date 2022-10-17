import React from "react";

export default function CardFrutas({ fruta }) {
  return (
    <div className="col">
      <div className="card">
        <p>{fruta.name}</p>
        <p>{fruta.id}</p>
      </div>
    </div>
  );
}
