const chk = document.getElementById('chk')
    chk.addEventListener('change', (e) => {
        if (e.target.checked) {
        document.body.setAttribute("data-bs-theme", "dark");
    } else {
        document.body.setAttribute("data-bs-theme", "light");
    }})


