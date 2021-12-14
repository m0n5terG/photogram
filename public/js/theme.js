var checkbox = document.getElementById('checkbox');

    checkbox.addEventListener('click', () => {

        if (document.body.classList.contains('dark-theme')) {
            
            document.body.classList.remove('dark-theme');

            setCookie('theme', 'light');
        }

        else {

            document.body.classList.add('dark-theme');

            setCookie('theme', 'dark');
        }
    });
    
    function setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
