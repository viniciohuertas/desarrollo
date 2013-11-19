CREATE TABLE prioridad (
  idprioridad INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  prioridad CHAR(255) NULL,
  descripcion TEXT NULL,
  PRIMARY KEY(idprioridad)
);

CREATE TABLE producto (
  idproducto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  producto CHAR(255) NULL,
  descripcion TEXT NULL,
  PRIMARY KEY(idproducto)
);

CREATE TABLE estado (
  idestado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  estado CHAR(255) NULL,
  descripcion TEXT NULL,
  PRIMARY KEY(idestado)
);

CREATE TABLE ticket (
  idticket INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  asunto CHAR(255) NOT NULL,
  texto TEXT NULL,
  iduser INTEGER UNSIGNED NULL,
  producto_idproducto INTEGER UNSIGNED NOT NULL,
  prioridad_idprioridad INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idticket),
  INDEX ticket_FKIndex1(prioridad_idprioridad),
  INDEX ticket_FKIndex2(producto_idproducto),
  FOREIGN KEY(prioridad_idprioridad)
    REFERENCES prioridad(idprioridad)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(producto_idproducto)
    REFERENCES producto(idproducto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE adjunto (
  idadjunto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  adjunto CHAR(255) NULL,
  descripcion TEXT NULL,
  path TEXT NULL,
  ticket_idticket INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idadjunto),
  INDEX adjunto_FKIndex1(ticket_idticket),
  FOREIGN KEY(ticket_idticket)
    REFERENCES ticket(idticket)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE comentarios (
  idcomentarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  comentarios TEXT NULL,
  ticket_idticket INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idcomentarios),
  INDEX comentarios_FKIndex1(ticket_idticket),
  FOREIGN KEY(ticket_idticket)
    REFERENCES ticket(idticket)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);

CREATE TABLE ticketestado (
  idticketestado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ticket_idticket INTEGER UNSIGNED NOT NULL,
  estado_idestado INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idticketestado),
  INDEX ticketestado_FKIndex1(estado_idestado),
  INDEX ticketestado_FKIndex2(ticket_idticket),
  FOREIGN KEY(estado_idestado)
    REFERENCES estado(idestado)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(ticket_idticket)
    REFERENCES ticket(idticket)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);


