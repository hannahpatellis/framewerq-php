CREATE TABLE "users" (
  "id" int NOT NULL AUTO_INCREMENT,
  "username" varchar(100) DEFAULT NULL,
  "password_hash" varchar(100) DEFAULT NULL,
  "first_name" varchar(60) DEFAULT NULL,
  "last_name" varchar(120) DEFAULT NULL,
  "email" varchar(256) DEFAULT NULL,
  "is_admin" BOOLEAN not null default 0,
  "created_at" timestamp not null default CURRENT_TIMESTAMP,
  "updated_at" timestamp not null default CURRENT_TIMESTAMP,
  PRIMARY KEY ("id")
);