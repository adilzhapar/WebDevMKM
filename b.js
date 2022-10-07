class Player {
    number;
    name;
    surname;
    position;

    constructor(number, name, surname, position){
        this.number = number;
        this.name = name;
        this.surname = surname;
        this.position = position;
    }

    getData() {
        console.log(`${this.number}; ${this.name}; ${this.surname}; ${this.position}`);
    }

}

class Club {
    name;
    country;
    ratingPoints;
    players;

    constructor(name, country, ratingPoints, ...players){
        this.name = name;
        this.country = country;
        this.ratingPoints = ratingPoints;
        this.players = players;
    }


    printClubData() {
        console.log(`${this.name}; ${this.country}; ${thils.ratingPoints}\n`);
        this.players.forEach((player) => player.getData());
    }
}


