package main

import (
	"fmt"
)

func main() {
	var num int

	fmt.Println("Digite um número:")
	fmt.Scanln(&num)

	if num%2 == 0 {
		fmt.Println("O número é par")
	} else {
		fmt.Println("O número é impar")
	}
}
