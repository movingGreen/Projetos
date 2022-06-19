// Declara as variáveis e inicializa elas pegando os elementos do HTML e do armazenamento local
let myLeads = []
const inputEl = document.getElementById("input-el")
const inputBtn = document.getElementById("input-btn")
const ulEl = document.getElementById("ul-el")
const deleteBtn = document.getElementById("delete-btn")
const leadsFromLocalStorage = JSON.parse( localStorage.getItem("myLeads") )
const tabBtn = document.getElementById("tab-btn")

// Verifica se existem dados no armazenamento local para poder chamar a função de renderização 
if (leadsFromLocalStorage) {
    myLeads = leadsFromLocalStorage
    render(myLeads)
}

// Escuta ao evento de clicar no botão de "salvar tabela" 
tabBtn.addEventListener("click", function(){    
    // Usa a API do Chrome para pegar a tab em uso da janela atual
    chrome.tabs.query({active: true, currentWindow: true}, function(tabs){
        myLeads.push(tabs[0].url)
        localStorage.setItem("myLeads", JSON.stringify(myLeads) ) // Usa o metodo stringfy para transformar o array de links em uma string porque o localStorage só trabalha com strings
        render(myLeads)
    })
})

function render(leads) {
    let listItems = ""
    for (let i = 0; i < leads.length; i++) {
        // Usa de uma template string para formar os itens da lista não ordenada
        listItems += `
            <li>
                <a target='_blank' href='${leads[i]}'>
                    ${leads[i]}
                </a>
            </li>
        `
    }
    // Envia para o html depois do loop para diminuir o trabalho com o DOM
    ulEl.innerHTML = listItems
}

// Escuta ao evento de clique duplo no botão de deletar
deleteBtn.addEventListener("dblclick", function() {
    localStorage.clear()
    myLeads = []
    render(myLeads)
})

// Escuta ao evento de clique no botão de input
inputBtn.addEventListener("click", function() {
    myLeads.push(inputEl.value)
    inputEl.value = ""
    localStorage.setItem("myLeads", JSON.stringify(myLeads) ) // Usa o metodo stringfy para transformar o array de links em uma string porque o localStorage só trabalha com strings
    render(myLeads)
})
