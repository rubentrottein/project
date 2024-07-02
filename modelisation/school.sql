#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: enseignant
#------------------------------------------------------------

CREATE TABLE enseignant(
        id_teacher Int  Auto_increment  NOT NULL ,
        firstName  Varchar (50) NOT NULL ,
        lastName   Varchar (50) NOT NULL ,
        birthDate  Date NOT NULL ,
        email      Varchar (50) NOT NULL ,
        password   Varchar (50) NOT NULL
	,CONSTRAINT enseignant_PK PRIMARY KEY (id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cours
#------------------------------------------------------------

CREATE TABLE cours(
        id_cours Int  Auto_increment  NOT NULL ,
        title    Varchar (50) NOT NULL ,
        content  Text NOT NULL
	,CONSTRAINT cours_PK PRIMARY KEY (id_cours)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: apprenant
#------------------------------------------------------------

CREATE TABLE apprenant(
        id_teacher Int  Auto_increment  NOT NULL ,
        firstName  Varchar (50) NOT NULL ,
        lastName   Varchar (50) NOT NULL ,
        birthDate  Date NOT NULL ,
        email      Varchar (50) NOT NULL ,
        password   Varchar (50) NOT NULL
	,CONSTRAINT apprenant_PK PRIMARY KEY (id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        id_comment Int  Auto_increment  NOT NULL ,
        content    Text NOT NULL
	,CONSTRAINT commentaire_PK PRIMARY KEY (id_comment)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id_rate  Int  Auto_increment  NOT NULL ,
        rate     Int NOT NULL ,
        id_cours Int NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (id_rate)

	,CONSTRAINT note_cours_FK FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chapitre
#------------------------------------------------------------

CREATE TABLE Chapitre(
        id       Int NOT NULL ,
        title    Varchar (255) NOT NULL ,
        id_cours Int NOT NULL
	,CONSTRAINT Chapitre_PK PRIMARY KEY (id)

	,CONSTRAINT Chapitre_cours_FK FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenu
#------------------------------------------------------------

CREATE TABLE contenu(
        id    Int NOT NULL ,
        title Varchar (70) NOT NULL ,
        type  Varchar (25) NOT NULL ,
        media Varchar (255) NOT NULL
	,CONSTRAINT contenu_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: televerse
#------------------------------------------------------------

CREATE TABLE televerse(
        id_teacher Int NOT NULL ,
        id_cours   Int NOT NULL
	,CONSTRAINT televerse_PK PRIMARY KEY (id_teacher,id_cours)

	,CONSTRAINT televerse_enseignant_FK FOREIGN KEY (id_teacher) REFERENCES enseignant(id_teacher)
	,CONSTRAINT televerse_cours0_FK FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: consulte
#------------------------------------------------------------

CREATE TABLE consulte(
        id_cours              Int NOT NULL ,
        id_teacher            Int NOT NULL ,
        id_teacher_enseignant Int NOT NULL
	,CONSTRAINT consulte_PK PRIMARY KEY (id_cours,id_teacher,id_teacher_enseignant)

	,CONSTRAINT consulte_cours_FK FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
	,CONSTRAINT consulte_apprenant0_FK FOREIGN KEY (id_teacher) REFERENCES apprenant(id_teacher)
	,CONSTRAINT consulte_enseignant1_FK FOREIGN KEY (id_teacher_enseignant) REFERENCES enseignant(id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: repond
#------------------------------------------------------------

CREATE TABLE repond(
        id_comment Int NOT NULL ,
        id_teacher Int NOT NULL
	,CONSTRAINT repond_PK PRIMARY KEY (id_comment,id_teacher)

	,CONSTRAINT repond_commentaire_FK FOREIGN KEY (id_comment) REFERENCES commentaire(id_comment)
	,CONSTRAINT repond_enseignant0_FK FOREIGN KEY (id_teacher) REFERENCES enseignant(id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: poste
#------------------------------------------------------------

CREATE TABLE poste(
        id_comment Int NOT NULL ,
        id_teacher Int NOT NULL
	,CONSTRAINT poste_PK PRIMARY KEY (id_comment,id_teacher)

	,CONSTRAINT poste_commentaire_FK FOREIGN KEY (id_comment) REFERENCES commentaire(id_comment)
	,CONSTRAINT poste_apprenant0_FK FOREIGN KEY (id_teacher) REFERENCES apprenant(id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evalue
#------------------------------------------------------------

CREATE TABLE evalue(
        id_rate    Int NOT NULL ,
        id_teacher Int NOT NULL
	,CONSTRAINT evalue_PK PRIMARY KEY (id_rate,id_teacher)

	,CONSTRAINT evalue_note_FK FOREIGN KEY (id_rate) REFERENCES note(id_rate)
	,CONSTRAINT evalue_apprenant0_FK FOREIGN KEY (id_teacher) REFERENCES apprenant(id_teacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: questionne
#------------------------------------------------------------

CREATE TABLE questionne(
        id_comment Int NOT NULL ,
        id_cours   Int NOT NULL
	,CONSTRAINT questionne_PK PRIMARY KEY (id_comment,id_cours)

	,CONSTRAINT questionne_commentaire_FK FOREIGN KEY (id_comment) REFERENCES commentaire(id_comment)
	,CONSTRAINT questionne_cours0_FK FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)ENGINE=InnoDB;