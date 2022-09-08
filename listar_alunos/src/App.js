import { useState } from "react";
import AlunoLista from "./AlunoLista";

export default function App() {
  const [alunos, setAluno] = useState([]);

  const mostrarState = () => {
    console.log(alunos);
  };

  const salvarAluno = (event) => {
    event.preventDefault();
    console.log(event.target[0].value);
    let inputs = event.target;
    let aluno = {};

    for (let i = 0; i < 4; i++) {
      const dados = inputs[i];
      // console.log(`${dados.name} - ${dados.value}`);
      aluno[dados.name] = dados.value;
    }

    console.log("antes do state", aluno);

    setAluno((stateAnterior) => {
      return [...stateAnterior, aluno];
    });

    console.log("================State=========");
    console.log(alunos);
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
          <AlunoLista aluno={aluno} />
        ))}
      </ul>
    </div>
  );
}
