create table clients (
   id int PRIMARY KEY AUTO_INCREMENT,
   firstname  varchar(30) NOT NULL,
   lastname varchar(50) NOT NULL,
   proff varchar(50) NOT NULL,
   age int ,
   reff varchar(30) not null 
);
create table randezvous (
   id int PRIMARY KEY AUTO_INCREMENT,
   CRN varchar(30) not null,
   RDV date ,
   FOREIGN KEY (clientId) REFERENCES clients(id) 
);