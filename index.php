<!DOCTYPE html>
<html>
    <head>
        <title>Pogramación con expresiones</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Uso de función preg_match</h2>
        <table>
            <tr><td colspan="2"><p>Verificar si una cadena contiene una palabra específica. Comprueba si en el texto se encuentra la palabra 'tutorial'. 
                        Muestra el valor de retorno de preg_match.</p></td></tr>
            <tr>
                <td>$texto = "Hola, bienvenido al tutorial de PHP."; $palabra = "tutorial";</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="2"><p>Comprobar si una cadena se compone solo de dígitos. Muestra el valor de retorno de preg_match.</p></td></tr>
            <tr>
                <td>$texto = "123456";</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="2"><p>Busca trozos de texto que satisfagan un subpatrón.
                        En este caso, cadenas con letras con espacios en blanco al final.
                        Muestra el valor del texto que coincidió con el patrón completo y el texto que coincide con el
                        primer subpatrón</p></td></tr>
            <tr>
                <td>$texto = 'John Doe William';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="2"><p>Comprueba si una cadena corresponde con el formato de un correo electronico correcto</p></td></tr>
            <tr>
                <td>$texto = 'us-er@ejemplo.com';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="2"><p>Comprueba si una cadena corresponde con el formato de un teléfono correcto. Ejemplo +xx (xxx) xxxx-xxxx</p></td></tr>
            <tr>
                <td>$texto = '+17 (555) 1235-4567';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="2"><p>Captura y muestra las distintas secciones del teléfono siguiendo el formato anterior</p></td></tr>
            <tr>
                <td>$texto = '+17 (555) 123-4567';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra el nombre y la extensión del nombre de un archivo</p></td></tr>
            <tr>
                <td>$texto = 'documento.pdf';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra los distintos campos de una fecha en el formato dd/mm/aaaa</p></td></tr>
            <tr>
                <td>$texto = 'La fecha de hoy es 20/03/2023';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra el nombre de usuario y dominio de una dirección de correo</p></td></tr>
            <tr>
                <td>$texto = 'user@example.com';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra el protocolo, dominio y ruta de una URL</p></td></tr>
            <tr>
                <td>$texto = 'https://www.ejemplo.com/ejemplo/ruta';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Comprueba si una cadena corresponde con el formato de una dirección IP</p></td></tr>
            <tr>
                <td>$texto = '253.168.75.1';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra las partes de una dirección IP</p></td></tr>
            <tr>
                <td>$texto = '253.168.75.1';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Captura y muestra las subcadenas 'foo', 'bar' y 'baz' junto con los offsets de cada subcadena. Usa el flag PREG_OFFSET_CAPTURE</p></td></tr>
            <tr>
                <td>$texto = 'foobarbaz';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
        <h2>Uso de función preg_match_all</h2>
        <table>
            <tr><td colspan = "2"><p>Analiza el texto e identifica todas las ocurrencias de vocales</p></td></tr>
            <tr>
                <td>$texto = 'La lluvia en Sevilla es una maravilla';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza el texto e identifica todas las ocurrencias de grupos de dos o más Vocales</p></td></tr>
            <tr>
                <td>$texto = 'miau abuelo';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Capturar y mostrar todas las ocurrencias de un patrón y sus subpatrones. El subpatrón debe identificar cadenas compuestas por un número y una palabra.
                        (5 manzanas) (12 naranjas). Usa el flag PREG_PATTERN_ORDER</p></td></tr>
            <tr>
                <td>$texto = 'He comprado 5 manzanas y 12 naranjas';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Capturar y mostrar todas las ocurrencias de un patrón y sus subpatrones. El subpatrón debe identificar cadenas compuestas por un número y una palabra.
                        (5 manzanas) (12 naranjas). Usa el flag PREG_SET_ORDER</p></td></tr>
            <tr>
                <td>$texto = 'He comprado 5 manzanas y 12 naranjas';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y captura todas las ocurrencias de un patrón y sus subpatrones en una cadena.
                        El patrón define cadenas que contienen un nombre y una edad separada por comas. Por cada patrón el subpatrón debe capturar el nombre y el número de años.
                        Usa el flag PREG_PATTERN_ORDER.</p></td></tr>
            <tr>
                <td>$texto = 'John Smith, 25 años Peter Floyd, 34 años';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y captura todas las ocurrencias de un patrón y sus subpatrones en una cadena.
                        El patrón define cadenas que contienen un nombre y una edad separada por comas. Por cada patrón el subpatrón debe capturar el nombre y el número de años.
                        Usa el flag PREG_SET_ORDER.</p></td></tr>
            <tr>
                <td>$texto = 'John Smith, 25 años Peter Floyd, 34 años';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y captura los subpatrones que representan el nombre, el apellido y la edad de la cadena. Usa nombres para cada uno de los subpatrones.</p></td></tr>
            <tr>
                <td>$texto = 'John Smith, 25 años';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Encontrar todas las coincidencias de un patrón y sus subpatrones en una cadena con nombres de subpatrones</p></td></tr>
            <tr><td><pre>
                    $texto = &lt&lt&ltFOO
                    a: 1
                    b: 2
                    c: 3
                    FOO;
                    </pre></td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
        <h2>Uso de función preg_replace</h2>
        <table>
            <tr><td colspan = "2"><p>Analiza y elimina todos los números de una cadena</p></td></tr>
            <tr>
                <td>$texto = 'La contraseña es 1234-ABCD-5678';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y reemplaza todas las ocurrencias de una palabra en un texto con otra palabra. Sustituye la palabra Sevilla por Madrid</p></td></tr>
            <tr>
                <td>$texto = 'La lluvia en Sevilla es una maravilla';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y reconstruye una cadena con el formato deseado. (xxx) xxx-xxxx</p></td></tr>
            <tr>
                <td>$texto = 'Mis números de contacto son 1234567890, 123 456 7890 y 123 456-7890.';</td>
                <td><!-- Escribe tu código aquí --></td>            </tr>
            <tr><td colspan = "2"><p>Analiza y elimina las tags HTML de un texto</p></td></tr>
            <tr>
                <td>$texto = <p>Este es un <strong>ejemplo</strong> de texto con <a href="#">enlaces</a>.</p></td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y reemplaza los espacios por guiones en un texto</p></td></tr>
            <tr>
                <td>$texto = 'Este es un texto de ejemplo para     URL';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y escribe la primera letra de cada palabra en mayúsculas en un texto</p></td></tr>
            <tr>
                <td>$texto = 'este es un texto de ejemplo';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y elimina la primera y última letra de un texto</p></td></tr>
            <tr>
                <td>$texto = 'Esta es una cadena de ejemplo';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Analiza y oculta los caracteres del nombre de usuario posteriores al segundo caracter y los caracteres anteriores a los dos últimos del dominio de alto nivel.
                        Sustituye esos caracteres por la cadena '***' </p></td></tr>
            <tr>
                <td>$texto = 'correo@example.com';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>

            <tr><td colspan = "2"><p>Analiza y remplaza los espacios por guiones bajos en varios textos guardados en un array</p></td></tr>
            <tr>
                <td>$texto = ['Esta es una cadena con espacios', 'Esta cadena también tiene espacios'];</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
        <h2>Uso de función preg_filter</h2>
        <table>
            <tr><td colspan = "2"><p>Analiza y remplaza los espacios por guiones bajos en varios textos guardados en un array</p></td></tr>
            <tr>
                <td>$texto = ['Esta es una cadena con espacios', 'Esta cadena también tiene espacios'];</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
        <h2>Uso de función preg_split</h2>
        <table>
            <tr><td colspan = "2"><p>Divide una cadena en palabras separadas por espacios</p></td></tr>
            <tr>
                <td><pre>$texto = 'Esto es una cadena            de prueba';</pre></td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Divide una cadena en partes separadas por comas o punto y coma</p></td></tr>
            <tr>
                <td>$texto = 'Manzanas, naranjas, plátanos; peras; kiwis, mangos';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Divide una cadena en partes que contienen números solamente</p></td></tr>
            <tr>
                <td>$texto = 'abc123def456ghi789jkl';</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Divide una cadena en partes que contienen números solamente eliminando las partes vacías</p></td></tr>
            <tr>
                <td>$texto = 'abc123def456ghi789jkl';
                </td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan = "2"><p>Divide una cadena en partes que contienen números solamente eliminando las partes vacías y muestra la posición en la que se encuentran a partir del comienzo de la cadena</p></td></tr>
            <tr>
                <td>$texto = 'abc123def456ghi789jkl';
                </td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
    </body>
</html>
