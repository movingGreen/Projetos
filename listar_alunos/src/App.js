import { useState, useEffect } from "react";
import AlunoLista from "./AlunoLista";

export default function App() {
  const [alunos, setAluno] = useState([]);
  const CHAVE_LOCAL_STORAGE = "ListaDeAlunos";

  useEffect(() => {
    const alunosSalvos = JSON.parse(localStorage.getItem(CHAVE_LOCAL_STORAGE));
    if (alunosSalvos) setAluno(alunosSalvos);
  }, []);

  useEffect(() => {
    localStorage.setItem(CHAVE_LOCAL_STORAGE, JSON.stringify(alunos));
  }, [alunos]);

  const excluirAluno = (idAluno) => {
    const listaAlunos = alunos;
    const novaListaAlunos = listaAlunos.filter((aluno) => aluno.id !== idAluno);
    setAluno(novaListaAlunos);
  };

  const salvarAluno = (event) => {
    event.preventDefault();
    let aluno = { id: Math.random() };

    for (let i = 0; i < 4; i++) {
      const dados = event.target[i];
      aluno[dados.name] = dados.value;
      event.target[i].value = "";
    }

    setAluno((stateAnterior) => {
      return [...stateAnterior, aluno];
    });
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
            required
          />
        </label>
        <br />
        <label>
          Curso
          <input
            type="text"
            name="curso"
            required
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
            required
          />
        </label>
        <br />
        <label>
          Disciplina
          <input
            type="text"
            name="disciplina"
            required
          />
        </label>
        <input
          type="submit"
          value="Salvar"
        />
      </form>
      <hr />
      <ol>
        {alunos.map((aluno) => (
          <AlunoLista
            key={aluno.id}
            aluno={aluno}
            excluirAluno={excluirAluno}
          />
        ))}
      </ol>
    </div>
  );
}
