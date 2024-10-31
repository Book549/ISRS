const showPassword =  document.querySelector("#showpassword");
const passwordField= document.querySelector("#login-pass");

showPassword.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})


function toggleHamburgerIcon(el) {
    el.classList.toggle("change");
}

const myMenu = document.getElementById("myMenu");
const hamIcon = document.getElementById("hamIcon");

hamIcon.addEventListener("click", function() {
    if (myMenu.style.display === "block") {
        myMenu.style.display = "none";
    } else {
        myMenu.style.display = "block";
    }
});


function filterBySport(sport) {
    const eventCards = document.querySelectorAll('.event-card');
    eventCards.forEach(card => {
        if (card.dataset.sport === sport || sport === 'all') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}


function sortTable(n) {
    const table = document.getElementById("medalTable");
    let switching = true;
    let shouldSwitch;
    let dir = "desc";
    let switchCount = 0;

    while (switching) {
        switching = false;
        const rows = table.rows;
        
        for (let i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            const x = rows[i].getElementsByTagName("TD")[n];
            const y = rows[i + 1].getElementsByTagName("TD")[n];
            const xContent = n === 1 ? x.innerHTML.toLowerCase() : parseInt(x.innerHTML);
            const yContent = n === 1 ? y.innerHTML.toLowerCase() : parseInt(y.innerHTML);

            if (dir === "desc") {
                if (xContent < yContent) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir === "asc") {
                if (xContent > yContent) {
                    shouldSwitch = true;
                    break;
                }
            }
        }

        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchCount++;
        } else if (switchCount === 0 && dir === "desc") {
            dir = "asc";
            switching = true;
        }
    }
}


