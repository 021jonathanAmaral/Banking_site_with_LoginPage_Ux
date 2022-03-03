

// parte 1 -> parte 2
function next1(){
    // Sistema de validação e de transição
    let nome = document.getElementById('nometxt').value
    let email = document.getElementById('emailtxt').value
    let tel = document.getElementById('teletxt').value
    
    if( nome == '' || email == '' || tel == '' ){

        window.alert("Preencha todos os dados")
        return false
      
    }else{
        const desaparecer = document.getElementById('part1_div')
        desaparecer.classList.add('mudar')
    
    
    
         const aparecer = document.getElementById('part2_div')
        aparecer.classList.add('mudar')
        
        return true
    
    }
}


// parte 2 -> parte 1
function return1(){
    // Sistema de validação e de transição


    const desaparecer = document.getElementById('part1_div')
    desaparecer.classList.remove('mudar')
    
    
    
    const aparecer = document.getElementById('part2_div')
    aparecer.classList.remove('mudar')
    
   

}



// parte 2 -> parte 3
function next2(){
    // Sistema de validação e de transição
    let nome_pai = document.getElementById('nome_paitxt').value
    let nome_mae = document.getElementById('nome_maetxt').value
    let date = document.getElementById('data_nasctxt').value


    if(nome_pai == '' || nome_mae == '' || date == '' ){

        window.alert("Preencha todos os dados")
       
        return false
    }else{
      
    const desaparecer = document.getElementById('part2_div')
    desaparecer.classList.remove('mudar')
    
    
    
    
    const aparecer = document.getElementById('part3_div')
    aparecer.classList.add('mudar')

    return true
    }
    
}
// parte 3 -> parte 2
function return2(){
    // Sistema de validação e de transição
    const desaparecer = document.getElementById('part3_div')
    desaparecer.classList.remove('mudar')

    const aparecer = document.getElementById('part2_div')
    aparecer.classList.add('mudar')
   
}