<style>
    header {
        width: 100%;
        height: var(--altura-header);
        padding: 0 70px;
        background: #fff;
        box-shadow: 0 4px 4px #0004;
        position: sticky;
        top: 0;
        z-index: 1000;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logos {
        height: 100%;
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .logo-priset {
        height: 70%;
    }

    .logos-gob {
        height: 50%;

        display: flex;
        align-items: center;
        gap: 20px;
    }

    .logo-priset img,
    .logos-gob img {
        height: 100%;
    }

    .logos-gob img:nth-of-type(2) {
        height: 80%;
    }

    .logos-gob .linea-vertical {
        width: 2px;
        height: 100%;
        background: var(--color-1);
    }


    .botones {
        display: flex;
        justify-content: right;
        align-items: center;
        gap: 10px;
    }


    .botones img {
        width: 30px;
    }

    .botones>a {
        font-family: var(--ff-bold);
        font-size: 20px;

        display: flex;
        justify-content: right;
        align-items: center;
        gap: 10px;
    }
</style>


<!-- <div class="header">
    <h1>MINISTERIO DE DESARROLLO PRISET {{$variable}}</h1>
</div> -->

<header>
    <div class="logos">
        <div class="logo-priset">
            <img src="img/logos/logo_priset.svg" alt="priset logo">
        </div>
        <div class="logos-gob">
            <img src="img/logos/logo_gob_sj.svg" alt="">

            <div class="linea-vertical"></div>

            <img src="img/logos/logo_mdhyps.svg" alt="">
        </div>
    </div>
</header>