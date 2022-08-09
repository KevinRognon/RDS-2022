<div class="fond_header">
    <header>
        <div class="hamburger">
            <img src="../images/logo_hamburger_white.svg" alt="Logo menu hamburger">
        </div>
        <div><img class="logo_DW" src="../images/DW_white.svg" alt=""></div>
        <nav>
            <ul class="nav_links">
                <li><a href>On se présente</a></li>
                <li><a href>Le but?</a></li>
                <li><a href>Une mission?</a></li>
                <li><a href>Le tirant</a></li>
                <li><a href>Bilan</a></li>
            </ul>
        </nav>
        </div>
    </header>
</div>

<style>
    .fond_header{
        display: flex;
    }

    @media screen and (max-width: 1200px){
    *{
        font-size: 14px;
        margin: 0;
    }
    h1, h2, h3, h4{
        font-size: 20px;
    }
    
    .nav_links{
        display: flex;
        flex-direction: column;
        justify-content: center;
        
        
        position: absolute;
        left: 0;
        top: 0;
        background-color: #000000;
        z-index: 1;
        width: 100%;
        height: 100vh;
        margin-left: -100%;
        transition: 0.5s ease;
    }
    
    .mobile_menu{
        margin-left: 0;
        transition: 0.5s ease;
        overflow-y: hidden;
    }


    
    .nav_links li{
        text-align: center;
        align-content: center;
        max-width: 100%;
        height: 50px;

        margin: 20px auto;
    }
    .nav_links li:hover{
        opacity: 20%;
    }

    .nav_links a{
        justify-content: baseline;
        font-size: 30px;
        color: white;
    }

    .logo_DW{
        z-index: 2;
        position: absolute;
        left: 50px;
        top: 15px;
    }

    .hamburger{
        z-index: 2;
        display: inline;
        opacity: 50%;

        position: absolute;
        right: 50px;
        top: 23px;

        transition: 0.4s;
    }

    .hamburger:active{
        opacity: 100%;
    }
}
</style>