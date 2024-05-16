create table if not exists Medicamentos (
    ID_Medicamento       char(5) PRIMARY KEY,
    Nombre               varchar(50) 	not null,
    Substancia           varchar(50) 	not null,
    Via_Administracion   varchar(50) 	not null,
    Cantidad             int 		not null,
    Excipiente           CHAR(10) 	not null,
    Indicaciones         varchar(50) 	not null,
    Reacciones           varchar(50) 	not null,
    Controlado           tinyint 	not null
);

create table if not exists Detalle_Consulta(
    Id_Consulta          int 		not null,
    ID_Medicamento       char(5) 	not null,
    Prescripcion         TEXT 		not null,
    PRIMARY KEY (Id_Consulta, ID_Medicamento),
    FOREIGN KEY (ID_Medicamento) REFERENCES Medicamentos(ID_Medicamento)
);

create table if not exists Medicos (
    ID_Medico            char(10) 	PRIMARY KEY,
    ApellidoPaterno      varchar(30) 	not null,
    ApellidoMaterno      varchar(30) 	not null,
    Nombre               varchar(50) 	not null,
    Especialidad         varchar(50) 	not null,
    Fecha_Titulacion     datetime 	not null
);

create table if not exists pacientes(
    NumeroISSSTE         char(10) 	PRIMARY KEY,
    RFC                  char(10) 	not null,
    CURP                 char(18) 	not null,
    Nombre               varchar(50) 	not null,
    ApellidoPaterno      varchar(50) 	not null,
    ApellidoMaterno      varchar(30) 	not null,
    FechaNacimiento      datetime 	not null,
    Sexo                 char(1) 	not null,
    TipoSanguineo        char(1) 	not null,
    Factor_RH            char(1) 	not null,
    Calle                varchar(50) 	not null,
    Colonia              varchar(50) 	not null,
    Ciudad               varchar(50) 	not null,
    CP                   char(5)
);

create table if not exists Consultas (
    Id_Consulta          int 		not null,
    ID_Medico            char(10) 	not null,
    NumeroISSSTE         char(10) 	not null,
    Indicaciones         text 		not null,
    Fecha                datetime 	not null,
    PRIMARY KEY (Id_Consulta, ID_Medico),
    FOREIGN KEY (ID_Medico) REFERENCES Medicos(ID_Medico),
    FOREIGN KEY (NumeroISSSTE) REFERENCES pacientes(NumeroISSSTE),
    FOREIGN KEY (Id_Consulta) REFERENCES Detalle_Consulta(Id_Consulta)
);
