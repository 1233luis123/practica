<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP Completo</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f8f9fa; }
        h2 { color: #2c3e50; }
        h3 { color: #34495e; margin-top: 30px; }
        .pregunta { background: #fff; padding: 15px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input[type=submit] { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        input[type=text], textarea { width: 90%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        textarea { font-family: monospace; min-height: 100px; }
        .resultado { margin-top: 20px; padding: 10px; background: #e9ecef; border-radius: 8px; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
        code { background: #e8e8e8; padding: 2px 5px; border-radius: 3px; }
    </style>
</head>
<body>

<h2>🧠 Examen Completo: PHP Fundamentos, POO, Cookies y Sesiones</h2>

<form method="POST">

    <h3>🌐 Sección 1: Fundamentos de PHP</h3>

    <div class="pregunta">
        <p><b>1.</b> ¿Qué tipo de lenguaje es PHP?</p>
        <label><input type="radio" name="p1" value="a"> Un lenguaje compilado del lado del cliente</label><br>
        <label><input type="radio" name="p1" value="b"> Un lenguaje interpretado del lado del servidor</label><br>
        <label><input type="radio" name="p1" value="c"> Un lenguaje de marcado como HTML</label><br>
    </div>

    <div class="pregunta">
        <p><b>2.</b> ¿Cómo se inicia y finaliza un bloque de código PHP?</p>
        <label><input type="radio" name="p2" value="a"> &lt;php&gt; ... &lt;/php&gt;</label><br>
        <label><input type="radio" name="p2" value="b"> &lt;?php ... ?&gt;</label><br>
        <label><input type="radio" name="p2" value="c"> &lt;script&gt; ... &lt;/script&gt;</label><br>
    </div>

    <div class="pregunta">
        <p><b>3.</b> ¿Cuál es la característica principal de PHP en cuanto a su distribución?</p>
        <label><input type="radio" name="p3" value="a"> Es un software de pago</label><br>
        <label><input type="radio" name="p3" value="b"> Es open source (código abierto) y gratuito</label><br>
        <label><input type="radio" name="p3" value="c"> Solo funciona en Windows</label><br>
    </div>

    <div class="pregunta">
        <p><b>4.</b> Completa el código para imprimir "Hola Mundo" en PHP:</p>
        <pre>______ "Hola Mundo";</pre>
        <input type="text" name="p4" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>5.</b> ¿Cuál símbolo se usa para declarar variables en PHP?</p>
        <label><input type="radio" name="p5" value="a"> #</label><br>
        <label><input type="radio" name="p5" value="b"> $</label><br>
        <label><input type="radio" name="p5" value="c"> @</label><br>
    </div>

    <div class="pregunta">
        <p><b>6.</b> ¿PHP es multiplataforma?</p>
        <label><input type="radio" name="p6" value="a"> Sí, funciona en diferentes sistemas operativos</label><br>
        <label><input type="radio" name="p6" value="b"> No, solo funciona en Linux</label><br>
        <label><input type="radio" name="p6" value="c"> Solo funciona en servidores Apache</label><br>
    </div>

    <div class="pregunta">
        <p><b>7.</b> Completa la declaración de una variable llamada "edad" con valor 25:</p>
        <pre>$edad __ 25;</pre>
        <input type="text" name="p7" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>8.</b> ¿Qué estructura de control se usa para ejecutar código múltiples veces?</p>
        <label><input type="radio" name="p8" value="a"> if</label><br>
        <label><input type="radio" name="p8" value="b"> for</label><br>
        <label><input type="radio" name="p8" value="c"> echo</label><br>
    </div>

    <div class="pregunta">
        <p><b>9.</b> ¿Cuál es la función correcta para obtener la longitud de una cadena en PHP?</p>
        <label><input type="radio" name="p9" value="a"> length()</label><br>
        <label><input type="radio" name="p9" value="b"> strlen()</label><br>
        <label><input type="radio" name="p9" value="c"> size()</label><br>
    </div>

    <div class="pregunta">
        <p><b>10.</b> Completa el código de un bucle for que cuente del 1 al 5:</p>
        <pre>for ($i = 1; $i __ 5; $i++) {
    echo $i;
}</pre>
        <input type="text" name="p10" placeholder="Completa el código">
    </div>

    <h3>📚 Sección 2: Programación Orientada a Objetos (POO)</h3>

    <div class="pregunta">
        <p><b>11.</b> ¿Cuál es la función principal del método <code>__construct()</code> en una clase PHP?</p>
        <label><input type="radio" name="p11" value="a"> Permite definir una variable pública.</label><br>
        <label><input type="radio" name="p11" value="b"> Inicializa los atributos de la clase al crear el objeto.</label><br>
        <label><input type="radio" name="p11" value="c"> Sirve para destruir el objeto.</label><br>
    </div>

    <div class="pregunta">
        <p><b>12.</b> En el código del ejemplo, ¿qué hace el método <code>agregarNota()</code>?</p>
        <label><input type="radio" name="p12" value="a"> Calcula el promedio de las notas.</label><br>
        <label><input type="radio" name="p12" value="b"> Agrega una nota válida (entre 0 y 20) al arreglo de notas.</label><br>
        <label><input type="radio" name="p12" value="c"> Imprime el nombre del estudiante.</label><br>
    </div>

    <div class="pregunta">
        <p><b>13.</b> ¿Qué devuelve el método <code>estado()</code>?</p>
        <label><input type="radio" name="p13" value="a"> Devuelve "Aprobado" o "Desaprobado" según el promedio.</label><br>
        <label><input type="radio" name="p13" value="b"> Devuelve el número de notas ingresadas.</label><br>
        <label><input type="radio" name="p13" value="c"> Devuelve siempre "Aprobado".</label><br>
    </div>

    <div class="pregunta">
        <p><b>14.</b> Completa el siguiente fragmento de código:</p>
        <pre>public function getNombre() {
    return ________;
}</pre>
        <input type="text" name="p14" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>15.</b> ¿Cuál de las siguientes líneas crea un objeto de la clase <code>Estudiante</code> correctamente?</p>
        <label><input type="radio" name="p15" value="a">$nuevo = Estudiante("Luis");</label><br>
        <label><input type="radio" name="p15" value="b">$nuevo = new Estudiante("Luis");</label><br>
        <label><input type="radio" name="p15" value="c">Estudiante->$nuevo("Luis");</label><br>
    </div>

    <div class="pregunta">
        <p><b>16.</b> ¿Qué tipo de dato devuelve el método <code>calcularPromedio()</code>?</p>
        <label><input type="radio" name="p16" value="a"> Entero (int)</label><br>
        <label><input type="radio" name="p16" value="b"> Decimal (float)</label><br>
        <label><input type="radio" name="p16" value="c"> Texto (string)</label><br>
    </div>

    <div class="pregunta">
        <p><b>17.</b> ¿Qué palabra clave se usa para acceder a propiedades de la clase actual?</p>
        <label><input type="radio" name="p17" value="a"> self</label><br>
        <label><input type="radio" name="p17" value="b"> $this</label><br>
        <label><input type="radio" name="p17" value="c"> parent</label><br>
    </div>

    <div class="pregunta">
        <p><b>18.</b> ¿Cuál es la diferencia entre <code>public</code>, <code>private</code> y <code>protected</code>?</p>
        <label><input type="radio" name="p18" value="a"> public: accesible desde cualquier lugar; private: solo dentro de la clase; protected: dentro de la clase y clases hijas.</label><br>
        <label><input type="radio" name="p18" value="b"> public: solo dentro de la clase; private: desde cualquier lugar; protected: no existe.</label><br>
        <label><input type="radio" name="p18" value="c"> No hay diferencia, son lo mismo.</label><br>
    </div>

    <div class="pregunta">
        <p><b>19.</b> Completa el método setter para asignar la edad de un estudiante:</p>
        <pre>public function setEdad($edad) {
    ________ = $edad;
}</pre>
        <input type="text" name="p19" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>20.</b> Escribe un método en POO que reciba dos números y devuelva su suma:</p>
        <textarea name="p20" placeholder="Escribe el método completo aquí..."></textarea>
    </div>

    <h3>🍪 Sección 3: Cookies en PHP</h3>

    <div class="pregunta">
        <p><b>21.</b> ¿Qué función se utiliza para crear una cookie en PHP?</p>
        <label><input type="radio" name="p21" value="a"> create_cookie()</label><br>
        <label><input type="radio" name="p21" value="b"> setcookie()</label><br>
        <label><input type="radio" name="p21" value="c"> new_cookie()</label><br>
    </div>

    <div class="pregunta">
        <p><b>22.</b> ¿Cómo se accede al valor de una cookie llamada "usuario"?</p>
        <label><input type="radio" name="p22" value="a"> $_COOKIE['usuario']</label><br>
        <label><input type="radio" name="p22" value="b"> $COOKIE['usuario']</label><br>
        <label><input type="radio" name="p22" value="c"> getCookie('usuario')</label><br>
    </div>

    <div class="pregunta">
        <p><b>23.</b> Completa el código para crear una cookie llamada "nombre" con valor "Juan" que dure 1 hora:</p>
        <pre>______("nombre", "Juan", time() + 3600);</pre>
        <input type="text" name="p23" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>24.</b> ¿Cómo se elimina una cookie en PHP?</p>
        <label><input type="radio" name="p24" value="a"> delete_cookie()</label><br>
        <label><input type="radio" name="p24" value="b"> Asignarle un tiempo de expiración en el pasado</label><br>
        <label><input type="radio" name="p24" value="c"> unset($_COOKIE['nombre'])</label><br>
    </div>

    <div class="pregunta">
        <p><b>25.</b> ¿Dónde se almacenan las cookies?</p>
        <label><input type="radio" name="p25" value="a"> En el servidor</label><br>
        <label><input type="radio" name="p25" value="b"> En el navegador del cliente</label><br>
        <label><input type="radio" name="p25" value="c"> En la base de datos</label><br>
    </div>

    <h3>🔐 Sección 4: Sesiones en PHP</h3>

    <div class="pregunta">
        <p><b>26.</b> ¿Qué función se usa para iniciar una sesión en PHP?</p>
        <label><input type="radio" name="p26" value="a"> start_session()</label><br>
        <label><input type="radio" name="p26" value="b"> session_start()</label><br>
        <label><input type="radio" name="p26" value="c"> init_session()</label><br>
    </div>

    <div class="pregunta">
        <p><b>27.</b> ¿Cómo se almacena un valor en una variable de sesión?</p>
        <label><input type="radio" name="p27" value="a"> $_SESSION['clave'] = $valor;</label><br>
        <label><input type="radio" name="p27" value="b"> $SESSION['clave'] = $valor;</label><br>
        <label><input type="radio" name="p27" value="c"> session_set('clave', $valor);</label><br>
    </div>

    <div class="pregunta">
        <p><b>28.</b> Completa el código para verificar si existe una sesión llamada "usuario_id":</p>
        <pre>if (______($_SESSION['usuario_id'])) {
    echo "Sesión existe";
}</pre>
        <input type="text" name="p28" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>29.</b> ¿Qué función destruye todas las variables de sesión?</p>
        <label><input type="radio" name="p29" value="a"> session_destroy()</label><br>
        <label><input type="radio" name="p29" value="b"> destroy_session()</label><br>
        <label><input type="radio" name="p29" value="c"> clear_session()</label><br>
    </div>

    <div class="pregunta">
        <p><b>30.</b> ¿Cuál es la principal diferencia entre cookies y sesiones?</p>
        <label><input type="radio" name="p30" value="a"> Las cookies se almacenan en el cliente, las sesiones en el servidor</label><br>
        <label><input type="radio" name="p30" value="b"> Las sesiones se almacenan en el cliente, las cookies en el servidor</label><br>
        <label><input type="radio" name="p30" value="c"> No hay diferencia</label><br>
    </div>

    <h3>🔧 Sección 5: Estructuras de Control y Arrays</h3>

    <div class="pregunta">
        <p><b>31.</b> ¿Cuál es la estructura correcta de un condicional if-else en PHP?</p>
        <label><input type="radio" name="p31" value="a"> if ($x > 5) { } else { }</label><br>
        <label><input type="radio" name="p31" value="b"> if $x > 5 then else endif</label><br>
        <label><input type="radio" name="p31" value="c"> if ($x > 5) then { } else { }</label><br>
    </div>

    <div class="pregunta">
        <p><b>32.</b> ¿Cómo se declara un array asociativo en PHP?</p>
        <label><input type="radio" name="p32" value="a"> $arr = ["nombre" => "Juan", "edad" => 25];</label><br>
        <label><input type="radio" name="p32" value="b"> $arr = ["nombre", "Juan", "edad", 25];</label><br>
        <label><input type="radio" name="p32" value="c"> $arr = {nombre: "Juan", edad: 25};</label><br>
    </div>

    <div class="pregunta">
        <p><b>33.</b> Completa el código de un switch-case:</p>
        <pre>switch($dia) {
    ____ 1:
        echo "Lunes";
        break;
}</pre>
        <input type="text" name="p33" placeholder="Completa el código">
    </div>

    <div class="pregunta">
        <p><b>34.</b> ¿Qué función se usa para recorrer un array en PHP?</p>
        <label><input type="radio" name="p34" value="a"> foreach</label><br>
        <label><input type="radio" name="p34" value="b"> each</label><br>
        <label><input type="radio" name="p34" value="c"> loop</label><br>
    </div>

    <div class="pregunta">
        <p><b>35.</b> ¿Cómo se agrega un elemento al final de un array?</p>
        <label><input type="radio" name="p35" value="a"> array_push($arr, $elemento);</label><br>
        <label><input type="radio" name="p35" value="b"> $arr.add($elemento);</label><br>
        <label><input type="radio" name="p35" value="c"> push($arr, $elemento);</label><br>
    </div>

    <input type="submit" name="evaluar" value="✅ Evaluar respuestas">

</form>

<?php
if (isset($_POST['evaluar'])) {
    $respuestas = [
        "p1" => "b",
        "p2" => "b",
        "p3" => "b",
        "p4" => "echo",
        "p5" => "b",
        "p6" => "a",
        "p7" => "=",
        "p8" => "b",
        "p9" => "b",
        "p10" => "<=",
        "p11" => "b",
        "p12" => "b",
        "p13" => "a",
        "p14" => "\$this->nombre",
        "p15" => "b",
        "p16" => "b",
        "p17" => "b",
        "p18" => "a",
        "p19" => "\$this->edad",
        "p21" => "b",
        "p22" => "a",
        "p23" => "setcookie",
        "p24" => "b",
        "p25" => "b",
        "p26" => "b",
        "p27" => "a",
        "p28" => "isset",
        "p29" => "a",
        "p30" => "a",
        "p31" => "a",
        "p32" => "a",
        "p33" => "case",
        "p34" => "a",
        "p35" => "a"
    ];

    $puntaje = 0;
    $total = count($respuestas);

    // Evaluar respuestas normales
    foreach ($respuestas as $clave => $correcta) {
        if (isset($_POST[$clave]) && trim($_POST[$clave]) == $correcta) {
            $puntaje++;
        }
    }

    // Evaluar pregunta 20 (método POO)
    if (isset($_POST['p20'])) {
        $respuesta20 = trim($_POST['p20']);
        // Verificar que contenga elementos básicos de un método
        if (stripos($respuesta20, 'function') !== false && 
            stripos($respuesta20, 'return') !== false &&
            (stripos($respuesta20, '+') !== false || stripos($respuesta20, 'suma') !== false)) {
            $puntaje++;
            $total++;
        } else {
            $total++;
        }
    }

    echo "<div class='resultado'>";
    echo "<h3>📊 Resultado Final:</h3>";
    echo "Has obtenido <b>$puntaje</b> de <b>$total</b> preguntas correctas.<br>";
    echo "Porcentaje: <b>" . round(($puntaje/$total)*100, 2) . "%</b><br><br>";

    // Desglose por secciones
    echo "<h4>📈 Análisis por Sección:</h4>";
    echo "<ul style='list-style: none;'>";
    echo "<li>🌐 Fundamentos de PHP: Preguntas 1-10</li>";
    echo "<li>📚 POO: Preguntas 11-20</li>";
    echo "<li>🍪 Cookies: Preguntas 21-25</li>";
    echo "<li>🔐 Sesiones: Preguntas 26-30</li>";
    echo "<li>🔧 Estructuras: Preguntas 31-35</li>";
    echo "</ul><br>";

    if ($puntaje == $total) {
        echo "🎉 ¡Excelente! Dominas perfectamente PHP en todos sus aspectos.";
    } elseif ($puntaje >= 30) {
        echo "💪 Muy buen trabajo, tienes un sólido conocimiento de PHP.";
    } elseif ($puntaje >= 24) {
        echo "👍 Buen trabajo, pero aún puedes mejorar en algunos temas.";
    } elseif ($puntaje >= 18) {
        echo "📖 Vas por buen camino, sigue estudiando.";
    } else {
        echo "📘 Necesitas repasar más los fundamentos de PHP.";
    }

    echo "</div>";
}
?>

</body>
</html>