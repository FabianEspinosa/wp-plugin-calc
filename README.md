# API para el plugin de la calculadora de WordPress

Esta API ha sido creada como parte de una prueba técnica para la empresa Izertis. Se trata de una API para el plugin de la calculadora de WordPress, que permite realizar operaciones aritméticas básicas.

## Instrucciones

### Sin Docker

Para utilizar esta API sin Docker, debes tener instalados los siguientes requisitos:

- Composer
- PHP 8.1 o superior
- Symfony 6
- Symfony CLI
- npm

Una vez que tengas instalados estos requisitos, sigue estos pasos:

1. Clona el repositorio de GitHub
2. Instala las dependencias: `composer install`
3. Levanta el servidor: `symfony server:start`

### Con Docker

Para utilizar esta API con Docker, debes tener instalado Docker en tu sistema.

Una vez que tengas instalado Docker, sigue estos pasos:

1. Clona el repositorio de GitHub:
2. Levanta los contenedores: `docker-compose up -d`

## Endpoints

- `GET /add/{a}/{b}`: suma dos números y devuelve el resultado.
- `GET /subtract/{a}/{b}`: resta dos números y devuelve el resultado.
- `GET /multiply/{a}/{b}`: multiplica dos números y devuelve el resultado.
- `GET /divide/{a}/{b}`: divide dos números y devuelve el resultado.
- `GET /exponent/{a}/{b}`: eleva un número a la potencia de otro número y devuelve el resultado.
- `GET /percentage/{a}/{b}`: calcula el porcentaje de un número y devuelve el resultado.

## Contacto

Para cualquier duda o sugerencia, puedes contactarme a través de los siguientes medios:

- Nombre: Fabian Armando Espinosa Hernandez
- Teléfono: +34600390584
- Email: fabianespinosa1988@gmail.com
- GitHub: https://github.com/FabianEspinosa
- Linkedin: https://www.linkedin.com/in/faehz/
