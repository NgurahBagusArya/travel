
let btn = document.querySelector("#btn"); 
let sidebar = document.querySelector(".sidebar"); 
let search = document.querySelector(".bi-search");
let homeContent = document.querySelector (".home_content");

btn.onclick = function(){
    sidebar.classList.toggle("sidebar-active");
    homeContent.classList.toggle("home_content-activate");
}

search.onclick = function(){
    sidebar.classList.toggle("sidebar-active");
    homeContent.classList.toggle("home_content-activate");
}
let userTransaction = document.getElementById("userTransaction");
let historyTransaction = document.getElementById("historyTransaction");
let transactionCard = document.querySelectorAll("[id^='transactionCard']");
let transactionStatus = document.querySelectorAll(".transactionStatus");

userTransaction.addEventListener('click', function() {
    userTransaction.classList.remove('mt-3', 'text-secondary');
    userTransaction.classList.add('mt-3', 'mouse-pointer');

    historyTransaction.classList.add('mt-3', 'text-secondary');
    historyTransaction.classList.remove('mt-3', 'mouse-pointer');
    transactionGroupActive()

});

historyTransaction.addEventListener('click', function() {
    historyTransaction.classList.remove('mt-3', 'text-secondary');
    historyTransaction.classList.add('mt-3', 'mouse-pointer');

    userTransaction.classList.add('mt-3', 'text-secondary');
    userTransaction.classList.remove('mt-3', 'mouse-pointer');
    transactionGroup();
});

function transactionGroup(){
    transactionStatus.forEach(function(status) {
        if(status.innerHTML === "Status: Transaksi Berakhir"){
            status.closest('.col-md-4').style.display = 'block';
        } else {
            status.closest('.col-md-4').style.display = 'none';
        }
    });
};

function transactionGroupActive(){
    transactionStatus.forEach(function(status) {
        if(status.innerHTML === "Status: Transaksi Berakhir"){
            status.closest('.col-md-4').style.display = 'none';
        } else {
            status.closest('.col-md-4').style.display = 'block';
        }
    });  
};

