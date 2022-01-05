<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro con múltiples pasos</title>
    <link rel="stylesheet" href="/css/styleprogress.css"> 
</head>
<body>
    <div class="container">
        <header>login form</header>
    <div class="form-outer">
        <div class="progress-bar">
            <div class="step">
                <p>name</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>codeudor</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>referencia</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <form action="#" class="#">
            <div class="page">
                <div class="title">informacion basica</div>
                    <div class="field">
                        <div class="label">primer nombre</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">segundo nombre</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <button>next</button>
                </div>
            </div>   
            
            <div class="page">
                <div class="title">informacion codeudor</div>
                    <div class="field">
                        <div class="label">primer nombre codeudor </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">segundo nombre codeudor</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <button class="prev-1 prev">prev</button>
                        <button class="next-1 next">siguiente</button>
                </div>
            </div> 

            <div class="page">
                <div class="title">informacion referencias</div>
                    <div class="field">
                        <div class="label">primer nombre referencias </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">segundo nombre referencias</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <button class="prev-2 prev">prev</button>
                        <button class="next-1 next">siguiente</button>
                </div>
            </div> 


        </form>
    </div>
    </div>
</body>
</html>