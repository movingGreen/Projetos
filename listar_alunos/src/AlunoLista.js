import React from "react";

export default function AlunoLista(props) {
  const { id, nome, curso, semestre, disciplina } = props.aluno;

  const btnEditar = () => {
    props.editarAluno(id);
  };

  return (
    <li>
      <p>
        {nome} do curso {curso} no {semestre}° semestre fazendo a disciplina{" "}
        {disciplina}.&nbsp;
        <button onClick={btnEditar}>Editar</button>
      </p>
    </li>
  );
}
