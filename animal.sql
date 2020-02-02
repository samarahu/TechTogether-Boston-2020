create table animal(
	animalID int auto_increment primary key,
	animalName varchar(30),
    species varchar(5),
    gender varchar(1),
    
	age int,
    
    #booleans
	children varchar(5),
    likesOutdoors varchar(5),
    hypoallergenic varchar(5),
    histAgression varchar(5),
    houseTrained varchar(5),
    trained varchar(5),
    
    energy varchar(6),
    
    photoLink text,
	bio text
);