const showButton = document.getElementById('showButton');
        const hideButton = document.getElementById('hideButton');
        const textContainer = document.getElementById('textContainer');

        showButton.addEventListener('click', () => {
            textContainer.style.display = 'block';
        });

        hideButton.addEventListener('click', () => {
            textContainer.style.display = 'none';
        });