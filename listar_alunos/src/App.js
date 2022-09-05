import React from "react";

export default function App() {
  return (
    <div>
      <h1>Salvar alunos</h1>
      <form>
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
