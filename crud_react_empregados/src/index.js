import React from 'react';
import ReactDOM from 'react-dom/client';
import Formulario from './Formulario';
import ListaEmpregados from './ListaEmpregados';
import './index.css';

class Tela extends React.Component { 

  state = {
    nome: "",
  };

  handleCallback = (dadosFormulario) =>{
    this.setState({nome: dadosFormulario})
  }
  
  render() {
    const {nome} = this.state;
    return (
      <React.StrictMode>
        <Formulario parentCallback = {this.handleCallback}/>
        <hr/>
        <ListaEmpregados/>
        {nome}
      </React.StrictMode>
    );
  }
}


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Tela />);