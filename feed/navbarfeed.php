

<link rel="stylesheet" href="navbarfeed.css">
<script src="https://kit.fontawesome.com/38883336bd.js" crossorigin="anonymous"></script>

<?php

include("../connect.php");
include("../check.php");
if(!empty($_GET['search']))
{
$data = $_GET['search'];
$sql = "SELECT * FROM user WHERE nome LIKE '%$data%' OR sobrenome LIKE '%$data%' ORDER BY id_client DESC";
}
else{
   
    $sql = "SELECT * FROM user ORDER BY nome DESC";
}

?>

    <nav>
        <div class="nav-container">
                <div class="create">
                    <div class="logo">
                    <a href="../index.php"> <img src="../assets/img/logo.png" alt="EnderSoftwares"></a>
                    </div>
                    <div class="search-bar">
                        <div class="group">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                            <input placeholder="Search" type="search" class="pesquisarnav" id="search" name="search">
                        </div>
                    </div>
                </div>
        </div>
    </nav>
<script>
    var search = document.getElementById('search');

    search.addEventListener("keydown", function(event) {
if (event.key === "Enter"){

    searchData(); 
    };
});



    function searchData(){
        window.location = 'feed.php?search=' + search.value;
    }
</script>

