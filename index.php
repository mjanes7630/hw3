<!DOCTYPE html>
<html lang=en-us>
    <head>
        <title>Rick&Morty API</title>
        <meta charset="utf-8">
        
        <!-- Jquerry !-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Custom CSS !-->
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
        
    </head>
    
    <body>
        <h1>Random Character</h1>
        <h3>Hit the button for a random Rick and Morty Character</3>
        <br><br>
        <div id="content">
            <div id="charImg">
                <img id="charPort">
            </div>
            <div id="charInfo">
                <div>
                    Name : <span id="name"></span>
                    <br><br>
                </div>
                <div>
                    Status : <span id="status"></span>
                    <br><br>
                </div>
                <div>
                    Species : <span id="species"></span>
                    <br><br>
                </div>
                <div>
                    Type : <span id="type"></span>
                    <br><br>
                </div>
                <div>
                    Gender : <span id="gender"></span>
                    <br><br>
                </div>
                <div>
                    Location : <span id="location"></span>
                    <br><br>
                </div>
                <div>
                    Origin : <span id="origin"></span>
                    <br><br>
                </div>
            </div>
        </div>
        <button id="submit" value="randChar">Click</button>
        
        <script>
            $("#submit").on("click", async function(){
                let url = `https://rickandmortyapi.com/api/character/${randNum()}`;
                let response = await fetch(url);
                
                //Response validation
                if(response.ok){
                    let data = await response.json();
                    
                    $("#charPort").attr("src", data.image);
                   	$("#name").html(data.name);
                   	$("#status").html(data.status);
                   	$("#species").html(data.species);
                   	$("#type").html(data.type);
                   	$("#gender").html(data.gender);
                   	$("#location").html(data.location.name);
                   	$("#origin").html(data.origin.name);
                }
                else{
                    alert("HTTP-Error: " + response.status);
                }
            });
            
            function randNum(){
                var x = Math.floor((Math.random() * 591) + 1);
                return x;
            };
            
        </script>
    </body>
</html>
