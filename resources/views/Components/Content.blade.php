<style>
    .nav-ul{
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: gray;
    }
    .nav-li{
        margin-left: 120px;
        float: left;
    }
    .li-a{
        display: block;
        color: whitesmoke;
        padding: 17px 19px;
        text-decoration: none;
        text-align: center;
    }
    .li-a:hover:not(.active){
        background-color: aqua;
        color: black;
    }
    .logo{
        margin-top: 3px;
        margin-left: 3px;
        position: absolute;
        width: 50px;
    }
</style>
<ul class="nav-ul">
<img  class="logo" src="https://cdn.worldvectorlogo.com/logos/react.svg">
    <li class="nav-li"><a class="li-a" href="/home">Home</a></li>
    <li class="nav-li"><a class="li-a" href="/contact">Contact</a></li>
    <li class="nav-li"><a class="li-a" href="/about">About</a></li>
</ul>