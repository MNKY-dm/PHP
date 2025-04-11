<div class="navbar" style=".navbar {
    /* Régler les dimensions de la barre de navigation + sa couleur + son organisation */
    padding : 0 5%; /* Respecter les padding latéraux globaux de la page */
    height: 70px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    background-color: #4B3567;
}
    .navbar .menu {
        /* Organiser le menu de la barre de navigation */
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-direction: row;
        gap: 5%;
        width: 40%;
    }


.navbar .logo {
    /* Centrer le logo en centre de la navbar */
    left: 10%; 
}

.navbar .main-button {
    /* Ajuster la taille du bouton de la navbar et le positionner à droite */
    width: 40%;
    justify-items: end;
}">
    <ul class="menu">
        <li><a href="#">Link One</a></li>
        <li><a href="#">Link Two</a></li>
        <li><a href="#">Link Three</a></li>
    </ul>
    <img src="Logo/Logo SDK v2.png" alt="logo du Service Desk en petit" class="logo" width="35px">
    <div class="main-button">
        <div class="button-1">
            <a href="#">Button</a>
        </div>
    </div>
</div>
