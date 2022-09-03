import React, {useState} from "react";

export default function App() {
  const [Alunos, setAlunos] = useState([])

  // const salvaAluno = () => {
  //   setAlunos(
  //     stateAnterior => {
  //       return {}
  //     }
  //   );
  // }

  const tratarSubmit = (event) => {
    event.preventDefault();
    alert("Você salvou um aluno!");
  }

  return (
    <div>
      <h1>Salvar alunos</h1>
      <form onSubmit={tratarSubmit}>
        <label>Nome do aluno:
          <input 
            type="text"
            name="nome" 
          />
        </label>
        <br/>
        <br/>
        <label>Nome do curso:
          <input 
            type="text"
            name="curso" 
          />
        </label>
        <br/>
        <br/>
        <label>Período:
          <input 
            type="text"
            name="periodo" 
          />
        </label>
        <br/>
        <br/>
        <label>Disciplina:
          <input 
            type="text"
            name="disciplina" 
          />
        </label>
        <br/>
        <br/>
        <input type="submit">
          Salvar
        </input>
      </form>
      <br/>
      <hr/>
      <h2>Lista de alunos</h2>
      <br/>
      <ul>

      </ul>
    </div>
  );
}