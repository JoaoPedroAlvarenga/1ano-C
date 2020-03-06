<p align="center" ><img src='./arduino-logo.png'></img></p>
<h1 align="center" >Caderno de Arduino</h1>

# Base de programação 

## Função base
  - Função void setup() 
  - Função void loop() 
  - pinMode(pino, modo )

## Entrada e saída de dados 

### Portas digitais 
  - digitalRead(pino) 
  - digitalWhite(pino, valor) 

### Portas analógicas 
  Se você for ler dados em uma entrada analógica, você obterá como retorno um valor entre 0 e 1023, pois o Arduino possui um conversor analógico digital de 10bits, então 2¹¹ = 1024

Analog reference (tipo) 
Default - internal - external

- analogRead(pino) 
- analogWhite(pino, valor) 

## Tempo 
 - delay(ms)
 - delayMicroseconds(ms)
 - millis