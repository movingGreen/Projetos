import React from 'react';
import ReactDOM from 'react-dom/client';
import Formulario from './Formulario';
import ListarEmpregados from './ListarEmpregados';
import './index.css';

class Tela extends React.Component { 

  render() {
    return (
      <React.StrictMode>
        <Formulario />
        <hr/>
        <ListarEmpregados/>
      </React.StrictMode>
    );
  }
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Tela />);