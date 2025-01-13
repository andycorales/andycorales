<?php

//include('include/config.php');
//include('top_page_secure.php');
?>

<style>
body{
 /*   background:linear-gradient(to right,#088700,#7cfc00);*/
    background:linear-gradient(70deg,rgba(231,75,44,1) 50%,rgba(252,136,25,1)100%);
    background-repeat: no-repeat;
    padding:2% 12%;
    scroll-behavior: smooth;
}
/*container of white background*/
.mycontainer{
    display:flex;
    align-items:center;
    justify-content: center;
    background-repeat: no-repeat;
   /* background:linear-gradient(to right,#088700,#7cfc00,90%);*/

    background:transparent;
    height:auto;
    max-width: 100%;
    min-width: 100%;
    min-height: 100%;
}

/*white background inside body*/
.whitebgV2{
    min-width: clamp(80%,88%,88%);
    background:#fff;
    border-radius: 15px 15px 15px 15px;
    overflow-x: hidden;

}
/*-----------------------------------------------------------profile menu*/
.profilemenu{
    right:10%;
    position:absolute;

}
.profilemenu button{
    float:right;
    border-block: hidden;
    margin-right: 70px;
    background:green;
}
.profilemenu .profilemenupic img{
    position:relative;
    margin-left:-8px;
    width:30px;
    height:30px;
    border-radius: 50%;
    cursor:pointer;
}
.profilemenu button:hover{
    opacity: 1;
    background: black;
}
.profilemenu .profilemenubg{
    margin-right: 200px;
    position:relative;
    top:20px;
    right:-10px;
    padding:10px 20px;
    width:200px;
    box-sizing:0 5px 25px rgba(0,0,0,0.1);
    border-radius:15px;
    transition: 0.5s;
    float:right;
    margin-right:25%;
    display:none;
    background:lightgrey;
    z-index:1;

}
.profilemenu .profilemenubg::before{
    content:'';
    position:absolute;
    top:-5px;
    right:28px;
    width:10px;
    height:10px;
    background:lightgrey;
    transform:rotate(45deg);

}
.profilemenu .profilemenubg h3{
    width:100%;
    text-align: center;
    font-size: 18px;
    padding:5px 0;
    font-weight: 500;
    font-size: 18px;
    color:#555;
    line-height: 1.2em;
}
.profilemenu .profilemenubg ul li{
    list-style:none;
    padding:10px 0;
    border-top:1px solid rgba(0,0,0,0.05);
    display:flex;
    align-items: center;
}
.profilemenu .profilemenubg ul li img{
    width:25px;
    opacity: 0.5;
    transition: 0.5s;
}
.profilemenu .profilemenubg ul li:hover img{
    opacity:1;
}
.profilemenu .profilemenubg ul li a{
    display:inline-block;
    text-decoration: none;
    color:#555;
    font-weight: 500;
    transition:0.5s;

}
.profilemenu .profilemenubg ul li:hover a{
    color:ff5d94;

}


.topmenu{
    display:flex;
    justify-content: center;
    align-items: :center;
    min-width: clamp(80%,88%,88%);
    max-width: auto;
    min-height: 20%;
    max-height: auto;
    background:#fff;
    overflow-x: scroll;
}

.selectorbutton{
    display:flow-root;
    justify-content: center;
    align-items: :center;
    min-width: 40%;
    margin: 1% 5%;
    height:60px;
    float:left;
    background:linear-gradient(70deg,rgba(8,135,0,1) 20%,rgba(8,135,0,1)100%);
    border-radius: 5px;
    border:0px;
    overflow-x: hidden;
    overflow-y: hidden;
    position:relative;
    font-size: 50%;

}
.selectorbutton h1{
    color:white;
}
.selectorbutton:hover{
    background:black;

}

table{
    position:sticky;
}



/*responsive web design / screen priority*/

@media (max-width: 992px) {
      body {
    padding:1% 6%;
      }
    }


@media (max-width: 768px) {
      body {
    padding:1% 6%;
      }
    }

@media (max-width: 576px) {
      body {
    padding:1% 2%;
      }
      .selectorbutton{
        min-width: 80%;
        display: flex;
        align-items: center;
        align-content: center;
        margin: 1.6% 10%;
        font-size: 10px;
        text-decoration-color: white;
      }
    }


@media (orientation: landscape) {
      body {
    padding:1% 6%;
      }
    }
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trash</title>
</head>
<body>

    <div class="mycontainer">
        <div class="whitebgV2">
            <div><br/>

                  <div  class="profilemenu"><br/>
                            <div class="profilemenupic"><button style="border-radius: 50%;height:30px;width:30px;" onclick="toggle()"><img src="image/profilemenu.png"></img></button></div>

                              <div id="jsprofilemenubg" class="profilemenubg">
                                <h3>Andy is my name</h3><h3>System Dev.</h3>
                                <ul>
                                    <li style="color:lightgrey;"><img src="image/username2.png"><a href="#">My Profile</a></li>
                                    <li style="color:lightgrey;"><img src="image/username2.png"><a href="#">Edit Profile</a></li>
                                    <li style="color:lightgrey;"><img src="image/username2.png"><a href="#">Change Password</a></li>
                                    <li style="color:lightgrey;"><img src="image/username2.png"><a href="#">Logout</a></li>
                                </ul>

                             </div>

                        </div>  <br/>





            <div style="display:block; width:100%; margin-left: 40px;">profile</div>
            <div class="topmenu" style="overflow-x:unset;"><h2>SELECTION MENU</h2></div><br/><hr width="90%"></hr><br/>
            <div class="topmenu" style="overflow-x:unset;">DESCRIPTION</div><br/>

            <div style=" overflow-x: hidden;"><br/>

            <button  class="selectorbutton"><h1>1. ACCOUNT<img src=""></h1></button>
            <button  class="selectorbutton"><h1>2. SCHEDULE</h1></button>
            <button  class="selectorbutton"><h1>3. APPRAISAL</h1></button>
            <button  class="selectorbutton"><h1>4. VOTING</h1></button>
            <button  class="selectorbutton"><h1>5. ID</h1></button>
            <button  class="selectorbutton"><h1>6. INVENTORY</h1></button>
            <button  class="selectorbutton"><h1>7. EMP.GUIDE</h1></button>
            <button  class="selectorbutton"><h1>8. EXAMINATION</h1></button>
            <button  class="selectorbutton"><h1>9. PAYROLL</h1></button>
            <button  class="selectorbutton"><h1>10. POS</h1></button>
            <button  class="selectorbutton"><h1>11. E-COMMERCE</h1></button>
            <button  class="selectorbutton"><h1>12. Online Chatbox</h1></button>
            

            </div><br/>


           </div>
        </div>
    </div>


    <script>
        function toggle(){
            var myjsprofilemenubg = document.getElementById("jsprofilemenubg")[1];
            var myprofilemenubg = document.getElementById("jsprofilemenubg");


            window.onclick = (event) => {
                 if(myjsprofilemenubg.style.display === "flow-root"){
                    if(myjsprofilemenubg.style.display === "none"){
                        myjsprofilemenubg.style.display = "none";
                    }
                }
            }


            if(myprofilemenubg.style.display === "flow-root"){
                myprofilemenubg.style.display = "none";
            }
            else{
                myprofilemenubg.style.display = "flow-root";
            }
            myprofilemenubg.addEventListener('click',event => event.stopPropagation());
        }
    </script>

</body>
</html>