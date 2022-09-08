import React from "react";

export default function AlunoLista({ nome, curso, semestre, disciplina }) {
  return (
    <li>
      {nome} do curso {curso} no semestre {semestre} fazendo a disciplina{" "}
      {disciplina}
    </li>
  );
}
