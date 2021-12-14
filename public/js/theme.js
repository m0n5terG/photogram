const checkbox = document.getElementById('checkbox');
        console.log('checkbox')
        checkbox.addEventListener('change', () => {
            document.body.classList.toggle('dark');
        });