const cartasValidas = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11]

describe("Nova carta - Blackjack", function() {
    
    it("Valor da carta está entre 2 e 11", function() {
        assert.oneOf( getRandomCard(), cartasValidas);
    })
});