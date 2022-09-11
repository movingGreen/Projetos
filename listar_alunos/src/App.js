import { useState, useEffect, useRef } from "react";
import AlunoLista from "./AlunoLista";

export default function App() {
  const [alunos, setAluno] = useState([]);
  const inputName = useRef();
  const inputCurso = useRef();
  const inputSemestre = useRef();
  const inputDisciplina = useRef();
  const CHAVE_LOCAL_STORAGE = "ListaDeAlunos";

  useEffect(() => {
    const alunosSalvos = JSON.parse(localStorage.getItem(CHAVE_LOCAL_STORAGE));
    if (alunosSalvos) setAluno(alunosSalvos);
  }, []);

  useEffect(() => {
    localStorage.setItem(CHAVE_LOCAL_STORAGE, JSON.stringify(alunos));
  }, [alunos]);

  const editarAluno = (idAluno) => {
    const listaAlunos = alunos;
    const novaListaAlunos = [];

    for (const aluno of listaAlunos) {
      if (aluno.id === idAluno) {
        inputName.current.value = aluno.nome;
        inputCurso.current.value = aluno.curso;
        inputSemestre.current.value = aluno.semestre;
        inputDisciplina.current.value = aluno.disciplina;
        continue;
      }
      novaListaAlunos.push(aluno);
    }

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
      <h1 className="text-center">Salvar alunos</h1>
      <form
        onSubmit={salvarAluno}
        className="text-center">
        <label>
          Nome
          <input
            type="text"
            name="nome"
            ref={inputName}
            required
          />
        </label>
        <br />
        <label>
          Curso
          <input
            type="text"
            name="curso"
            ref={inputCurso}
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
            ref={inputSemestre}
            required
          />
        </label>
        <br />
        <label>
          Disciplina
          <input
            type="text"
            name="disciplina"
            ref={inputDisciplina}
            required
          />
        </label>
        <br />
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
            editarAluno={editarAluno}
          />
        ))}
      </ol>
    </div>
  );
}
