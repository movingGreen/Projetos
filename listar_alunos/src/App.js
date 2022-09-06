import React, { useState } from "react";

export default function App() {
  const [aluno, setAluno] = useState([]);

  const salvarAluno = (event) => {
    event.preventDefault();
    alert(`Voce salvou um aluno `);
    let alunos = [...aluno];
    alunos.push({ aluno: 123 });
    setAluno();
  };

  return (
    <div>
      <h1>Salvar alunos</h1>
      <form onSubmit={salvarAluno}>
        <label>
          Nome
          <input
            type="text"
            name="nome"
          />
        </label>
        <br />
        <label>
          Curso
          <input
            type="text"
            name="curso"
          />
        </label>
        <br />
        <label>
          Semestre
          <input
            type="number"
            name="semestre"
            min="1"
            max="10"
          />
        </label>
        <br />
        <label>
          Disciplina
          <input
            type="text"
            name="disciplina"
          />
        </label>
        <input
          type="submit"
          value="Salvar"
        />
      </form>
      <hr />
      <ul></ul>
    </div>
  );
}
