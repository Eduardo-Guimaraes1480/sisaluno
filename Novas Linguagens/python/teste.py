listaprodutos = ["iphone", "ipad", "notebook"]
listaprecos = [1500, 2000, 5000]

for produto in listaprodutos:
    print(produto)
for item in listaprecos:
    print(item * 2)
    
for i in range(5):
    print("Velejar Software")

vendas = 1000

custo = 300

lucro = vendas - custo

if vendas > 1000:
    print("Ganhou Bonus")
else:
    print("Não Ganou Bonus")

print("O lucro foi de:", lucro)
