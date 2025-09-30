function somar(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let soma = valor_1 + valor_2

    document.getElementById('resultado').textContent = "RESULTADO: " + soma

    alert(soma)

}

function sub(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let sub = valor_1 - valor_2

    document.getElementById('resultado').textContent = "RESULTADO: " + sub

    alert(sub)
}

function mult(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let mult = valor_1 * valor_2

    document.getElementById('resultado').textContent = "RESULTADO: " + mult

    alert(mult)
}

function div(){
    let valor_1 = Number(document.getElementById('valor_1').value)
    let valor_2 = Number(document.getElementById('valor_2').value)
    let div = valor_1 / valor_2

    document.getElementById('resultado').textContent = "RESULTADO: " + div

    if(valor_2 === 0){
        alert("Não é possível realizar a divisão")
    }
    else{
        alert(div)
    }
}