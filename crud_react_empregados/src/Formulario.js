import React from 'react';
import { useState } from 'react';


export default class Formulario extends React.Component{
  
  lerFormulario () {
    const dadosEmpregado = document.querySelector(".Formulario");
    let dados = "";

    for (let i = 0; i < dadosEmpregado.length; i++) {
      dados =+ dadosEmpregado.elements[i].value + " ; ";
    }

    console.log(dados);
  }

  render() {  
    return (
      <div>
        <form className='Formulario' onSubmit={this.lerFormulario}>
          <label htmlFor="nome">Nome do funcionario:</label>
            <input 
              type="text" 
              id='nome'
              name="nome" 
            />
          <label htmlFor="idade">Idade:</label>
            <input 
              type="number" 
              id='idade'
              name="idade"
            />
          <label htmlFor="nacionalidade">Nacionalidade:</label>
            <input 
              type="text" 
              id='nacionalidade'
              name="nacionalidade" 
            />
          <label htmlFor="posicao">Posição:</label>
            <input 
              type="text" 
              id='posicao'
              name="posicao" 
            />
          <label htmlFor="salario">Valor do salário (mês):</label>
            <input 
              type="number" 
              id='salario'
              name="salario"
            />
          <input 
            type='submit' 
            value="Submit">
              Adicionar funcionário
          </input>
        </form>
      </div>
    );
  }
}