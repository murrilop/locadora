const ctxReceita = document.getElementById('graficoReceita').getContext('2d');
const ctxLocacoes = document.getElementById('graficoLocacoes').getContext('2d');

// Receita por Categoria
new Chart(ctxReceita, {
    type: 'bar',
    data: {
        labels: ['Compactos', 'SUVs', 'Utilitários'],
        datasets: [{
            label: 'Receita (R$)',
            data: [3000, 5000, 2000],
            backgroundColor: ['#ff6f00', '#00b8a9', '#ff0000'],
        }]
    }
});

// Locações por Mês
new Chart(ctxLocacoes, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai'],
        datasets: [{
            label: 'Locações',
            data: [20, 25, 30, 28, 35],
            borderColor: '#00b8a9',
            fill: false,
        }]
    }
});
