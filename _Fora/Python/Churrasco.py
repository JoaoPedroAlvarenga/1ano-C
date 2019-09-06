# Itens x
# Numero de pessoas x
# Quantidade Por Pessoa
# Custo Por Unidade
# Custo Total
# Custo Por Item

import time

itens = ["Carne", "Pão de alho", "Coração", "Cervega", "Refrigerante", "Água", "Queijo Coalho", "Banana", "Sorvete", "Linguiça"]
itensU = [0.3, 0.5, 0.4, 0.3, 0.5, 0.4, 0.5, 0.4, 0.5, 0.4]
itensV = [25, 13, 25, 36, 7, 2.5, 13, 3, 25, 15]

print("============================================================")
NP = float(input("Numero de pessoas: ")) # Numero de pessoas #
print("============================================================")

CP0 = (itensU[0] * NP) * itensV[0] # Custo Por Item
CP1 = (itensU[1] * NP) * itensV[1]
CP2 = (itensU[2] * NP) * itensV[2]
CP3 = (itensU[3] * NP) * itensV[3]
CP4 = (itensU[4] * NP) * itensV[4]
CP5 = (itensU[5] * NP) * itensV[5]
CP6 = (itensU[6] * NP) * itensV[6]
CP7 = (itensU[7] * NP) * itensV[7]
CP8 = (itensU[8] * NP) * itensV[8]
CP9 = (itensU[9] * NP) * itensV[9]

CT = CP0 + CP1 + CP2 + CP3 + CP4 + CP5 + CP6 + CP7 + CP8 + CP9  # Custo total #

CTP = CT / NP  # Custo por Pesso#

P = [CP0 / NP, CP1 / NP, CP2 / NP, CP3 / NP, CP4 / NP, CP5 / NP, CP6 / NP, CP7 / NP, CP8 / NP, CP9 / NP]  # Custo de Itens Por Pessoa #

print("O custo total é de R${} reais para fazer o churrasco".format(CT))
print("============================================================")
i = 0
while i < 9:
    print("O custo por pessoa é de {} é de R$ {:.2f} por pessoa".format(itens[i],P[i]))
    i += 1
print("============================================================")
print("Custo total por pessoa é de R${:.2f}".format(CTP))
print("============================================================")

time.sleep(10)
