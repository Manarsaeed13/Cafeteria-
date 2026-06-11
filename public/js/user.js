let searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", function(){

    let filter = this.value.toLowerCase();

    let rows = document.querySelectorAll("#guestTable tbody tr");

    rows.forEach(row => {

        let text = row.innerText.toLowerCase();

        row.style.display =
            text.includes(filter)
            ? ""
            : "none";

    });

});

document.querySelectorAll(".deleteGuest").forEach(btn=>{

    btn.addEventListener("click",()=>{

        if(confirm("Delete this guest?")){
            btn.closest("tr").remove();
        }

    });

});
