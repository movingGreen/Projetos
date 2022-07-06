import React from 'react';


export default class Formulario extends React.Component{
  
  onTrigger = (event) => {
    this.props.parentCallback(event.target.myname.value);
    event.preventDefault();
  }
  
  render() {  
    return (
      <div>
        <form className='Formulario' onSubmit={this.onTrigger}>
          <label htmlFor="nome">Nome do funcionario:</label>
            <input 
              type="text" 
              id='nome'
              name="nome" 
              // onChange={(event) => {
              //   setNome(event.target.value);
              // }}
            />
          <label htmlFor="idade">Idade:</label>
            <input 
              type="number" 
              id='idade'
              name="idade"
              // onChange={(event) => {
              //   setIdade(event.target.value);
              // }}
            />
          <label htmlFor="nacionalidade">Nacionalidade:</label>
            <input 
              type="text" 
              id='nacionalidade'
              name="nacionalidade" 
              // onChange={(event) => {
              //   setNacionalidade(event.target.value);
              // }}
            />
          <label htmlFor="posicao">Posição:</label>
            <input 
              type="text" 
              id='posicao'
              name="posicao" 
              // onChange={(event) => {
              //   setPosicao(event.target.value);
              // }}
            />
          <label htmlFor="salario">Valor do salário (mês):</label>
            <input 
              type="number" 
              id='salario'
              name="salario"
              // onChange={(event) => {
              //   setSalario(event.target.value);
              // }}
            />
          <input type='submit' value="Submit">Adicionar funcionário</input>
        </form>
      </div>
    );
  }
}