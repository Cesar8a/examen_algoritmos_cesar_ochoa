## Sección Patrones de Diseño.

- [Problema 1:] ¿Qué patrón de diseño utilizarías y por qué?

Strategy, porque permite crear una jerarquía de clases separadas y combinar las clases originales en una, reduciendo con ello el código duplicado, además de poder cambiar de un algoritmo a otro durante el tiempo de ejecución

- [Problema 2:] Factory Method vs Abstract Factory:

* Abstract Factory más flexible que Factory Method
* Abstract Factory más complicaco que Factory Method
* Abstract Factory se basa en grupo de métodos de Factory Method
* Abstract Factory es un patrón creacional de objetos relacionados

Y proporciona un caso de uso: 

El modo oscuro (dark theme) para la interfaz gráfica, que varias aplicaciones (Google, WhatsApp) estan implementado mediante la utilización de factorias abstractas (Abstract Factory) siguiendo la lógica que una implementación crea elementos en modo claro y otra implementación crea elementos en modo obscuro
