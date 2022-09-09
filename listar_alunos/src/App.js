import { useState } from "react";
import AlunoLista from "./AlunoLista";

export default function App() {
  const [alunos, setAluno] = useState([]);
  let contador = 1;

  const mostrarState = () => {
    console.log(alunos);
  };

  const excluirAluno = (idAluno) => {
    console.log("excluir aluno " + idAluno);
  };

  const salvarAluno = (event) => {
    // PARA FAZER!!
    // criar id unico, permitir exclusão do aluno e salvar no localhost
    event.preventDefault();
    let aluno = { id: contador };

    for (let i = 0; i < 4; i++) {
      const dados = event.target[i];
      aluno[dados.name] = dados.value;
      event.target[i].value = "";
    }

    setAluno((stateAnterior) => {
      return [...stateAnterior, aluno];
    });
    contador++;
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
      <button onClick={mostrarState}>Mostrar State</button>
      <ul>
        {alunos.map((aluno) => (
          <AlunoLista
            key={aluno.id}
            aluno={aluno}
            funcExcluirAluno={excluirAluno}
          />
        ))}
      </ul>
    </div>
  );
}
