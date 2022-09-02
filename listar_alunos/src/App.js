import React from "react";

function App() {
  return (
    <div>
      <h1>Listar alunos.</h1>
      <form>
        <label htmlFor="nome">Nome do aluno:</label>
          <input 
            type="text" 
            id="nome"
            name="nome" 
          />
        <label htmlFor="curso">Nome do curso:</label>
          <input 
            type="text" 
            id="curso"
            name="curso" 
          />
        <label htmlFor="periodo">Período:</label>
          <input 
            type="text" 
            id="periodo"
            name="periodo" 
          />
        <label htmlFor="disciplina">Disciplina:</label>
          <input 
            type="text" 
            id="disciplina"
            name="disciplina" 
          />
      </form>
    </div>
  );
}

export default App;
