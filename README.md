# Estudo de PHP - Estruturas condicionais e lógica de pedido

Exercício pra praticar estruturas condicionais (`if`, `else if`, `else`) e operadores lógicos simulando um sistema de cálculo de pedido com descontos e taxa de entrega.

## Conceitos estudados

- **Estruturas condicionais** — `if`, `else if`, `else` pra controlar o fluxo do programa
- **Operadores lógicos** — `&&` (AND) pra combinar múltiplas condições (ex: cliente ativo E quer entrega)
- **Comparação** — `==` pra verificar igualdade, `<` pra verificar se houve desconto
- **Variáveis booleanas** — uso de `true` e `false` pra representar estados (cliente ativo, assinante do clube, cupom ativo)
- **Cálculos condicionais** — aplicar descontos e taxas baseado em condições diferentes
- **Exibição condicional** — mostrar mensagens diferentes na tela conforme o resultado das condições

## Lógica do exercício

- Cliente inativo → pedido zerado
- Assinante do clube → 25% de desconto no pedido
- Cupom ativo → 10% de desconto no pedido
- Cliente ativo que quer entrega → taxa de entrega aplicada
- Verificação final se houve desconto e/ou taxa de entrega

## Arquivos

- `index.php` — página principal com os exemplos

---
[Ver online](https://mirandaromario09.github.io/2-)
