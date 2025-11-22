document.addEventListener('DOMContentLoaded', function() {
    // Seleciona TODOS os wrappers de select personalizado
    const allSelectWrappers = document.querySelectorAll('.custom-select-wrapper');

    // Itera sobre cada wrapper encontrado
    allSelectWrappers.forEach(wrapper => {
        const customSelect = wrapper.querySelector('.custom-select');
        const selectTrigger = wrapper.querySelector('.custom-select__trigger');
        const customOptions = wrapper.querySelector('.custom-options');
        const options = wrapper.querySelectorAll('.custom-option');
        
        // Encontra o <select> real associado a este wrapper
        // (Neste caso, o elemento <select> que vem logo antes do wrapper)
        const realSelect = wrapper.previousElementSibling;

        // Abrir/Fechar o dropdown específico
        selectTrigger.addEventListener('click', (e) => {
            // Impede que o evento de clique na janela feche o menu imediatamente
            e.stopPropagation();
            // Fecha outros selects que possam estar abertos
            closeAllSelects(customSelect);
            // Abre ou fecha o select atual
            customSelect.classList.toggle('open');
        });

        // Lógica para selecionar uma opção
        options.forEach(option => {
            option.addEventListener('click', () => {
                if (option.classList.contains('selected')) {
                    customSelect.classList.remove('open');
                    return;
                }

                // Atualiza a seleção no dropdown personalizado
                options.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');
                selectTrigger.querySelector('span').textContent = option.textContent;
                
                // Atualiza o valor no <select> real escondido
                if (realSelect) {
                    realSelect.value = option.getAttribute('data-value');
                }
                
                customSelect.classList.remove('open');
            });
        });
    });

    // Função para fechar todos os selects abertos, exceto o atual
    function closeAllSelects(exceptThisOne) {
        allSelectWrappers.forEach(wrapper => {
            const select = wrapper.querySelector('.custom-select');
            if (select !== exceptThisOne) {
                select.classList.remove('open');
            }
        });
    }

    // Fecha todos os dropdowns se clicar fora deles
    window.addEventListener('click', () => {
        closeAllSelects(null);
    });
});