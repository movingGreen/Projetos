import React from "react";

export default function AlunoLista(props) {
  const { id, nome, curso, semestre, disciplina } = props.aluno;

  return (
    <li>
      <p>
        {nome} do curso {curso} no {semestre}° semestre fazendo a disciplina{" "}
        {disciplina}.&nbsp;
        <button onClick={props.excluirAluno(id)}>Excluir</button>
      </p>
    </li>
  );
}
