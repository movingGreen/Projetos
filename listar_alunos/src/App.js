import React, { useState } from "react";
import AlunoLista from "./AlunoLista";

export default function App() {
  const [aluno, setAluno] = useState([]);

  const salvarAluno = (event) => {
    event.preventDefault();
    console.log(event.target[0].value);

    let inputs = event.target;

    for (let i = 0; i < 4; i++) {
      const dados = inputs[i];
      console.log(`${dados.name} - ${dados.value}`);
    }
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
